<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/Admin_Model');
	}


	public function index()
	{	$data['alumni'] = $this->Admin_Model->getregisteredAlumni();
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
		$this->Admin_Model->getnewstudents();
	}

	public function events(){
		echo "events Page";
	}

	public function sendemail(){
		echo "email is sent";
	}
    public function clgAdminLogin(){
		$this->load->view('admin/college/clgAdminLogin');
	}

}
