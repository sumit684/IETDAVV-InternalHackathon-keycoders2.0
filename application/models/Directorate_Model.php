<?php
class Directorate_Model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
public function getCollegeList(){
		return $this->db->get('college')->result();
	}
}

?>