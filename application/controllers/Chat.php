<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Chat_Model');
		 // $this->load->library('session');

	}

	// public function index()
	// {
	// 	// echo "Chat Message";
	// 	$this->load->view('chat/login');
	// }
	public function index(){
		// $username = $this->input->post('username');
		// $password = $this->input->post('password');
		
		// $data = $this->Chat_Model->login(array('username' => $username,'password' => $password ));
		// // $data['username'] = $username;
		// if($data['authenticate'] == TRUE){
		// 	foreach ($data['authenticate'] as $id=> $id_value) {
		// 		$user_id = $id_value['id'];

		// 		$sessiondata = array( 
		// 			'username'  => $username, 
		// 			'user_id' => $user_id,
		// 			'logged_in' => TRUE
		// 		);  

		// 		$this->session->set_userdata($sessiondata);
				$user_id = $this->session->userdata('user_id');
				$id = $this->Chat_Model->check_user_id(array('user_id'=>$user_id));
				// $id= $this->Chat_Model->update_last_activity(array('user_id'=>$user_id));
				if($id == TRUE){
					$this->Chat_Model->update_last_activity(array('user_id'=>$user_id));
					
				}
				else{
					$this->Chat_Model->insert_last_activity(array('user_id'=>$user_id));
				}
				$data['last_login'] = $this->Chat_Model->fetch_user_last_activity(array('user_id'=>$user_id));
				$data['user_details'] = $this->Chat_Model->user_details(array('user_id'=>$user_id));
				$this->load->view('include/alumni/header');
				$this->load->view("chat/index",$data);
			// }
		// }
		// else{
		// 	$this->session->set_flashdata("error_otp", "User");
		// 	$this->load->view('chat/login');
		// }

	}
	public function update(){
		$user_id = $this->session->userdata('user_id');
		$id = $this->Chat_Model->update_last_activity(array('user_id'=>$user_id));
		// $this->Chat_Model->update_last_activity();
	}
	function fetch_user(){
		$user_id = $this->session->userdata('user_id');
		$data['user_details'] = $this->Chat_Model->user_details(array('user_id'=>$user_id));
		$output = '
		<table class="table table-bordered table-striped" >
		<tr>
		<td>Username</td>
		<td>Status</td>
		<td>Action</td>
		</tr>
		';

		foreach ($data['user_details']  as $key => $value) {
			$status = '';
			date_default_timezone_set('Asia/Kolkata');
			$current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
			$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
		$data['last_login'] = $this->Chat_Model->fetch_user_last_activity(array('user_id'=>$value['id'] ));		
			$last_activity = $data['last_login'][0]['last_activity'];
			if($last_activity > $current_timestamp)
			{
				$status = '<span class="btn btn-success">Online</span>';
			}
			else
			{
				$status = '<span class="btn btn-danger">Offline</span>';
			}

			$output .= '
			<tr>
			<td>'.$value['fname'].' '.$this->Chat_Model->count_unseen_message($value['id'], $user_id ).'</td>
			<td>'.$status.'</td>
			<td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$value['id'].'" data-tousername="'.$value['fname'].'">Start Chat</button></td>
			</tr>
			';
		}

		$output .= '</table>';

		echo $output;


	}

	public function sendChat(){
		$data = array(
			':to_user_id'  => $_POST['to_user_id'],
			':from_user_id'  => $_SESSION['user_id'],
			':chat_message'  => $_POST['chat_message'],
			':status'   => '1'
		);
		$this->Chat_Model->insertChat($data);
		$this->Chat_Model->fetch_user_chat_history($data);

	}
	public function fetch_user_chat_history(){
		$data = array(
			':to_user_id'  => $_POST['to_user_id'],
			':from_user_id'  => $_SESSION['user_id'],
		);
		// echo "<pre>";
		// print_r($data);exit;
		echo $this->Chat_Model->fetch_user_chat_history($data);
	}

	public function destroy()
{    // destory session
	$this->session->sess_destroy();
	$this->load->view('chat/login');
}


}
