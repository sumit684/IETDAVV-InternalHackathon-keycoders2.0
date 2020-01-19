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

	public function getCollegeId(){
		return $this->db->get('college')->result();
	}
}

?>