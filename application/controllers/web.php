<?php
	defined('BASEPATH') OR exit('No direct script access denied');

	class Web extends CI_Controller{
		function__construct(){
			parent::__construct();
			$this->load->helper('url');
		}
		public function index(){
			$data['judul'] = "Halaman depan";
			$this->load->view('v_index.php',$data);
		}
	}
/* End of file web.php
   Location : ./application/controllers/web.php */