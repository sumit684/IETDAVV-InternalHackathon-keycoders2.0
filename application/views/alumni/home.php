<<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/jpg" href="http://www.iitpulse.com/test/assets/img/iitpulse_logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	var base_url = "<?=base_url()?>";
</script>
</head>
<body>
	<div class="container">
		<div class="row" style="margin: 1em;">
			<img src="<?= base_url()?>assets/img/logo.jpeg"  style="width:17%;">
			<div class="p-4" style="float: left;">
				<div class="h1">Govt. of Goa | <b style="color:#858080">Alumni</b>
				</div>
			</div>
		</div>
		<div class="row d-block border border-dark shadow">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-bl">
				<a class="navbar-brand h2 font-weight-bold active" href="<?=base_url()?>adminHome"><i class="fas fa-home"></i> Home</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarColor01">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item createTest">
							<a class="nav-link" href="<?=base_url()?>createTest">Events</a>
						</li>
						<!-- <li class="nav-item addQuestion">
							<a class="nav-link" href="<?=base_url()?>addQuestion">Add Questions</a>
						</li>
						<li class="nav-item testData">
							<a class="nav-link" href="<?=base_url()?>admin/Test/showAllTest">Test Data</a>
						</li>
						<li class="nav-item batch">
							<a class="nav-link" href="<?=base_url()?>admin/Student/batchesPage">Manage Batches</a>
						</li> -->
						<li class="nav-item student">
							<a class="nav-link" href="<?=base_url()?>alumni/profile">Profile</a>
						</li>
                        <li class="nav-item student">
							<a class="nav-link" href="<?=base_url()?>admin/Student/studentPage">Chat</a>
						</li>
					</ul>
					<div class="float-right">
						<div class="btn-group">
							<button type="button" class="btn btn-outline-light "  aria-haspopup="true" aria-expanded="false">
								Notifications
							</button>
							
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>



<div class="container" id="admin-home-container">
	<div class="row mt-4">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Test Section:</h4>
					<p class="card-text">You can Create New Test and also manage already created and previous test.</p>
					<a href="<?=base_url()?>createTest" class="m-1 card-link btn btn-light btn-outline-dark">Create New Test</a>
					<a href="<?=base_url()?>admin/Test/showAllTest" class="m-1 card-link btn btn-light btn-outline-dark">Manage Other Tests</a>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Batches and Students:</h4>
					<p class="card-text">You can manage batches and students from here. You can also view details about them.</p>
					<a href="<?=base_url()?>admin/Student/batchesPage" class="m-1 card-link btn btn-light btn-outline-dark">Manage Batches</a>
					<a href="<?=base_url()?>admin/Student/studentPage" class="m-1 card-link btn btn-light btn-outline-dark">Manage Students</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Subjects and Chapters:</h4>
					<p class="card-text">You can manage Subjects and Chapters from here. You can also view details about them.</p>
					<a href="<?=base_url()?>admin/Subject/showSubject" class="m-1 card-link btn btn-light btn-outline-dark">Manage Subjects/Chapters</a>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Questions and Pattern:</h4>
					<p class="card-text">You can manage Questions and Test Pattern from here. You can also view details about them.</p>
					<a href="<?=base_url()?>addQuestion" class="m-1 card-link btn btn-light btn-outline-dark">Add Questions</a>
					<a href="<?=base_url()?>testPattern" class="m-1 card-link btn btn-light btn-outline-dark">Manage Pattern</a>
					<a href="<?=base_url()?>editQuestion" class="m-1 card-link btn btn-light btn-outline-dark">Edit Questions</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Operator:</h4>
					<p class="card-text">You can manage data entry operator from here. You can also view details about them.</p>
					<a href="<?=base_url()?>admin/Operator/add" class="m-1 card-link btn btn-light btn-outline-dark">Add Operator</a>
					<a href="<?=base_url()?>admin/Operator/view" class="m-1 card-link btn btn-light btn-outline-dark">View Operators</a>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Ad Manager:</h4>
					<p class="card-text">You can manage Test Screen Ads from here. You can do everything from one place only.</p>
					<a href="<?=base_url()?>AdManager/manage_files" class="m-1 card-link btn btn-light btn-outline-dark">TestApp Ads</a>
					<a href="<?=base_url()?>AdManager/manage_student_home_files" class="m-1 card-link btn btn-light btn-outline-dark">Student Ads</a>
					<a href="<?=base_url()?>AdManager/manage_login_files" class="m-1 card-link btn btn-light btn-outline-dark">Login Ads</a>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Promocode:</h4>
					<p class="card-text">You can manage promocodes from here. You can do everything from one place only.</p>
					<a href="<?=base_url()?>Promocode/create" class="m-1 card-link btn btn-light btn-outline-dark">Create Promocode</a>
					<a href="<?=base_url()?>Promocode/view" class="m-1 card-link btn btn-light btn-outline-dark">View Promocodes</a>
				</div>
			</div>
		</div>
	</div>
</div>