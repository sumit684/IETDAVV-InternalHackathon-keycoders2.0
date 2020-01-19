<div class="container" id="admin-home-container">
	<div class="row mt-4" style="padding:5px;">

		<?php foreach ($events as $key => $data) {?>

		<div class="col-md-6">
			<div class="card bg-info" style="color:white;border: 1px solid rgb(255, 255, 255);">
				<div class="card-body">
					<h4 class="card-title"><?=$data->event_name?></h4>
					<p class="card-text"><?=$data->event_desc?></p>
					<form method="POST" action="<?=base_url();?>alumni/readmore"><input value="<?=$mob_no?>" name="fname" type="hidden"><button type="submit" class="btn btn-primary">Read More</button></form>

					<!-- <a href="<?=base_url()?>createTest" class="m-1 card-link btn btn-light btn-outline-dark">Create New Test</a>
						<a href="<?=base_url()?>admin/Test/showAllTest" class="m-1 card-link btn btn-light btn-outline-dark">Manage Other Tests</a> -->
					</div>
				</div>
			</div>
		<?php } ?>


	</div>
	<div align="center">  
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">ADD EVENTS</button>
	</div>
	
	<div class="container">



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
						<form method="POST" action="<?=base_url()?>alumni/addEvent">
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
							<button type="submit" class="btn btn-danger" data-dismiss="modal">Submit</button>
						</div>
					</form>

				</div>
			</div>
		</div>

	</div>
	

</div>