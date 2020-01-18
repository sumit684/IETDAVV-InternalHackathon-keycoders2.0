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
							<a class="nav-link" href="<?=base_url()?>admin/Student/studentPage">Profile</a>
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
		
        <div class="col-md-3">
            <img src="data:image/jpeg;base64,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" class="rounded" alt="Cinque Terre">
		</div>
        <div class="col-md-9">
            <div class="jumbotron text-center">
                <h1>My First Bootstrap Page</h1>
                <p>Resize this responsive page to see the effect!</p>
            </div>
        </div>
	</div>
</div>

</body>
</html>
