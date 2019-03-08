<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_User','user');
	}

	public function loginform()
	{
		$this->load->view('pages/login');
	}
	public function registerform()
	{
		# code...
		$this->load->view('pages/register');
	}

	public function ceklogin()
	{
		# code...
		$this->form_validation->set_rules('username_bs', 'username', 'trim|required',array('required'=>'Harap Isi Username Bank Sampah'));
		$this->form_validation->set_rules('katasandi_bs', 'katasandi', 'trim|required',array('required'=>'Harap Isi Katasandi Bank Sampah'));
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->load->view('pages/login');
		} 

		else {
			$username = $this->input->post('username_bs');
			$katasandi = do_hash($this->input->post('katasandi_bs'),'md5');
			if($this->user->ceklogin($username,$katasandi)==TRUE){
				$saldo = $this->user->getSaldoWhereUsername($username);
				$data = array('username'=>$username,
					'saldo'=>$saldo);
				$this->session->set_userdata($data);
				redirect(base_url().'C_Dashboard','refresh');
			}
			else {
				$this->session->set_flashdata('loginfail', 'Username atau Katasandi salah');
			    redirect('C_User/loginform','refresh');}
		}

	}
	public function cekregister()
	{
		# code...
		//echo $this->input->post('nama_bs');
		//VALIDASI FORM//
		$this->form_validation->set_rules('nama_bs','Nama Bank Sampah','trim|required|min_length[5]|max_length[50]',
			array('required'=>'Harap masukan nama bank sampah','min_length'=>'Nama bank sampah minimal 5 karakter','max_length'=>'Nama bank sampah maksimal 50 karakter'));

		$this->form_validation->set_rules('nohp_bs', 'Nomor Hp Bank Sampah', 'trim|required|exact_length[12]|numeric',array('required'=>'Masukan nomor handphone','exact_length'=>'Nomor handphone salah','numeric'=>'Nomor handphone berupa angka'));

		$this->form_validation->set_rules('email', 'Email Bank Sampah', 'required|valid_email',array('required'=>'Masukan email','valid_email'=>'Format email harus mengadung \'@\'. Example (team@gonigoni.com)'));

		$this->form_validation->set_rules('username_bs', 'Username Bank Sampah', 'required|min_length[5]|max_length[50]|callback_username_check',array('required'=>'Masukan username','min_length'=>'Minimal karakter 5','max_length'=>'Maksimal karakter 50'));

		$this->form_validation->set_rules('katasandi_bs', 'Katasandi Bank Sampah', 'required|min_length[8]|max_length[50]|alpha_numeric|callback_password_check',array('required'=>'Masukan kata sandi','min_length'=>'Minimal karakter 5','max_length'=>'Maksimal karakter 50'));

		$this->form_validation->set_rules('rekatasandi_bs', 'Ulangi Katasandi Bank Sampah', 'required|matches[katasandi_bs]',array('required'=>'Ulangi kata sandi','matches'=>'Kata sandi tidak cocok'));
		//END///
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->load->view('pages/register');
		}
		else{
		$nama_bs= $this->input->post('nama_bs');
		$no_hp=$this->input->post('nohp_bs');
		$email=$this->input->post('email');
		$username=$this->input->post('username_bs');
		$katasandi=do_hash($this->input->post('katasandi_bs'),'md5');
		if($this->user->usercek($username,$no_hp)==TRUE){
			$this->session->set_flashdata('usercek', 'No hanphone atau username sudah terdaftar');
			redirect('C_User/registerform','refresh');
		}
		else{
			$data =array(
				'nama_bs'=>$nama_bs,
				'no_hp'=>$no_hp,
				'email'=>$email,
				'username'=>$username,
				'katasandi'=>$katasandi);
			$this->user->insertuser($data);
			redirect('C_User/loginform','refresh');
		}
		} 
	}


	//CALLBACK//
	public function username_check($val)
	{
		# code...
		if(!preg_match('#\W#',$val) && !preg_match('/\s/', $val)){
			return true;
		}
		else{
			$this->form_validation->set_message('username_check','Username tidak boleh mengandung spasi dan simbol');
			return false;
		}
	}
	public function password_check($val)
	{
		# code...
		if(!empty($val)){
		if(preg_match('#[0-9]#', $val) && preg_match('#[a-z]#', $val) && preg_match('#[A-Z]#', $val) && !preg_match('/\s/', $val))
		{
			return true;
		}
		else{
			$this->form_validation->set_message('password_check','Kata sandi harus kompleks(huruf besar dan kecil, serta angka) dan tidak mengandung simbol');
			return false;
		}
	}
	}
	///END CALLBACK///
	public function logout()
	{
		# code...
		$this->session->sess_destroy();
		redirect('C_User/loginform','refresh');
	}

}

/* End of file C_User.php */
/* Location: ./application/controllers/C_User.php */