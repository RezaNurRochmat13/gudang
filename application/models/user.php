<?php 

class user extends CI_Model{

  function login($nama_pengguna, $password){

   $this ->db-> select('id_pengguna, nama_pengguna, password');
   $this ->db-> from('pengguna');
   $this ->db-> where('nama_pengguna', $nama_pengguna);
   $this ->db-> where('password', MD5($password));
   $this ->db-> limit(1);
 
   $query = $this->db-> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
  }
  ?>
