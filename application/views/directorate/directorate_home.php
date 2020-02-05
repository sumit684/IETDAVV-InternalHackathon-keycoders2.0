<!DOCTYPE html>
<html>

<head>
	<title>Directorate Home</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/jpg" href="<?= base_url(); ?>assets/img/logo1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre|Noto+Sans+KR&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script type="text/javascript">
		var base_url = "<?= base_url() ?>";
	</script>

	<!-- Data Table -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.css"/>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
	<style type="text/css">
		@media print {
			.noPrint {display:none;}
		}
	</style>

</head>

<body>
	<div class="container-fluid">
		<div class="row" style="margin: 1em;">
			<img src="<?= base_url() ?>assets/img/logo.jpeg" style="width:10%;">
			<div class="p-4" style="float: left;">
				<div class="h1">Govt. of Goa | <b style="color:#858080">Directorate</b>
				</div>
			</div>
		</div>
		<div class="row d-block border border-dark shadow sticky-top">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-bl">
				<a class="navbar-brand h2 font-weight-bold active" href="<?= base_url() ?>admin/index"><i class="fas fa-home"></i> Home</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarColor01">
					<ul class="navbar-nav mr-auto">
						<!-- <li class="nav-item createTest">
							<a class="nav-link" href="<?= base_url() ?>createTest"></a>
						</li> -->
						<li class="nav-item addQuestion">
							<a class="nav-link" href="<?= base_url() ?>addQuestion">Publish notices</a>
						</li>
						<li class="nav-item testData">
							<a class="nav-link" href="<?= base_url() ?>admin/Test/showAllTest">Create events</a>
						</li>
						<li class="nav-item batch">
							<a class="nav-link" href="<?= base_url() ?>admin/Student/batchesPage">Send Email</a>
						</li>
						<li class="nav-item batch">
							<a class="nav-link" data-toggle="modal" data-target="#addAdminModal">Add Admin</a>
						</li>
						<!-- <li class="nav-item student">
							<a class="nav-link" href="<?= base_url() ?>admin/requests">Pending Requests</a>
						</li> -->
					</ul>
					<div class="dropdown show">
						<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Hello, Directorate
						</a>

						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="#">My Profile</a>
							<a class="dropdown-item" href="#">Logout</a>
							<!-- <a class="dropdown-item" href="#">Something else </a> -->
						</div>
					</div>
				</div>
			</nav>
		</div>

		<div>
			<u>
				<h1 class="text-center pt-4" title="List of all colleges under DTE Goa" style="font-family: 'Noto Sans KR', sans-serif;">COLLEGES LIST</h1>
			</u>

		</div>

		<div class="pt-4">
			<table class="table table-hover " id="college_table">
				<thead>
					<tr>
						<th scope="col">S.no</th>
						<th scope="col">College Name</th>
						<th scope="col">Type</th>
						<th scope="col">Aided</th>
						<th scope="col" class="noPrint"></th>
					</tr>
				</thead>
				<tfoot style="display: table-header-group;">
					<tr>
						<th scope="col" class="hide_filter">S.no</th>
						<th scope="col">College Name</th>
						<th scope="col">Type</th>
						<th scope="col">Aided</th>
						<th scope="col" class="hide_filter noPrint"></th>
					</tr>
				</tfoot>
				<tbody>

					<?php
					$aided = array('1'=>'Government Colleges',
						'2'=>'Government Aided Colleges',
						'3'=>'Non Aided Colleges',
						'4'=>'Non Aided Private Colleges',
						'5'=>'Private Aided Colleges');

						foreach ($colleges as $key => $data) { ?>
							<tr>
								<th scope="row"><?= $key + 1 ?></th>
								<td><?= $data->college_name; ?></td>
								<td><?= $college_type[($data->college_type-1)]['type']; ?></td>
								<td><?= $aided[$data->aided]; ?></td>
								<td><a href="<?= base_url() ?>directorate/alumniDisplay/<?= $data->id; ?>"><button class="btn btn-primary btn-sm noPrint"> View Alumni</button></a></td>
							</tr>

							<?php
						} ?>
					</tbody>
					
				</table>
				<script type="text/javascript">

					$(document).ready(function() {
						$('#college_table').DataTable( {
							// stateSave: true,
							dom: 'lBfrtip',
							buttons: ['excelHtml5',  'copyHtml5','csvHtml5','pdfHtml5'],
							select:true,

							initComplete: function () {
								this.api().columns().every( function () {
									console.log('running');
									var column = this;
									console.log(column.header());
									var select = $('<select class="form-control"><option value=""> Select to filter</option></select>')
									.appendTo( $(column.footer()).empty() )
									.on( 'change', function () {
										var val = $.fn.dataTable.util.escapeRegex(
											$(this).val()
											);
										column
										.search( val ? '^'+val+'$' : '', true, false )
										.draw();
									} );

									column.data().unique().sort().each( function ( d, j ) {
										select.append( '<option value="'+d+'">'+d+'</option>' )
									} );

								} );
							}
						} );
						$('.hide_filter select').hide();
					} );
				</script>

			</div>
		</div>
		<div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="addAdminModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="addAdminModalLabel">Add Admin</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?=base_url();?>directorate/addAdmin" method="post">
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Name:</label>
								<input type="text" class="form-control" id="recipient-name" name="name">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Email Id:</label>
								<input type="email" class="form-control" id="recipient-name" name="email_id">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Password:</label>
								<input type="password" class="form-control" id="recipient-name" name="password">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Mobile No.:</label>
								<input type="number" class="form-control" id="recipient-name" name="mob_no">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">College Id:</label>
								<input type="text" class="form-control" id="recipient-name" name="college_id">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Status:</label>
								<input type="text" class="form-control" id="recipient-name" name="status">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">Privilege:</label>
								<input type="text" class="form-control" id="recipient-name" name="privilege">
							</div>


						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Add Admin</button>
						</div>
					</form>
				</div>
			</div>
		</div>


		<footer style="height: 5rem;">

		</footer>
	</body>

	</html>