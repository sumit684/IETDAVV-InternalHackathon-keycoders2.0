<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Directorate extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Directorate_Model');
	}

	public function index()
	{	
		$session_data = array('mob_no'=>"1234567890",'username'=>"DIRECTORATE OF GOA",'role'=>'director');
		$this->session->set_userdata($session_data);

		$data['colleges']=$this->Directorate_Model->getCollegeList();
		$data['college_type']=$this->Directorate_Model->getCollegeType();
		$map_data['mapdata'] = $this->Directorate_Model->getregisteredAlumni();
		$this->load->view('include/directorate/header');
		$this->load->view('directorate/directorate_home',$data);
		$this->load->view('directorate/worldMap',$map_data);
		// echo "This is Alumni Login Page";
	}

	public function destroy(){
		$this->session->sess_destroy();
		redirect(base_url().'directorate');
	}
	
	public function alumniDisplay($college_id)
	{
		$data['alumniList']=$this->Directorate_Model->getAlumniList($college_id);
		$this->load->view('directorate/college_alumni',$data);
		// echo "This is Alumni Login Page";
	}

    public function addAdmin()
	{
		$data = array(
			'name'=>$this->input->post('name'),
			'email_id'=>$this->input->post('email_id'),
			'password'=>$this->input->post('password'),
			'mob_no'=>$this->input->post('mob_no'),
			'college_id'=>$this->input->post('college_id'),
			'status'=>$this->input->post('status'),
			'privilege'=>$this->input->post('privilege')	
	);
		$this->Directorate_Model->addAdmin($data);
		redirect(base_url().'directorate');
	}

	public function newsletters(){
		
		
		$newsletter['newsletters'] = $this->Directorate_Model->newsLetters()->result();
		$newsletter['comments'] = $this->Directorate_Model->comments()->result();
		$this->load->view('include/directorate/header');
		$this->load->view('admin/college/newsletter',$newsletter);
	}

	// show maxdb_param_count()
	
}
