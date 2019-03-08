<?php
	class C_Penjualan extends CI_Controller{
		public function __construct(){
		 parent::__construct();
		 $this->load->model('M_Penjualan','jualan');
	 	}

		public function inputSampahKeluar(){
			date_default_timezone_set('Asia/Jakarta');
	 		$sysdate 		= date("Y-m-d");
		 	$jenissampah 	= $this->input->post('jenissampah');
		 	$jumlah 		= $this->input->post('jumlah');
		 	$berat 			= $this->input->post('berat');
		 	$tujuan 		= $this->input->post('tujuan');

		 	$data = array(
				'tgl' 		=> $sysdate,
				'kd_jenis'	=> $jenissampah,
				'jumlah' 	=> $jumlah,
				'berat'	 	=> $berat,
				'tujuan' 	=> $tujuan
			);

		 	//insert data
			$this->jualan->insert('penjualan',$data);

			//flashdata & redirect
			$this->session->set_flashdata('insert', '<div class="alert alert-success">Data berhasil tersimpan!</div>');
		 	redirect (base_url().'C_Dashboard/paging');
		}
		public function cariWhere($offset=0)
		{
			# code...
			$value = $this->input->post('search');
			//echo $value;
			// $data['sampahkeluar'] = $this->jualan->search($value)->result_array();
		 //   	$this->load->view('main/header');
		 //   	$this->load->view('main/sidebar');
			// $this->load->view('pages/sampahkeluar',$data);
		 //   	$this->load->view('main/footer');

		   	$config['base_url'] = base_url().'C_Penjualan/cariWhere';
			$config['total_rows'] = $this->db->get('penjualan')->num_rows;
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
			$data['sampahkeluar'] =$this->jualan->search($value,$config['per_page'],$offset);			
			$this->load->view('main/header');
		   	$this->load->view('main/sidebar');
			$this->load->view('pages/sampahkeluar',$data);
		   	$this->load->view('main/footer');
		}

	}