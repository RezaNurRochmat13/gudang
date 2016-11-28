<?php if(! defined('BASEPATH')) exit('No direct access allowed');

class kategoriBarang extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->model('model_kategori');
		$this->load->helper('form','url');
    $this->load->library('pagination');
    $this->load->library('session');
    $this->load->database();

	}

	function tambahKategori(){
		if($this->input->post('submit')){
			  $this->model_kategori->tambah();
		    $msg = "<div class='alert alert-success'> Data successfully inserted.</div>";
        $this->session->set_flashdata("msg", $msg); 
			  redirect('kategoriBarang/getKategori');
			
		}

		$this->load->view('vformtambahkategori');

	}

	 function getKategori(){
		  $jumlah_data = $this->model_kategori->jumlah_data();
      $config['base_url'] = base_url().'index.php/kategoriBarang/getKategori/';
      $config['total_rows'] = $jumlah_data;
      $config['per_page'] = 5;
      $from = $this->uri->segment(3);

      //Konfigurasi pagination bootrap
      $config['full_tag_open'] = '<ul class="pagination">';
      $config['full_tag_close'] = '</ul>';
      $config['first_link'] = true;
      $config['last_link'] = true;
      $config['first_tag_open'] = '<li>';
      $config['first_tag_close'] = '</li>';
      $config['prev_link'] = '&laquo';
      $config['prev_tag_open'] = '<li class="prev">';
      $config['prev_tag_close'] = '</li>';
      $config['next_link'] = '&raquo';
      $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
      $config['last_tag_open'] = '<li>';
      $config['last_tag_close'] = '</li>';
      $config['cur_tag_open'] = '<li class="active"><a href="#">';
      $config['cur_tag_close'] = '</a></li>';
      $config['num_tag_open'] = '<li>';
      $config['num_tag_close'] = '</li>';

      $this->pagination->initialize($config);   
      $data['qkategori'] = $this->model_kategori->data($config['per_page'],$from);
		  $this->load->view('vkategoribarang',$data);
	}

	function edit($id){
      $where = array('kode_kategori_barang' => $id);
      $data['edit'] = $this->model_kategori->edit_data($where,'kategori_barang')->result();
      $this->load->view('vdetkategori',$data);
    }

   	function update(){
        $id = $this->input->post('kode_kategori_barang');
        $nama_kategori_barang = $this->input->post('nama_kategori_barang');

          $data = array(
          'nama_kategori_barang' => $nama_kategori_barang
          );

        $where = array(
          'kode_kategori_barang' => $id
        );

        $this->model_kategori->update_data($where,$data,'kategori_barang');
         $msg1 = "<div class='alert alert-info'> Data updated successfully.</div>";
          $this->session->set_flashdata("msg1", $msg1); 
        redirect('kategoriBarang/getKategori');
      }

   	function delete($id){
    	  $where = array('kode_kategori_barang' => $id);
        $this->model_kategori->delete($where,'kategori_barang');
        $msg2 = "<div class='alert alert-danger'> Data deleted successfully.</div>";
        $this->session->set_flashdata("msg2", $msg2); 
        redirect('kategoriBarang/getKategori');
      
	   }

}





?>