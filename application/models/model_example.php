<?php
	class Model_example extends Model{
		var $title = "";
		var $content = "";
		var $date ="";
		
		function model_example(){
			parent :: Model();
		}
		function get_data(){
			$query = $this->db->get('entries',10);
			return $query ->result();
		}
	}
	/* end of file model_example.php 
	   Location : application/model/model_example.php */