<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_JenisProduk extends CI_Model {
	public function __construct(){
  		parent::__construct();
 	}

 	public function select(){
	  	$data   = $this->db->query("SELECT * FROM jenis_produk");
	  	return $data;
	}
}