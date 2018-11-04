<?php
	class M_hello extends CI_Model{
		var $halo = "Iam from model";

		function tes(){
			$kalimat = $this->halo." Salam kenal";
			return $kalimat;	
		}

	}