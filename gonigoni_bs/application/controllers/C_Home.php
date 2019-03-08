<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Home extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/home');
	}

}

/* End of file C_Home.php */
/* Location: ./application/controllers/C_Home.php */