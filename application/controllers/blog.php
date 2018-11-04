<?php if(! defined('BASEPATH')){exit('No direct script access allowed');}

	class Blog extends CI_Controller{
		function __construct(){
			parent :: __construct();
		}
		function index(){
			echo "Haloo... saya adalah teks dari codeigniter";
		}
		function komentar(){
			echo "ini adalah komentar ";
		}
	}
	/* end of file blog.php */
	/* Location : ./application/controllers/blog.php */
