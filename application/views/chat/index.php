<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<title></title>
</head>
<body>
	<?php 
	

	?>
	<div class="container ">
		<h3>Chat Application</h3>
		<div class="table-responsive text-center">
			<h4>Online Users</h4>
			<p align="right"> Hi - <?php print_r($this->session->userdata('username')) ?> <a href="<?php base_url()?>destroy">Logout</a> </p>
			<div id='user_details'>
				<!-- <table class="table border">
					<thead>
						<tr>
							<th>Username</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						// $last_login['0']['last_activity'] 
						foreach ($user_details as $key => $value) { 
							$status = '';
							$current_timestamp = strtotime(date('Y-m-d H:i:s').'-10 second');
							$current_timestamp = date('Y-m-d F:i:s',$current_timestamp);
							// date_default_timezone_set('Asia/Kolkata');
							// $current_timestamp =date('Y-m-d H:i:s');
							$last_activity = $last_login['0']['last_activity'];
							if($last_activity > $current_timestamp){
								$status = '<span class="btn btn-success">Online</span>';

							}else{
								$status = '<span class="btn btn-danger">Offline</span>';

							}

							?>
							<tr>
								<td><?=($value['username']) ?></td>
								<td><?= $status ?></td>
								<td><button type="button" class="btn btn-info btn-xs start_chat" data-touderid =" <?php print_r($value['id'])?>" data-tousername="<?php print_r($value['username'])?>">Start Chat</button></td>
							<?php	}
							?>
						</tr>
					</tbody>
				</table> -->
			</div>
			<div id="user_model_details"></div>

		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){

			

			fetch_user();

			setInterval(function(){
				update_last_activity();
				fetch_user();
			}, 500);


			function fetch_user()
			{
				$.ajax({
					url:"<?php echo base_url()?>Chat/login1",
					method:"POST",
					success:function(data){
						$('#user_details').html(data);
					}
				})
				console.log("jhkjsdgf");
			}


			function update_last_activity()
			{
				$.ajax({
					url:"<?php echo base_url()?>Chat/login",
					success:function()
					{

					}
				})
			}

			function make_chat_dialog_box(to_user_id, to_user_name)
			{
				var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="You have chat with '+to_user_name+'">';
				modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
				modal_content += '</div>';
				modal_content += '<div class="form-group">';
				modal_content += '<textarea name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control"></textarea>';
				modal_content += '</div><div class="form-group" align="right">';
				modal_content+= '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Send</button></div></div>';
				$('#user_model_details').html(modal_content);
			}

			$(document).on('click', '.start_chat', function(){
				var to_user_id = $(this).data('touserid');
				var to_user_name = $(this).data('tousername');
				make_chat_dialog_box(to_user_id, to_user_name);
				$("#user_dialog_"+to_user_id).dialog({
					autoOpen:false,
					width:400
				});
				$('#user_dialog_'+to_user_id).dialog('open');
			});



			

		}); 
	</script>
</body>
</html>