<?php
class BarangModel extends CI_Model{
	function listBarang(){
		$hasil = $this->db->get('tbl_barang');
		return $hasil->result();
	}

	function saveBarang(){
		$harga = $this->input->post('harga');
		$diskon = 10;
		if ($harga>40000) {
			$harga *= (100-$diskon)/100;
		}
		$data = array(
			'nama_barang' => $this->input->post('nama_barang'),
			'kategori' => $this->input->post('kategori'),
			'harga' => $harga
		);
		$result = $this->db->insert('tbl_barang',$data);
		return $result;
	}

	function updateBarang(){
		$id = $this->input->post('id');

		$harga = $this->input->post('harga');
		$diskon = 10;
		if ($harga>40000) {
			$harga *= (100-$diskon)/100;
		}
		$data = array(
			'nama_barang' => $this->input->post('nama_barang'),
			'kategori' => $this->input->post('kategori'),
			'harga' => $harga
		);
		$this->db->set($data);
		$this->db->where('id', $id);
		$result = $this->db->update('tbl_barang');
		return $result;
	}

	function deleteBarang(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$result = $this->db->delete('tbl_barang');
		return $result;
	}
}
