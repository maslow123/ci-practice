<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class Hitung extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->helper(array('url','form')); // untuk mengakses helper url dan form
		}
		function index(){
			$this->load->view('v_hitung/menu_hitung');
		}
		function perkalian(){
			$this->load->library('form_validation'); // menggunakan form validation

			$this->form_validation->set_rules('angka1','kotak 1','required|integer');
			$this->form_validation->set_rules('angka2','kotak 2','required|integer');

			if($this->form_validation->run()){
				$data['angka1'] = (int)$this->input->post('angka1',true); // membuat form dengan method post dan mensaring xss
				$data['angka2'] = (int)$this->input->post('angka2',true); 

				$data['hasil'] = $data['angka1'] * $data['angka2']; // menghasilkan jumlah dari angka1 * angka2
			}else{
				$data['angka1'] = 0;
				$data['angka2'] = 0;

				$data['hasil']  = 0;
			}
			$this->load->view('v_hitung/perkalian',$data);
		}
		function pembagian(){
			$this->load->library('form_validation');

			$this->form_validation->set_rules('angka1','kotak 1','required|is_natural_no_zero');
			$this->form_validation->set_rules('angka2','kotak 2','required|is_natural_no_zero');

			if($this->form_validation->run()){
				$data['angka1'] = (int)$this->input->post('angka1',true); // membuat form dengan method post dan mensaring xss
				$data['angka2'] = (int)$this->input->post('angka2',true); 

				
				$data['hasil'] = $data['angka1'] / $data['angka2']; // menghasilkan jumlah dari angka1 /angka2
			}else{
				$data['angka1'] = 0;
				$data['angka2'] = 0;

				$data['hasil'] = 0;
			}
			
			$this->load->view('v_hitung/pembagian',$data);
		}
	}