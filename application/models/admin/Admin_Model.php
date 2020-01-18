<?php 
class Admin_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	public function getregisteredAlumni(){
		$this->db->order_by("created", "asc");
		return $this->db->get_where('alumni',array('status'=>'1'))->result();
		
	}

	public function getnewstudents(){
		// $this->db->get_where('alumni',array('status'=>'0'));
		// $result = $this->db->order_by("created", "asc")->result();
		// return $result;
	}
}
?>