<?php if(! defined('BASEPATH')){exit('No direct script access allowed');}

	class Pendaftaran extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper(array('url','form'));
		}
		function index(){
			$this->load->view('menu_pendaftaran');
			}
		function daftar(){
			// make a validation for form 
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nis','nis','required|integer');
			$this->form_validation->set_rules('nama','nama','required|alpha');
			$this->form_validation->set_rules('jurusan','jurusan','required|alpha');
			$this->form_validation->set_rules('ttl','ttl','required|max_length[30]');
			$this->form_validation->set_rules('telepon','telepon','required|numeric');
			// make a conditional
			if($this->form_validation->run()){
				$data['nis'] = (integer) $this->input->post('nis',true);
				$data['nama'] = (string) $this->input->post('nama',true);
				$data['jurusan']=(string) $this->input->post('jurusan',true);
				$data['ttl'] =(string) $this->input->post('ttl',true);
				$data['telepon']=(int)$this->input->post('telepon',true);
			}else{
				$data['nis'] = false;
				$data['nama'] = false;
				$data['jurusan'] = false;
				$data['ttl'] = false;
				$data['telepon'] = false;
			}
			$this->load->view('daftar',$data);
		}
		function hasil(){
			$this->load->view('hasil_form');
		}
	}
	