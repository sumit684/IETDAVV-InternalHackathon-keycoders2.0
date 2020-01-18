<?php 
class Admin_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	public function getregisteredAlumni(){
		echo "<pre>";
		print_r($this->db->get_where('alumni',array('status'=>'1'))->result_array());
		$result = $this->db->order_by("created", "asc");
		print_r($result);
	}

	public function getnewstudent(){
		echo "<pre>";
		$this->db->get_where('alumni',array('status'=>'0'))->result_array();
		$result = $this->db->order_by("created", "asc");
		print_r($result);
	}
}
?>