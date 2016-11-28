<?php


class model_user extends CI_Model{


	function data($number,$offset){
		$this->db->select('*');
		return $query = $this->db->get('pengguna',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		$this->db->select('*');
		return $this->db->get('pengguna')->num_rows();
	}

	function tambah(){
		$id_pengguna = $this->input->post('id_pengguna');
		$nama_pengguna = $this->input->post('nama_pengguna');
		$pass = $this->input->post('password');

		$data = array(
			'id_pengguna' => $id_pengguna,
			'nama_pengguna' => $nama_pengguna,
			'password' => MD5($pass)
			);

		$this->db->insert('pengguna',$data);

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