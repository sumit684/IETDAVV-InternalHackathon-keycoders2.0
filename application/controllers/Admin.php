<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/Admin_Model');
		$this->load->model('Chat_Model');
		$this->header = 'include/admin/header';

	}

	public function check_login(){
		if($this->session->userdata('mob_no')==NULL){
			redirect(base_url().'admin');
		}
	}
	
	public function index()
	{	
		if($this->session->userdata('mob_no')!=NULL){
			redirect(base_url().'admin/home');
		}else{
			$this->load->view('admin/college/clgAdminLogin');
		}
	}

	public function home(){
		$this->check_login();
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view($this->header,$data);
		$this->load->view('admin/college/home',$data);
	}
	public function newsletter(){
		$this->check_login();
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view($this->header,$data);
		$this->load->view('admin/college/newsletter',$data);
	}

	public function destroy(){
		$this->session->sess_destroy();
		redirect(base_url().'admin');
	}

	public function adminLogin(){
		$data = array("mob_no"=>$this->input->post('mob-no'), "password"=>$this->input->post('login-password'));
		$session_data = array("mob_no"=>$this->input->post('mob-no'));
		$result = $this->Admin_Model->authenticateAdmin($data);
		if($result["id"]){
			$this->session->set_userdata($session_data);
			$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
			$data['pending']=$this->Admin_Model->getnewstudents();
			$this->home();
		}else{
			$this->session->set_flashdata('error','Invalid Details');
			$this->index();
		}
	}

	public function search(){
		$this->check_login();
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view($this->header,$data);
		$this->load->view('admin/college/search');
	}

	public function notices(){
		$this->check_login();
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view($this->header,$data);
		echo "This is admin user_page";
	}

	public function alumni(){
		$this->check_login();
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view($this->header,$data);
		$this->Admin_Model->getregisteredAlumni();
	}

	public function requests(){
		$this->check_login();
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view($this->header,$data);
		$this->load->view('admin/college/requests',$data);

	}

	public function events(){
		$this->check_login();
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		// $this->load->view($this->header,$data);
		echo "events Page";
	}

	public function email(){
		$this->check_login();
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view($this->header,$data);
		echo "email is sent";
	}


	public function acceptRequest($id){
		$this->Admin_Model->acceptRequest($id);

		$id = $this->Chat_Model->check_user_id(array('user_id'=>$id));
				// $id= $this->Chat_Model->update_last_activity(array('user_id'=>$user_id));
		if($id == TRUE){
			$this->Chat_Model->update_last_activity(array('user_id'=>$id));

		}
		else{
			$this->Chat_Model->insert_last_activity(array('user_id'=>$id));
		}

		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view($this->header,$data);
		$this->load->view('admin/college/requests',$data);
		$this->load->view('admin/mail/mailSuccesful',$data);
		
	}

	public function rejectRequest($id){

		$this->Admin_Model->rejectRequest($id);
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view($this->header,$data);
		$this->load->view('admin/college/requests',$data);
		$this->load->view('admin/mail/mailRejected',$data);

	}
	public function addEvents(){
		$this->check_login();
		// $this->input->post('event_name');
		// $this->input->post('event_desc');
		$data = array("event_name"=>$this->input->post('event_name'),"event_desc"=>$this->input->post('event_desc'),"college_id"=>'1',"admin_id"=>'1',"event_date"=>'2020-01-01');
		
		$this->db->insert('events',$data);

		// $data['events'] = $this->Alumni_Model->geteventList()->result();
		redirect(base_url().'admin/home');
	}


}
