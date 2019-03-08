<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard extends CI_Controller {
public function __construct()
{
	parent::__construct();
	//Do your magic here
	$this->load->model('M_Penjualan','jualan');
	$this->load->model('M_JenisProduk','produk');
}
	public function index()
	{
	   if($this->session->userdata('username')){
	   	$this->load->view('main/header');
	   	$this->load->view('main/sidebar');
	   	$this->load->view('pages/dashboard');
	   	$this->load->view('main/footer');
	   }
	   else{
	   	redirect(base_url().'C_user/loginform','refresh');
	   }
	}
	public function sampahKeluar()
	{
	   if($this->session->userdata('username')){
		$data['sampahkeluar'] = $this->jualan->select()->result_array();
	   	$this->load->view('main/header');
	   	$this->load->view('main/sidebar');
		$this->load->view('pages/sampahkeluar',$data);
	   	$this->load->view('main/footer');
			}
		else{
		 redirect(base_url().'C_user/loginform','refresh');
		}
	}

	public function paging($offset=0)
	{
		# code...
		if($this->session->userdata('username')){
			$this->load->library('pagination');
			
			$config['base_url'] = base_url().'C_Dashboard/paging';
			$config['total_rows'] = $this->jualan->select()->num_rows();
			$config['per_page'] = 5;
			$config['num_links'] = 3;
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$config['first_tag_open'] = '<div>';
			$config['first_tag_close'] = '</div>';
			$config['last_tag_open'] = '<div>';
			$config['last_tag_close'] = '</div>';
			$config['next_tag_open'] = '<div>';
			$config['next_tag_close'] = '</div>';
			$config['prev_tag_open'] = '<div>';
			$config['prev_tag_close'] = '</div>';
			$config['cur_tag_open'] = '<b>';
			$config['cur_tag_close'] = '</b>';
			$this->pagination->initialize($config);
			$data['halaman'] =$this->pagination->create_links();
			$data['offset'] = $offset;
			$data['sampahkeluar'] =$this->jualan->gett($config['per_page'],$offset);			
			$this->load->view('main/header');
		   	$this->load->view('main/sidebar');
			$this->load->view('pages/sampahkeluar',$data);
		   	$this->load->view('main/footer');

		}
		else{
			redirect(base_url().'C_user/loginform','refresh');
		}
	}

	public function inputSampahKeluar(){
			if($this->session->userdata('username')){
				$data['jenisproduk'] = $this->produk->select()->result_array();
			   	$this->load->view('main/header');
			   	$this->load->view('main/sidebar');
				$this->load->view('pages/inputsampahkeluar',$data);
	   			$this->load->view('main/footer');
			}
			else{
			   redirect(base_url().'C_user/loginform','refresh');
			}
		}

}

/* End of file C_Dashboard.php */
/* Location: ./application/controllers/C_Dashboard.php */