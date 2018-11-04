<?php
	class C_array extends CI_Controller{

		function index(){
			$data = array(
				'title' => 'Ini Judul',
				'content' => 'Ini Content',
				'footer'=>'Ini footer'
				);
			$this->load->view("v_array/v_array",$data);
		}
		function assoc(){
			$data['title'] = "Ini title dari assoc";
			$data['content'] = "Ini content dari assoc";

			$this->load->view("v_array/v_array",$data);
		}
	}