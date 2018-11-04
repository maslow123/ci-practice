<?php if(!defined ('BASEPATH')) exit ('No direct script access allowed !');

	class User extends CI_Controller{

		function __construct(){
			parent::__construct();

			// load model
			$this->load->model('m_user/m_user');
		}
		function index(){
			echo $this->m_user->admin();
		}
	}