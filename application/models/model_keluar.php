<?php

class model_keluar extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function getKategori(){
		$this->db->select('*');
		$this->db->from('kategori_barang');

		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function tambah(){
		$kode_barang=$this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$tanggal_perolehan_barang = $this->input->post('tanggal_perolehan_barang');
		$harga_perolehan_barang = $this->input->post('harga_perolehan_barang');
		$kode_kategori_barang = $this->input->post('kode_kategori_barang');

		$data = array(
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'tanggal_perolehan_barang' => $tanggal_perolehan_barang,
			'harga_perolehan_barang' => $harga_perolehan_barang,
			'kode_kategori_barang' => $kode_kategori_barang
			);

		$this->db->insert('barang',$data);

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

	function search($keyword){
    	$this->db->select('barang.kode_barang,barang.nama_barang,barang.tanggal_perolehan_barang,
							barang.harga_perolehan_barang,kategori_barang.nama_kategori_barang');
		$this->db->where('barang.kode_kategori_barang=kategori_barang.kode_kategori_barang');
        $this->db->like('barang.nama_barang',$keyword);
        $query  =   $this->db->get('barang,kategori_barang');
        return $query->result();
    }
}

?>