<?php
class CrudTemplate_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	public function getTable($table){
		$query = $this->db->get($table);
		return $query->result_array();
	}

	public function createEntry()
	{
		$front = $this->security->xss_clean($this->input->post('front'));
		$back = $this->security->xss_clean($this->input->post('back'));
		$data = array(
	        'front' => $front,
	        'back' => $back,
	    );
	    return $this->db->insert('sometable', $data);
	}

	public function deleteEntry($slug)
	{
		$deckquery = $this->db->query('SELECT id FROM decks WHERE slug=?', array($slug));
		$deck = $deckquery->row_array();
		$deckid = $deck['id'];

		$this->db->trans_start();
		$this->db->query('DELETE FROM decks WHERE id=?', array($deckid));
		$this->db->query('DELETE FROM cards WHERE deck_id=?', array($deckid));
		$this->db->trans_complete();

	}
}