<?php
	class c_arrayloop extends CI_Controller{

		function index(){
			$data['list'] = array('pakaian','mainan','makanan');

			$data['title'] = "Judul dari array asosiatif";
			$data['heading'] = "Sub judul dari array asossiatif";

			$this->load->view("v_arrayloop/v_arrayloop",$data);
		}
	}