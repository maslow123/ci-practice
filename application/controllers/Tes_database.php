<?php
	defined('BASEPATH') OR EXIT('No direct script access allowed');

	class Tes_database extends CI_Controller{
		function tes_database()
		{
			parent :: __construct();
		}
		public function index()
		{
			$this->load->database();

			$data = $this->db->query("Select *from mahasiswa");
				foreach($data -> result_array() as $mahasiswa){
					echo "Nama : ".$mahasiswa['nama']."<br/>";
					echo "Alamat : ".$mahasiswa['alamat']."<hr/>";
				}
		}
	}

	