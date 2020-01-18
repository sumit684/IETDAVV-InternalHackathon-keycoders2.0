<?php 
class Admin_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	public function getregisteredAlumni(){
		
		$this->db->get_where('alumni',array('status'=>'1'))->result_array();
		$result = $this->db->order_by("created", "asc");
		return $result;

	}

	public function getnewstudents(){
		$this->db->get_where('alumni',array('status'=>'0'))->result_array();
		$result = $this->db->order_by("created", "asc");
		return $result;
	}
}
?>