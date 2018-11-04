<?php if(!defined('BASEPATH')) exit ('No direct script access allowed !');

	class Crud extends CI_Controller{
		//fungsi construct
		function __construct(){
			parent::__construct();
			//load model
			$this->load->model('m_crud/m_crud');
			$this->load->helper('url');
		}
		function index(){
			$data['hai'] = 'Belajar crud dengan ci (:';
			$data['siswa'] = $this->m_crud->tampil();

			$this->load->view('v_crud/tampil',$data);
		}
		function tambah(){
			$this->load->view('v_crud/tambah');
		}
		function tambah_aksi(){
			// menangkap inputan form user
			$nama = $this->input->post('nama');
			$kelas = $this->input->post('kelas');
			$alamat = $this->input->post('alamat');
			// memasukkan inputan user kedalam database
			$data = array(
					'name'=>$nama,
					'kelas'=>$kelas,
					'Alamat'=>$alamat
				);
			// active record input data
			$this->m_crud->input_data('tes_table',$data); //mengisi parameter method $data dan $table pada model m_crud
			redirect('c_crud/crud/index'); // menglokasikan kembali ke index
		}
		function hapus($id){
			$where = array ('id'=>$id); // membuat variable where untuk mengambil id db
			$this->m_crud->hapus_data($where,'tes_table');

			redirect('c_crud/crud/index'); // mengalokasi kembali ke index
		}
		// membuat method untuk menampilkan data di form
		function edit($id){
			$where = array("id"=>$id);

			$data['siswa'] = $this->m_crud->edit_data($where,'tes_table')->result_array();
			$this->load->view('v_crud/edit',$data);
		}
		// method untuk menangkap model perubahan data yang ada pada database
		function update(){
			// mengambil inputan user
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$kelas = $this->input->post('kelas');
			$alamat = $this->input->post('alamat');
			// memasukkan inputan user kedalam array
			$data = array(
				'name'=>$nama,
				'kelas'=>$kelas,
				'Alamat'=>$alamat
			);
			// mengubah data dimana id = $id
			$where = array('id'=>$id);
			// memasukkan parameter function update_data yang ada didalam model
			$this->m_crud->update_data($where,$data,'tes_table');
			redirect('c_crud/crud/index'); // mengalokasikan kembali ke index
		}
	}