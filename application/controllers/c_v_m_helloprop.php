<?php
	class C_v_m_helloprop extends CI_Controller{
		function index(){
			$this->load->model("M_hello");
			$data = array();
			$data['halo'] = $this->M_hello->hallow; // membuat $halo dengan isi dari property milik model
			$data['helo'] = "Saya dari controller"; // membuat $helo dengan isi "Saya dari controller"

			$this->load->view("v_c_hellovar",$data);
		}
	}