<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/jpg" href="<?=base_url();?>assets/img/logo1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> 
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script type="text/javascript">
		var base_url = "<?=base_url()?>";
	</script>
</head>
<body>
	<div class="container">
		<div class="row" style="margin: 1em;">
			<img src="<?= base_url()?>assets/img/logo.jpeg"  style="width:17%;">
			<div class="p-5" style="float: left;">
				<div class="h1">Goa University| <b style="color:#858080">Alumni</b>
				</div>
				<div class="h3"><span style="color:#858080">Govt. of Goa</span>
				</div>
			</div>
		</div>

		<div class="card row d-block border border-dark shadow">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-bl">
				<a class="navbar-brand h2 font-weight-bold active" href="<?=base_url()?>alumni/home"><i class="fas fa-home"></i> Home</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarColor01">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item createTest">
							<a class="nav-link" href="<?=base_url()?>alumni/events">Events</a>
							
						</li>
						<li class="nav-item student">
							<a class="nav-link" href="<?=base_url()?>Chat">Chat</a>
						</li>

						<li class="nav-item student">
							<a class="nav-link" href="<?=base_url();?>alumni/profile">Profile</a>
						</li>

						<li class="nav-item student">
							<a class="nav-link" href="<?=base_url();?>alumni/newsletters">Newsletters</a>
						</li>

						<li class="nav-item student">
							<a class="nav-link" href="<?=base_url();?>alumni/profile">Jobs</a>
						</li>

						<li class="nav-item student">
							<a class="nav-link" href="<?=base_url();?>alumni/profile">Alumni Association</a>
						</li>
					</ul>
					<div class="dropdown show">
						<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Hello, <?php print_r($this->session->userdata('username')) ?> 
						</a>

						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="<?=base_url();?>alumni/profile">My Profile</a>
							<a class="dropdown-item" href="<?=base_url()?>alumni/destroy">Logout</a>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
