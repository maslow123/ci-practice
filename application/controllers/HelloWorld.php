<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class HelloWorld extends CI_Controller{
		function HelloWorld()
		{
			parent :: __construct();
		}
		function index()
		{
			$this -> load -> view('helloworld_view'); /* fungsi index() memanggil sebuah view yang bernama helloworld_view.php
														 kita tidak bisa mengakses url karena belum membuat file yang bernama helloworld_view.php didalam folder views. */
		}
	}
	/* end of file helloworld.php */
	/* Location : ./application/controllers/HelloWorld.php