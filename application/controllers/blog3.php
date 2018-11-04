<?php if(! defined('BASEPATH')){exit('No direct script access allowed');}

	class Blog3 extends CI_Controller{
		function __construct(){
			parent :: __construct();
		}
		function index(){
			$data['judul'] = "Ini adalah judul blog";
			$data['isi'] = "Ini adalah isi dari blog";
			$out = $this->load->view("blog_view",$data,true);
			echo $out;
		}
	}
	/* end of file blog.php */
	/* Location : ./application/controllers/blog3.php */
