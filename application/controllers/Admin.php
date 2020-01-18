<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/Admin_Model');
	}


	public function index()
	{	
		$this->load->view('admin/college/clgAdminLogin');
	}

	public function adminLogin(){
		$data = array("mob_no"=>$this->input->post('mob-no'), "password"=>$this->input->post('login-password'));
		$result = $this->Admin_Model->authenticateAdmin($data);
		if($result["id"]){
			$this->load->view('admin/college/clgAdminLogin');
		}else{
			echo "Non-Authentic Admin User";
		}
	}

	public function home(){
		$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
		$this->load->view('admin/college/home',$data);
	}

	public function search(){
		$this->load->view('admin/college/search');
	}

	public function user(){
		echo "This is admin user_page";
	}

	public function alumni(){
		$this->Admin_Model->getregisteredAlumni();
	}

	public function requests(){
		$data['pending']=$this->Admin_Model->getnewstudents();
		$this->load->view('admin/college/requests',$data);

	}

	public function events(){
		echo "events Page";
	}

	public function sendemail(){
		echo "email is sent";
	}
    // public function clgAdminLogin(){
	// 	$this->load->view('admin/college/clgAdminLogin');
	// }

}
