<?php
 	class Hello_view extends CI_Controller{
 		function index(){
 			$this->load->view("hello_view/view_hello");
 		}
 		function komen(){
 			echo "Ini dari method kedua bro.."; 		}
 	}
 	?>