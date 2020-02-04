<?php 
class Admin_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	public function authenticateAdmin($data) {
		if ($data == null){
			return array("id"=>0);
		}
		else
		{
			$result = $this->db->get_where('admin', $data); 
			if ($result->num_rows()) {
				return array("id"=>$result->result_array()[0]["id"], "name"=>$result->result_array()[0]["name"], "college_id" => $result->result_array()[0]["college_id"],"mob_no" => $result->result_array()[0]["mob_no"]);
			}
			return array("id"=>0);
		}
	}

	public function getregisteredAlumni(){
		$this->db->order_by("created", "asc");
		return $this->db->get_where('alumni',array('status'=>'1','college_id'=>1))->result();
		
	}

	public function getnewstudents(){
		$this->db->order_by("created", "asc");
		return $this->db->get_where('alumni',array('status'=>'0'))->result();
	}
	public function acceptRequest($id){
		$data = array(
			'status' => 1
		);
		$this->db->where('id', $id);
		$this->db->update('alumni',$data);
		$data = $this->db->get_where('alumni',array('id'=>$id))->result();
		$this->Chat_Model->insert_last_activity(array('user_id'=>$user_id));
		return $data;
	}
	public function rejectRequest($id){
		$this ->db->where('id', $id);
		$this ->db->delete('alumni');
		// $this->db->where('user_id',$id);
		// $this ->db->delete('login_details');
	}
	public function geteventList(){
		return $this->db->get('events');
	}

}
?>