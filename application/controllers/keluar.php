<?php if(! defined('BASEPATH')) exit('No direct access allowed');

class keluar extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_keluar');
		$this->load->helper(array('form','url'));
		$this->load->library('pagination');
		$this->load->library('session');
		$this->load->database();
	}

	public function getData(){
		$jumlah_data = $this->model_keluar->jumlah_data();
	    $config['base_url'] = base_url().'index.php/keluar/getData/';
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
	    $data['qkeluar'] = $this->model_keluar->data($config['per_page'],$from);
		$this->load->view('vkeluar',$data);
	}

	public function tambahData(){
		if($this->input->post('submit')){
			$this->model_keluar->tambah();
			$msg = "<div class='alert alert-success'> Data successfully inserted.</div>";
        	$this->session->set_flashdata("msg", $msg); 
			redirect('keluar/getData');
		}

		$this->load->view('vformkeluar');
	}

	public function edit($kode){
		$where = array('kode_barang' => $kode);
		$data['edit_keluar'] = $this->model_keluar->edit_data($where,'barang')->result();
		$data['kategori'] = $this->model_keluar->getKategori();
		$this->load->view('vdetkeluar',$data);
	}

	public function update(){
		$kode=$this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$tanggal_perolehan_barang = $this->input->post('tanggal_perolehan_barang');
		$harga_perolehan_barang = $this->input->post('harga_perolehan_barang');
		$kode_kategori_barang = $this->input->post('kode_kategori_barang');

		$data = array(
			'nama_barang' => $nama_barang,
			'tanggal_perolehan_barang' => $tanggal_perolehan_barang,
			'harga_perolehan_barang' => $harga_perolehan_barang,
			'kode_kategori_barang' => $kode_kategori_barang
			);

		$where = array(

			'kode_barang' => $kode
			);

		$this->model_keluar->update_data($where,$data,'barang');
		$msg1 = "<div class='alert alert-info'> Data successfully updated.</div>";
        $this->session->set_flashdata("msg1", $msg1); 
		redirect('keluar/getData');
	}

	public function delete($id){
		$where = array('kode_barang' => $id);
		$this->model_keluar->delete($where,'barang');
		$msg2 = "<div class='alert alert-danger'> Data successfully deleted.</div>";
        $this->session->set_flashdata("msg2", $msg2); 
		redirect('keluar/getData');
	}

	function cariData(){
        $keyword=$this->input->post('keyword');
        $data['qkeluar']=$this->model_keluar->search($keyword);
        $this->load->view('vkeluar',$data);
    }
}

?>