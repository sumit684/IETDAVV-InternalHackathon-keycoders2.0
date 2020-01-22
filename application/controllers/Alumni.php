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

	public function index(){
		if($this->session->userdata('mob_no')!=NULL){
			redirect(base_url().'alumni/home');
		}else{
			$this->load->view('alumni/alumniLogin');
		}
	}
	
	public function destroy(){
		$this->session->sess_destroy();
		redirect(base_url().'alumni');
	}

	public function alumniLogin(){
		$data = array("mob_no"=>$this->input->post('mob-no'), "password"=>$this->input->post('login-password'));
		
		$result = $this->Alumni_Model->authenticateAlumni($data);
		// echo "<pre>";
		// print_r($result[0]['id']);
		// print_r($result[0]['fname']);exit;
		if($result){
			$session_data = array("mob_no"=>$this->input->post('mob-no'),'username'=>$result[0]['fname'],'user_id'=>$result[0]['id']);
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
			$edata['mob_no'] = $data['mob_no'];
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
	
		$this->load->view('include/alumni/header',$result);
		$this->load->view('admin/college/newsletter');
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
