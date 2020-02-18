

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