<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="gaya.css">
</head>
<body>
<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

	class Formulir extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->helper(array('url','form'));
		}
		public function index(){
			$this->load->library('form_validation');

			$this->form_validation->set_rules('nis','nis','required|numeric'); // name = nis , // coment = nis , type= required
			$this->form_validation->set_rules('nama','nama','required');
			$this->form_validation->set_rules('alamat','alamat','required');

			if($this->form_validation->run() != false){ // jika form tidak ada validasi , maka...
				if($this->input->post('kirim')){ // jika button kirim beraksi maka...
					// urai masing-masing variable post
					$data['nis'] = $this->input->post('nis');
					$data['nama']= $this->input->post('nama');
					$data['alamat'] = $this->input->post('alamat');
				}
				$this->load->view('v_biodata/hasil',$data);
			}else{ // jika form ada yang tervalidasi maka tetap di tampilan awal
				$this->load->view('v_biodata/daftar'); 
			}	
		}	
	}