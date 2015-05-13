<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/REST_Controller.php';

class RESTAPI extends REST_Controller {

	// The HTTP methods are APPENDED to the method names (with underscore!)
	// Should use this general format for the http requests: index_METHOD
	// So, for example, a GET request to the api REST controller would be sent 
	// to the index_get() method

	// And if you were sending a POST request to the api REST controller,
	// the request would be sent to the index_post() method

	public function index_get()
	{
		//$data = array('returned: '. $this->get('id'));
        $this->response('GET: '.$this->get('id'));
	}

	public function index_post()
	{
		$this->response('POST: '.$this->post('id'));
	}

	public function index_put()
	{
		$this->response('PUT: '.$this->put('id'));
	}

	public function index_delete()
	{
		//There is no delete method available, but you can add things to do here.
	}
}
