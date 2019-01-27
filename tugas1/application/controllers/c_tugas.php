
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tugas extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('download');
		//Do your magic here
	}

	public function index($value="home")
	{
		
		$this->load->view('pages/'.$value);
		
	}

	public function downloadcv()
	{
		# code...
		//echo "string";
		force_download('cv/theme1.pdf',NULL);
	}
		public function getkomen()
	{
		# code...
		$komen=$this->input->post('komen');
		$data['kom'] = $komen;
		$this->load->view('pages/komentar', $data);
			}

}

/* End of file c_tugas.php */
/* Location: ./application/controllers/c_tugas.php */