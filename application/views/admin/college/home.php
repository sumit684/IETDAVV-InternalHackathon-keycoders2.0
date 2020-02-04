		<div >
			<u>	<h1 class="text-center pt-4">ALUMNI LIST</h1></u>

		</div>
	
		<div class="pt-4">
			<table class="table table-hover " id="alumni_table">
				<thead>
					<tr>
						<th scope="col">S.no</th>
						<th scope="col">Enroll no.</th>
						<th scope="col">Name</th>
						<th scope="col">Course</th>
						<th scope="col">Batch</th>
						<th scope="col">Email ID</th>
						<th scope="col">mail</th>
					</tr>
				</thead>
				<tbody>

					<?php 
					foreach ($alumni as $key => $data) {?>
						<tr>
							<th scope="row"><?=$key?></th>
							<td><?= $data->enroll_no;?></td>
							<td><?= $data->fname;?> <?=$data->lname?></td>
							<td><?= $data->course;?></td>
							<td><?= $data->year_adm;?>-<?= $data->year_leaving?></td>
							<td><?= $data->email_id;?></td>
							<td><button type="button" class="btn btn-success" onclick="setEmailid('<?= $data->email_id;?>')" data-toggle="modal" data-target="#myModal" >Send</button></td>
						</tr>

					<?php } ?>					
				</tbody>
			</table>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#alumni_table').DataTable( {
						stateSave: true,
						dom: 'lBfrtip',
						buttons: ['excelHtml5',  'copyHtml5',
						'excelHtml5',
						'csvHtml5',
						'pdfHtml5'],

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
	<div class="container">
		<script>
			function setEmailid(emailid) {
				document.getElementById("email_id").value = emailid;
			}
		</script>

		<!-- The Modal -->
		<div class="modal" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Send Email</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<form method="POST" action="<?=base_url()?>admin/sendEmail">
							<div class="row"> 
								<div class="col-md-6"> 
									<label>Subject</label>
								</div>
								<div class="col-md-6">
									<input name="subject">   
								</div>
							</div> 
							<div class="row"> 
								<div class="col-md-6"> 
									<label>Email body</label>
								</div>
								<div class="col-md-6">
									<input name="body">   
								</div>
							</div>

						</div>
						<input id="email_id" name="emailid" type="hidden" value="default">
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger" >Submit</button>
						</div>
					</form>

				</div>
			</div>
		</div>

	</div>
	<footer style="height: 20rem;">

	</footer>
</body>
</html>
