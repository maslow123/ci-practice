<?php
class C_v_hellovar extends CI_Controller{
		function index(){
			$data = array();
			$data['halo'] = "Ini Hello dari array"; // membuat variable $halo yang nantinya akan dipakai di folder view

			//meload data dari view 
			$this->load->view("v_c_hellovar",$data);
		}
	}