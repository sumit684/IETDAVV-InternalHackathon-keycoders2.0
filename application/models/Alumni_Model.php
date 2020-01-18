<?php 
class Alumni_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	public function authenticateAlumni($data) {
		if ($data == null){
			return array("id"=>0);
		}
		else
		{
			$result = $this->db->get_where('alumni', $data); 
			if ($result->num_rows()) {
				return array("id"=>$result->result_array()[0]["id"], "fname"=>$result->result_array()[0]["fname"], "lname"=>$result->result_array()[0]["lname"], "college_id" => $result->result_array()[0]["college_id"]);
			}
			return array("id"=>0);
		}
	}

	public function registerAlumni($data){
		$result = $this->db->insert('alumni',$data);
		return $result;
	}

}
?>