<!DOCTYPE html>
<html>
<head>
	<title>Directorate Panel</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/jpg" href="<?=base_url();?>assets/img/logo1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script type="text/javascript">

		var base_url = "<?=base_url()?>";
	</script>
	<!-- <script src="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"></script>
		<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> -->
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
	</head>
	<body>
		<div class="container-fluid" >
			<div class="row" style="margin: 1em;">
				<img src="<?= base_url()?>assets/img/logo.jpeg"  style="width:10%;">
				<div class="p-4" style="float: left;">
					<div class="h1">Govt. of Goa | <b style="color:#858080">Admin</b>
					</div>
				</div>
			</div>
			<div class="row d-block border border-dark shadow sticky-top">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-bl">
					<a class="navbar-brand h2 font-weight-bold active" href="<?=base_url()?>admin/index"><i class="fas fa-home"></i> Home</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarColor01">
						<ul class="navbar-nav mr-auto">
						<!-- <li class="nav-item createTest">
							<a class="nav-link" href="<?=base_url()?>createTest"></a>
						</li> -->
						<!-- <li class="nav-item addQuestion">
							<a class="nav-link" href="<?=base_url()?>admin/notices">Publish notices</a>
						</li> -->
						<li class="nav-item testData">
							<a class="nav-link" href="<?=base_url()?>admin/events">Create events</a>
						</li>
						<li class="nav-item batch">
							<a class="nav-link" href="<?=base_url()?>admin/email">Send Email</a>
						</li>
						<li class="nav-item student">
							<a class="nav-link" href="<?=base_url()?>admin/requests">Pending Requests <span class="badge badge-light">
								<?php 
								$i=0;
								foreach ($pending as $key => $value) {
									$i++;
								}
								echo $i;?>
							</span></a>
						</li>
					</ul>
					<div class="dropdown show">
						<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Hello, Admin
						</a>

						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="#">My Profile</a>
							<a class="dropdown-item" href="#">Logout</a>
							<a class="dropdown-item" href="#">Something else </a>
						</div>
					</div>
				</div>
			</nav>
		</div>
