<?php if(! defined('BASEPATH')) exit('No direct access allowed');

class grafiktotal extends CI_Controller{


	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('mchart');
		
	}

	public function getGrafik()
	{
	
	 	$data['report'] = $this->mchart->report_total();
        $this->load->view('vgrafiktotal', $data);
	}

	function coba()
	{
		$data = $this->mchart->report_total();
		echo json_encode($data);
	}

	public function grafik()
	{
		$data = $this->mchart->report_total();
		echo json_encode($data);
		$this->load->view('vgrafiktotal',$data);
	}
}


?>