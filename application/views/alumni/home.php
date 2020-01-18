
<div class="container" id="admin-home-container">
	<div class="row mt-4" style="padding:5px;">

		<?php foreach ($events as $key => $data) {?>
		<div class="col-md-6">
			<div class="card bg-info" style="color:white;border: 1px solid rgb(255, 255, 255);">
				<div class="card-body">
					<h4 class="card-title"><?=$data->event_name?></h4>
					<p class="card-text"><?=$data->event_desc?></p>
					<!-- <a href="<?=base_url()?>createTest" class="m-1 card-link btn btn-light btn-outline-dark">Create New Test</a>
					<a href="<?=base_url()?>admin/Test/showAllTest" class="m-1 card-link btn btn-light btn-outline-dark">Manage Other Tests</a> -->
				</div>
			</div>
		</div>
		<?php } ?>


	</div>
</div>