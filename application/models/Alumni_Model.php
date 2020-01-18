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
			$result = $this->db->get_where('admin', $data); 
			if ($result->num_rows()) {
				return array("id"=>$result->result_array()[0]["id"], "name"=>$result->result_array()[0]["name"], "college_id" => $result->result_array()[0]["college_id"]);
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