<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Penjualan extends CI_Model {
	public function __construct(){
  		parent::__construct();
 	}

 	public function insert($table,$input){
  		$this->db->insert($table,$input);
 	}

 	public function select(){
	  	$data   = $this->db->query("SELECT * FROM penjualan");
	  	return $data;
	}

	public function gett($perpage,$offset)
	{
		# code...
		return $this->db->get('penjualan', $perpage, $offset);
	}

	public function search($pointer,$perpage,$offset)
	{
		# code...
		$this->db->where('id_penjualan', $pointer);
		$this->db->or_where('kd_jenis', $pointer);
		$this->db->or_where('berat', $pointer);
		$this->db->or_where('berat', $pointer);
		$this->db->or_where('tujuan', $pointer);
		$this->db->or_where('tgl', $pointer);
		$query = $this->db->get('penjualan',$perpage,$offset);
		return $query;
		}

}