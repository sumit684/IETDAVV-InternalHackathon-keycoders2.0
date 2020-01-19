<?php

class Chat_Model extends CI_Model{

	public function __cunstructor(){
		parent::__cunstructor();
	}

	public function login($data){
		// print_r($data);exit;
		$this->db->where('username',$data['username']);
		$this->db->where('password',$data['password']);
		$data['authenticate'] = $this->db->get('chat_login')->result_array();
		return $data;
	}
	public function user_details($data){
		$this->db->where_not_in('id',$data['user_id']);
		return $this->db->get('chat_login')->result_array();
		// return $data;
	}
	public function insert_last_activity($data){
		$this->db->insert('login_details',$data);
	}
	public function update_last_activity($data){
		$user_id = $data['user_id'];
		// $current_timestamp = strtotime(date('Y-m-d H:i:s').'-10 second');
		// $current_timestamp = date('Y-m-d F:i:s',$current_timestamp);


		// date_default_timezone_set('Asia/Kolkata');
	 //   $current_timestamp =date('Y-m-d H:i:s');
		// $data = array(
		// 	'last_activity' => $current_timestamp
		// );

		// $this->db->where('user_id', $user_id );
		// $this->db->update('login_details', $data);
		$query = 'UPDATE login_details set last_activity = now() where user_id = "'.$user_id.'"';
		$this->db->query($query);
	}
	public function check_user_id($data){
		$this->db->select('id');
		$this->db->where('user_id',$data['user_id']);
		return $this->db->get('login_details')->result_array();
	}
	public function fetch_user_last_activity($data){
		$this->db->where('user_id',$data['user_id']);
		$this->db->limit(1);
		$this->db->order_by('last_activity','desc');
		return 	$this->db->get('login_details')->result_array();

	}

}

?>