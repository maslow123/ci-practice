<?php
	class c_blog extends CI_Controller{

		function blog(){
			$this->load->model("m_blog/blog"); // memuat model blog 

			$data['request'] = $this->blog->hello(); // memuat fungsi yang ada didalam model blog

			$this->load->view('v_blog/blog',$data); // menampilkan view blog serta memasukkan array $data kedalam view blog
		}
	}