<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin/Admin_Model');
	}


	public function index()
	{
		$this->load->view('admin/college/home');
	}

	public function search(){
		$this->load->view('admin/college/search');
	}
	public function user(){
		echo "This is admin user_page";
	}
	public function students(){
		$this->Admin_Model->getregisteredAlumni();
	}
}
