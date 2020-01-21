<div class="container" id="admin-home-container">
	<div class="row mt-4" style="padding:5px;">
		<?php foreach ($events as $key => $data) {?>
			<div class="col-md-6">
				<div class="card bg-info" style="color:white;border: 1px solid rgb(255, 255, 255);">
					<div class="card-body">
						<h4 class="card-title"><?=$data->event_name?></h4>
						<p class="card-text"><?=$data->event_desc?></p>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>



	<!-- The Modal -->
	<div class="modal" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Add Events</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form method="POST" action="<?=base_url()?>alumni/addEvents">
						<div class="row"> 
							<div class="col-md-6"> 
								<label>Event Name</label>
							</div>
							<div class="col-md-6">
								<input name="event_name">   
							</div>
						</div> 
						<div class="row"> 
							<div class="col-md-6"> 
								<label>Event Description</label>
							</div>
							<div class="col-md-6">
								<input name="event_desc">   
							</div>
						</div>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="submit" class="btn btn-danger" >Submit</button>
					</div>
				</form>

			</div>
		</div>
	</div>

</div>

</div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="@sweetalert2/theme-material-ui/material-ui.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
	const Toast = Swal.mixin({
		toast: true,
		position: 'bottom-end',
		showConfirmButton: false,
		timer: 5000,
		timerProgressBar: true,
		onOpen: (toast) => {
			toast.addEventListener('mouseenter', Swal.stopTimer)
			toast.addEventListener('mouseleave', Swal.resumeTimer)
		}
	})

	Toast.fire({
		icon: 'success',
		title: 'Signed in successfully'
	})
</script>