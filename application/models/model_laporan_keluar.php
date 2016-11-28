<?php

class model_laporan_keluar extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function data($number,$offset){
		$this->db->select('barang.kode_barang,barang.nama_barang,barang.tanggal_perolehan_barang,
							barang.harga_perolehan_barang,kategori_barang.nama_kategori_barang');
		$this->db->where('barang.kode_kategori_barang=kategori_barang.kode_kategori_barang');
		return $query = $this->db->get('barang,kategori_barang',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		$this->db->select('barang.kode_barang,barang.nama_barang,barang.tanggal_perolehan_barang,
							barang.harga_perolehan_barang,kategori_barang.nama_kategori_barang');
		$this->db->where('barang.kode_kategori_barang=kategori_barang.kode_kategori_barang');
		return $this->db->get('barang,kategori_barang')->num_rows();
	}
}

?>