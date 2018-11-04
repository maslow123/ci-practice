<?php if(!defined('BASEPATH')) exit ('No direct script access allowed !');

	class M_crud extends CI_Model{
		function __construct(){
			parent ::__construct();
		}
		function tampil(){
			$this->db->order_by('id','desc');
			$result = $this->db->get('tes_table');
			return $result->result_array();
		}
		function input_data($data,$table){
			$this->db->insert($data,$table);
		}
		function hapus_data($where,$table){
			$this->db->where($where); // ini sama seperti WHERE id='$id';
			$this->db->delete($table); // ini sama seperti DELETE table;
			}
		// membuat method untuk menampilkan data di menu view edit
		function edit_data($where,$table){
			// ini sama seperti select from namatable WHERE ...
			return $this->db->get_where($table,$where);
		}
		// method untuk mengubah data yang ada pada database
		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
	}