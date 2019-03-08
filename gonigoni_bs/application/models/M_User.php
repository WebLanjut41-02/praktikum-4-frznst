<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {
	private $db2;
	public function __construct()
{
	parent::__construct();
	//Do your magic here
	$this->db2=$this->load->database('database2', TRUE);
}
public function ceklogin($username,$katasandi)
{
	# code...
	$this->db2->where('username',$username);
	$this->db2->where('katasandi',$katasandi);
	$query = $this->db2->get('banksampah');
	if($query->num_rows() >0){
		return TRUE;
	}
	else 
	return FALSE; 

}
public function usercek($username,$nohp)
{
	# code...
	$this->db2->where('username',$username);
	$this->db2->or_where('no_hp',$nohp);
	$query = $this->db2->get('banksampah');
	if($query->num_rows() >0){
		return TRUE;
	}
	else 
	return False; 
}
public function insertuser($data)
{
	# code...
	$this->db2->insert('banksampah',$data);
}
public function getSaldoWhereUsername($username)
{
  	$data = $this->db2->query("SELECT * FROM banksampah WHERE username ='".$username."'");
	$row = $data->row();
	return $row->saldo;
 }
}

/* End of file M_User.php */
/* Location: ./application/models/M_User.php */