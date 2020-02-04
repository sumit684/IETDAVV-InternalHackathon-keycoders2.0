<?php
class Directorate_Model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	public function getCollegeList(){
		return $this->db->get('college')->result();
	}

	public function getAlumniList($college_id){
		return $this->db->get_where('alumni',array('college_id'=>$college_id))->result();
	}

	// public function getCollegeId(){
	// 	return $this->db->get('college')->result();
	// }
	public function getregisteredAlumni(){
		$this->db->select('country, COUNT(country) as sumc');
		$this->db->order_by("created", "asc");
		$this->db->group_by("country");
		return $this->db->get_where('alumni',array('status'=>'1'))->result();
		
	}
	public function addAdmin($data)
	{
		$this->db->insert('admin',$data);
	}

	public function getCollegeType(){
		return $this->db->get('college_type')->result_array();
	}
}
?>