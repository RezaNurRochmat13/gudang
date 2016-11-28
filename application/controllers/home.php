<?php if(! defined('BASEPATH')) exit('No direct access allowed');

class home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		
	}

	public function index(){
		if($this->session->userdata('logged_in')){
			$session_data=$this->session->userdata('logged_in');
			$data['nama_pengguna']=$session_data['nama_pengguna'];
		}else{
			redirect('login','refresh');
		}
	}

	public function logout(){

		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}

?>