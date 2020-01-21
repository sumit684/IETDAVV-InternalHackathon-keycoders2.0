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
		$this->db->where('status',1);
		return $this->db->get('alumni')->result_array();
		// return $data;
	}
	public function insert_last_activity($data){
		$this->db->insert('login_details',$data);
	}
	public function update_last_activity($data){
		$user_id = $data['user_id'];
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
			return $this->db->get('login_details')->result_array();
	}

	public function insertChat($data){
		// print_r($data);exit;
		$to_user_id = $data[':to_user_id'];
		$from_user_id = $data[':from_user_id'];
		$chat_message = $data[':chat_message'];
		$status = $data[':status'];
		$insertdata = array(
			'to_user_id'=>$to_user_id,
			'from_user_id'=>$from_user_id,
			'chat_message' => $chat_message,
			'status' => $status
		);
		$this->db->insert('chat_messages',$insertdata);

	}

	public function fetch_user_chat_history($data){

		$to_user_id = $data[':to_user_id'];
		$from_user_id = $data[':from_user_id'];
		// $chat_message = $data[':chat_message'];
		// 

		
		$this->db->select('*');
		$this->db->where('from_user_id',$from_user_id);

		$this->db->where('to_user_id ',$to_user_id);

		$this->db->or_where('from_user_id',$to_user_id);

		$this->db->or_where('to_user_id',$from_user_id);

		$this->db->order_by('timestamp','DESC');

		$result = $this->db->get('chat_messages')->result_array();
		

		$output = '<ul class="list-unstyled">';

		foreach ($result as $key => $value)
		{

			$user_name = '';

			if($value["from_user_id"] == $from_user_id)
			{

				$user_name = '<b class="text-success">You</b>';
				// get_user_name($value["from_user_id"]);
			}
			else
			{
				
				$this->db->select('username');
				$this->db->where('id',$value["from_user_id"]);
				$result1 = $this->db->get('chat_login')->result_array();
				// print_r($result1);exit;
				foreach ($result1 as $key1 => $value1)
				{
					// return ;
					$user_name = '<b class="text-danger">'.$value1['username'].'</b>';
				}
				
			}
			$output .= '
			<li style="border-bottom:1px dotted #ccc">
			<p>'.$user_name.' - '.$value["chat_message"].'
			<div align="right">
			- <small><em>'.$value['timestamp'].'</em></small>
			</div>
			</p>
			</li>
			';
		}
		$output .= '</ul>';
		$updatenotification = array(
			'status' => 0
		);
		$this->db->where('from_user_id',$to_user_id);
		$this->db->where('to_user_id',$from_user_id);
		$this->db->where('status',1);
		$this->db->update('chat_messages',$updatenotification);


		return $output;
	}



	function count_unseen_message($from_user_id, $to_user_id)
	{
		// echo $from_user_id. 'kjhjdx' . $to_user_id;exit();
		$this->db->select('*');
		$this->db->where('to_user_id',$to_user_id);
		$this->db->where('status',1);
		$this->db->where('from_user_id',$from_user_id);
		
		$unreadmessage = $this->db->get('chat_messages')->result_array();
		// echo $from_user_id. 'kjhjdx' . $to_user_id;exit();
		// print_r($unreadmessage);exit;
		
		$output = '';
		if(count($unreadmessage) > 0)
		{
			$output = '<span class="label label-success ">'.count($unreadmessage).'</span>';
		}
		return $output;
	}

	

}

?>