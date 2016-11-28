<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class login extends CI_Controller {

public function _construct(){
	parent::_construct();
	$this->load->library('session');
    
}
 

 function index(){

	if($this->session->userdata('logged_in')!=null){
           redirect(site_url('grafiktotal/getGrafik'));
       }
    $this->load->helper(array('form'));
   	$this->load->view('login'); 

 }


 
}
 
?>