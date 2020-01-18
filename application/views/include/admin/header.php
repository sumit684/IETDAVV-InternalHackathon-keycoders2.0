<!DOCTYPE html>
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
	<script type="text/x-mathjax-config">
		MathJax.Hub.Config({"HTML-CSS": { preferredFont: "TeX", availableFonts: ["STIX","TeX"], linebreaks: { automatic:true }, EqnChunk: (MathJax.Hub.Browser.isMobile ? 10 : 50) },
		tex2jax: { inlineMath: [ ["$", "$"], ["\\[", "\\]"], ["\\\\(","\\\\)"] ], displayMath: [["$$","$$"]], processEscapes: true, ignoreClass: "tex2jax_ignore|dno" },
		TeX: {
		extensions: ["begingroup.js"],
		noUndefined: { attributes: { mathcolor: "red", mathbackground: "#FFEEEE", mathsize: "90%" } }, 
		Macros: { href: "{}" } 
	},
	messageStyle: "none",

	styles: { ".MathJax_Display, .MathJax_Preview, .MathJax_Preview > *": { "background": "inherit" } }
});</script>

<script type="text/javascript">
	var base_url = "<?=base_url()?>";
</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<img src="<?= base_url()?>assets/img/iitpulse_logo.png" class="m-3 col-lg-3 col-md-10 col-sm-10 col-xs-10 mr-auto img-fluid"  style="width:100%; height:100%;">
			<div class="p-4">
				<div class="h1">Online Test Portal | <b style="color:#858080">Admin</b>
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
							<a class="nav-link" href="<?=base_url()?>createTest">Create Test</a>
						</li>
						<li class="nav-item addQuestion">
							<a class="nav-link" href="<?=base_url()?>addQuestion">Add Questions</a>
						</li>
						<li class="nav-item testData">
							<a class="nav-link" href="<?=base_url()?>admin/Test/showAllTest">Test Data</a>
						</li>
						<li class="nav-item batch">
							<a class="nav-link" href="<?=base_url()?>admin/Student/batchesPage">Manage Batches</a>
						</li>
						<li class="nav-item student">
							<a class="nav-link" href="<?=base_url()?>admin/Student/studentPage">Manage Students</a>
						</li>
					</ul>
					<div class="float-right">
						<div class="btn-group">
							<button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Admin
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item change-password" href="<?=base_url()?>admin/Authenticate/changePasswordPage">Change password</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?=base_url()?>adminLogout">Logout</a>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
