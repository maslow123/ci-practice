<?php if(! defined('BASEPATH')){exit('No direct script access allowed');}

	class Blog2 extends CI_Controller{
		function __construct(){
			parent :: __construct();
		}
		function index(){
			$this ->load->view("hello_codeigniter.php");
		}
	}
	/* end of file blog.php */
	/* Location : ./application/controllers/blog2.php */
