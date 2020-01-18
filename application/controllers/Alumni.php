<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Alumni_Model');
	}

	public function index()
	{
		$this->load->view('alumni/alumniLogin');
	}

	public function alumniLogin(){
		$data = array("mob_no"=>$this->input->post('mob-no'), "password"=>$this->input->post('login-password'));
		$result = $this->Alumni_Model->authenticateAlumni($data);
		if($result["id"]){
			echo "Authentic Alumni";
		}else{
			echo "Not Authentic Alumni";
		}
	}

	public function form(){
		$this->load->view('alumni/registration_form');
	}

	public function register(){
		
		$data = array(
			"fname"=>$this->input->post('fname'),
			"lname"=>$this->input->post('lname'),
			"year_adm"=>$this->input->post('year_adm'),
			"year_leaving"=>$this->input->post('year_leaving'),
			"email_id"=>$this->input->post('email_id'),
			"password"=>$this->input->post('password'),
			"college_id"=>$this->input->post('college_id'),
			"enroll_no"=>$this->input->post('enroll_no'),
			"mob_no"=>$this->input->post('mob_no'),
			"marital_stat"=>$this->input->post('marital_stat'),
			"dob"=>$this->input->post('dob'),
			"gender"=>$this->input->post('gender'),
			"address"=>$this->input->post('address'),
			"occupation"=>$this->input->post('occupation'),
			"brief_profile"=>$this->input->post('brief_profile'),
			"achievements"=>$this->input->post('achievements'),
			);

		$result = $this->Alumni_Model->registerAlumni($data);
		if($result==TRUE){
			echo "registered";
		}else{
			echo "not registered";
		}
	}
	public function home(){
		$this->load->view('alumni/home');
	}
	public function profile(){
		$this->load->view('alumni/profile');
	}
	public function user(){
		echo "This is admin user_page";
	}
}
