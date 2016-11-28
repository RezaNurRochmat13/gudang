<?php


class model_kategori extends CI_Model{


	function data($number,$offset){
		$this->db->select('*');
		return $query = $this->db->get('kategori_barang',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		$this->db->select('*');
		return $this->db->get('kategori_barang')->num_rows();
	}

	function tambah(){
		$kode_kategori_barang = $this->input->post('kode_kategori_barang');
		$nama_kategori_barang = $this->input->post('nama_kategori_barang');

		$data = array(
			'kode_kategori_barang' => $kode_kategori_barang,
			'nama_kategori_barang' => $nama_kategori_barang
			);

		$this->db->insert('kategori_barang',$data);

	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}



?>