<?php 
class Alumni_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	public function authenticateAlumni($data) {
		if ($data == null){
			return FALSE;
		}
		else
		{
			$result = $this->db->get_where('alumni', $data); 
			if ($result->num_rows()) {
				return $result->result_array();
			}
			return FALSE;
		}
	}

	public function registerAlumni($data){
		$result = $this->db->insert('alumni',$data);
		return $result;
	}
   
	public function geteventList(){
		return $this->db->get('events');
	}

}
?>