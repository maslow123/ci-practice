<?php
	class M_user extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		public function admin(){
			// kode program
			$tes = "Halo saya admin dari website ini ";
			return $tes;
		}
	}