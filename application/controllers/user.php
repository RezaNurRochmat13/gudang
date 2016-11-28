<?php if(! defined('BASEPATH')) exit('No direct access allowed');

class user extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_user');
		$this->load->helper(array('form','url'));
		$this->load->library('pagination');
		$this->load->library('session');
		$this->load->database();
	}

	public function getData(){
		$jumlah_data = $this->model_user->jumlah_data();
	    $config['base_url'] = base_url().'index.php/user/getData/';
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
	    $data['quser'] = $this->model_user->data($config['per_page'],$from);
		$this->load->view('vuser',$data);
	}

	public function tambahData(){
		if($this->input->post('submit')){
			$this->model_user->tambah();
			$msg = "<div class='alert alert-success'> Data successfully inserted.</div>";
        	$this->session->set_flashdata("msg", $msg); 
			redirect('user/getData');
		}

		$this->load->view('vformpengguna');
	}

	public function edit($id_pengguna){
		$where = array('id_pengguna' => $id_pengguna);
		$data['edit_pengguna'] = $this->model_user->edit_data($where,'pengguna')->result();
		$this->load->view('vdetpengguna',$data);
	}

	public function update(){
		$id_pengguna=$this->input->post('id_pengguna');
		$nama_pengguna = $this->input->post('nama_pengguna');
		$pass = $this->input->post('password');

		$data = array(
			'nama_pengguna' => $nama_pengguna,
			'password' => MD5($pass)
			);

		$where = array(

			'id_pengguna' => $id_pengguna
			);

		$msg2 = "<div class='alert alert-info'> Data successfully updated.</div>";
        $this->session->set_flashdata("msg2", $msg2); 
		$this->model_user->update_data($where,$data,'pengguna');
		redirect('user/getData');
	}

	public function delete($id){
		$where = array('id_pengguna' => $id);
		$msg3 = "<div class='alert alert-danger'> Data successfully deleted.</div>";
        $this->session->set_flashdata("msg3", $msg3); 
		$this->model_user->delete($where,'pengguna');
		redirect('user/getData');
	}
}

?>