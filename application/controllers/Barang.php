<?php
class Barang extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('BarangModel');
	}

	function index(){
		$header['active'] = 'soal1';
		$this->load->view('includes/header', $header);
		$this->load->view('barang');
		$this->load->view('includes/footer');
	}

	function show(){
		$data = $this->BarangModel->listBarang();
		echo json_encode($data);
	}

	function save(){
		$data = $this->BarangModel->saveBarang();
		echo json_encode($data);
	}

	function update(){
		$data=$this->BarangModel->updateBarang();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->BarangModel->deleteBarang();
		echo json_encode($data);
	}
}
