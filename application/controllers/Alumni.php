<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Alumni_Model');
		$this->load->model('Chat_Model');
	}

	public function check_login(){
		if($this->session->userdata('mob_no')==NULL){
			redirect(base_url().'alumni');
		}
	}

	public function feedback(){
		$this->load->view('alumni/feedback');
	}

	public function feedback_register(){
		
		$data = array(
			"q1"=>$this->input->post('q1'),
			"q2"=>$this->input->post('q2'),
			"q3"=>$this->input->post('q3'),
			"q4"=>$this->input->post('q4'),
			"q5"=>$this->input->post('q5'),
			"q6"=>$this->input->post('q6'),
			"q7"=>$this->input->post('q7'),
			"q8"=>$this->input->post('q8'),
			"q9"=>$this->input->post('q9'),
			"q10"=>$this->input->post('q10'),
			
		);
        // echo $data;
		$result = $this->Alumni_Model->registerAlumni($data);
		if($result==TRUE){
			$this->session->set_flashdata('reg_success',"Successfully Registered");
			redirect(base_url()."alumni");
		}else{
			$this->session->set_flashdata('reg_error',"Not Registered");
			redirect(base_url()."alumni");
		}
	}
	

	public function index(){
		if($this->session->userdata('mob_no')!=NULL){
			redirect(base_url().'alumni/home');
		}else{
			$this->load->view('alumni/alumniLogin');
		}
	}

	public function jobs_page(){
		if($this->session->userdata('mob_no')!=NULL){
			$edata['events'] = $this->Alumni_Model->geteventList()->result();
		
						$this->load->view('include/alumni/header');
						$this->load->view('alumni/jobs',$edata);}
			// redirect(base_url().'alumni/home');
		else{	$this->load->view('include/alumni/header');
				$this->load->view('alumni/alumniLogin');
	}}
	
	public function destroy(){
		$this->session->sess_destroy();
		redirect(base_url().'alumni');
	}

	public function alumniLogin(){
		$data = array("email_id"=>$this->input->post('email'), "password"=>md5($this->input->post('login-password')),'status'=>1);
		$result = $this->Alumni_Model->authenticateAlumni($data);
		// echo "<pre>";
		// print_r($result[0]['id']);
		// print_r($result[0]['fname']);exit;
		if($result){
			$session_data = array('email_id'=>$this->input->post('email'),'mob_no'=>$result[0]['mob_no'],'username'=>$result[0]['fname'],'user_id'=>$result[0]['id'],'lname'=>$result[0]['lname'],'role'=>'alumni');
			$this->session->set_userdata($session_data);
			
			$user_id = $this->session->userdata('user_id');
			$id = $this->Chat_Model->check_user_id(array('user_id'=>$user_id));
				// $id= $this->Chat_Model->update_last_activity(array('user_id'=>$user_id));
			if($id == TRUE){
				$this->Chat_Model->update_last_activity(array('user_id'=>$user_id));

			}
			else{
				$this->Chat_Model->insert_last_activity(array('user_id'=>$user_id));
			}



			$result['alumni'] = $result;
			$this->load->view('include/alumni/header');
			$edata['events'] = $this->Alumni_Model->geteventList()->result();
			$edata['mob_no'] = $this->session->userdata('mob_no');
			$this->load->view('alumni/home',$edata,$data);
		}else{
			$this->session->set_flashdata('error','Invalid Details');
			$this->load->view('alumni/alumniLogin');
		}
		// print_r($result);
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
			"password"=>md5($this->input->post('password')),
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
			"country"=>$this->input->post('country'),
			"course"=>$this->input->post('course'),

		);
        // echo $data;
		$result = $this->Alumni_Model->registerAlumni($data);
		if($result==TRUE){
			$this->session->set_flashdata('reg_success',"Successfully Registered");
			redirect(base_url()."alumni");
		}else{
			$this->session->set_flashdata('reg_error',"Not Registered");
			redirect(base_url()."alumni");
		}
	}
	public function readmore(){
		$data = array(
			"fname"=>$this->input->post('fname'),
		);
		echo $data['fname'];

	}
	public function home(){
		$this->check_login();
		$data['events'] = $this->Alumni_Model->geteventList()->result();
		$this->load->view('include/alumni/header');
		$this->load->view('alumni/home',$data);
	}
	public function profile(){
		
		$this->check_login();
		$data = array('mob_no'=>$this->session->userdata('mob_no'));
		$result['alumni'] = $this->Alumni_Model->getAlumniDetails($data);
		$this->load->view('include/alumni/header');
		$this->load->view('alumni/profile',$result);
	}
	public function newsletters(){
		$this->check_login();
		$data = array('mob_no'=>$this->session->userdata('mob_no'));
		$result['alumni'] = $this->Alumni_Model->getAlumniDetails($data);
		$newsletter['newsletters'] = $this->Alumni_Model->newsLetters()->result();
		$newsletter['comments'] = $this->Alumni_Model->comments()->result();
		$this->load->view('include/alumni/header',$result);
		$this->load->view('admin/college/newsletter',$newsletter);
	}

	public function events(){
		$this->check_login();
		$data['events'] = $this->Alumni_Model->geteventList()->result();
		$this->load->view('include/alumni/header');
		$this->load->view('alumni/home',$data);
		// print_r($data);
	}

	public function chat(){
		$this->check_login();
		$data['events'] = $this->Alumni_Model->geteventList()->result();
		$this->load->view('include/alumni/header');
		// $this->load->view('alumni/home',$data);
		// print_r($data);

	}

	public function addEvents(){
		$this->check_login();
		// $this->input->post('event_name');
		// $this->input->post('event_desc');
		$data = array("event_name"=>$this->input->post('event_name'),"event_desc"=>$this->input->post('event_desc'),"college_id"=>'1',"admin_id"=>'1',"event_date"=>'2020-01-01');
		
		$this->db->insert('events',$data);

		$data['events'] = $this->Alumni_Model->geteventList()->result();
		redirect(base_url().'alumni/home');
	}
}
