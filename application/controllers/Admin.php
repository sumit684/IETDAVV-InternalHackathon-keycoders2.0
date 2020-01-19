<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/Admin_Model');
		$this->header = 'include/admin/header';

	}


	public function index()
	{	
		$this->load->view('admin/college/clgAdminLogin');
	}

	public function adminLogin(){
		$data = array("mob_no"=>$this->input->post('mob-no'), "password"=>$this->input->post('login-password'));
		$result = $this->Admin_Model->authenticateAdmin($data);
		if($result["id"]){
			// echo "running";
			$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
			$data['pending']=$this->Admin_Model->getnewstudents();
			$this->load->view($this->header,$data);
			$this->load->view('admin/college/home');
		}else{
			echo "Non-Authentic Admin User";
		}
	}

	public function home(){
		// $data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view($this->header,$data);
		$this->load->view('admin/college/home',$data);
	}

	public function search(){
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view($this->header,$data);
		$this->load->view('admin/college/search');
	}

	public function notices(){
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view($this->header,$data);
		echo "This is admin user_page";
	}

	public function alumni(){
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view($this->header,$data);
		$this->Admin_Model->getregisteredAlumni();
	}

	public function requests(){
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view($this->header,$data);
		$this->load->view('admin/college/requests',$data);

	}

	public function events(){
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		// $this->load->view($this->header,$data);
		echo "events Page";
	}

	public function email(){
		$data['pending']=$this->Admin_Model->getnewstudents();
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view($this->header,$data);
		echo "email is sent";
	}
    // public function clgAdminLogin(){
	// 	$this->load->view('admin/college/clgAdminLogin');
	// }

}
