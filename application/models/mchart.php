<?php 

class mchart extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function report_total(){
        $query = $this->db->query("SELECT COUNT(kategori_barang.nama_kategori_barang) 
        	AS jumlah,kategori_barang.nama_kategori_barang FROM barang,kategori_barang 
        	WHERE barang.kode_kategori_barang=kategori_barang.kode_kategori_barang 
        	GROUP BY kategori_barang.nama_kategori_barang");
        return $query->result(); 
     
    }

}




?>