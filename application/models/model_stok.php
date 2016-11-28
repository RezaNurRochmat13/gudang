<?php

class model_stok extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();


	}

	function data($number,$offset){
		$this->db->select('COUNT(barang.kode_barang) AS jumlah,kategori_barang.nama_kategori_barang');
		$this->db->where('barang.kode_kategori_barang=kategori_barang.kode_kategori_barang');
		$this->db->group_by('kategori_barang.nama_kategori_barang');
		return $query = $this->db->get('barang,kategori_barang',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		$this->db->select('COUNT(barang.kode_barang) AS jumlah,kategori_barang.nama_kategori_barang');
		$this->db->where('barang.kode_kategori_barang=kategori_barang.kode_kategori_barang');
		$this->db->group_by('kategori_barang.nama_kategori_barang');
		return $this->db->get('barang,kategori_barang')->num_rows();
	}

}




?>