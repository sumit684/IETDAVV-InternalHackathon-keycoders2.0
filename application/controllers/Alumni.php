<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Alumni_Model');
	}

	public function index()
	{
		$this->load->view('alumni/registration_form');
	}

	public function alumniLogin(){
		$data = array("mob_no"=>$this->input->post('mob-no'), "password"=>$this->input->post('login-password'));
		$result = $this->Alumni_Model->authenticateAlumni($data);
		if($result["id"]){
			echo "sahi hai bhai";
		}else{
			echo "galat hai bhai";
		}
	}
	public function user(){
		echo "This is admin user_page";
	}
}
