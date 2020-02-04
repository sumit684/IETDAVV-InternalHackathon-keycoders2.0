<div >
	<u>	<h1 class="text-center pt-4">AUTHENTICATE ALUMNI</h1></u>
</div>

<div class="pt-4">
	<table class="table table-hover " id="alumni_table">
		<thead>
			<tr>
				<th scope="col" >S.no</th>
				<th scope="col">Enroll no.</th>
				<th scope="col">Name</th>
				<th scope="col">Course</th>
				<th scope="col">Batch</th>
				<th scope="col">Email ID</th>
				<th scope="col">Register Time</th>
				<th scope="col"></th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tfoot style="display: table-header-group;">
			<tr>
				<th scope="col" class="hide_filter">S.no</th>
				<th scope="col">Enroll no.</th>
				<th scope="col">Name</th>
				<th scope="col">Course</th>
				<th scope="col">Batch</th>
				<th scope="col">Email ID</th>
				<th scope="col">Register Time</th>
				<th scope="col" class="hide_filter"></th>
				<th scope="col" class="hide_filter"></th>
			</tr>
		</tfoot>
		<tbody>

			<?php 
			foreach ($pending as $key => $data) {?>
				<tr>
					<th scope="row"><?=$key+1?></th>
					<td><?= $data->enroll_no;?></td>
					<td><?= $data->fname;?> <?=$data->lname?></td>
					<td><?= $data->course;?></td>
					<td><?= $data->year_adm;?>-<?= $data->year_leaving?></td>
					<td><?= $data->email_id;?></td>
					<td><?= $data->created;?></td>
					<td><a href="<?= base_url()?>Admin/acceptRequest/<?= $data->id ?>"><button id="accept" class="btn btn-success accept" >Accept</button></a></td>
					<td><a href="<?= base_url()?>Admin/rejectRequest/<?= $data->id ?>"><button id="reject" class="btn btn-danger">Reject</button></a></td>
				</tr>

			<?php } ?>					
		</tbody>
	</table>			

</div>
</div>

</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		$('#alumni_table').DataTable( {
			stateSave: true,
			// dom: 'lBfrtip',
			// buttons: ['excelHtml5',  'copyHtml5',
			// 'excelHtml5',
			// 'csvHtml5',
			// 'pdfHtml5'],

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
