<?php

class Model_barang extends CI_Model{
	
	// Untuk menampilkan semua database
	public function tampil_data()
	{
		return $this->db->get('tb_barang');
	}

	// Menambah barang melalui pihak admin
	public function tambah_barang($data,$table)
	{
		$this->db->insert($table, $data);
	}

	// Mengedit barang melalui pihak admin
	public function edit_barang($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	// Meng-update barang melalui pihak admin
	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	// Menghapus barang melalui pihak admin
	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// Menambah barang  ke cart melalui pihak user

	public function find($id_brg)
	{
		$result = $this->db->where('id_brg', $id_brg)->limit(1)->get('tb_barang');

		if($result->num_rows() > 0)
		{
			return $result->row();
		}else{
			return array();
		}
	}

	public function detail_brg($id_brg)
	{
		$result = $this->db->where('id_brg',$id_brg)->get('tb_barang');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}
}