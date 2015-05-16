<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = 'Homepage';
		$this->load->view('templates/header', $data);
		$this->load->view('welcome');
		$this->load->view('templates/footer', $data);
	}
	public function pages($page)
	{
		$data['title'] = 'Test Page';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'. $page, $data);
		$this->load->view('templates/footer', $data);
	}
	public function angular($extra = NULL)
	{
		if(!empty($extra)){
			$extra = '/' . $extra;
		}
		$data['title'] = 'Test Page';
		$this->load->view('templates/header-angular', $data);
		$this->load->view('pages/angular'. $extra, $data);
		$this->load->view('templates/footer-angular', $data);
	}
}