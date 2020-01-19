		<div >
			<u>	<h1 class="text-center pt-4">ALUMNI</h1></u>

		</div>
		<div class="row ml-4">

			<nav class="navbar navbar-expand-sm bg-light navbar-light;" style="display: contents; margin-left: auto; margin-right: auto;">
				<ul class="navbar-nav">
					<li class="nav-item active mr-5">
						<div class="form-group">
							<label>Select Batch</label>
							<select class="form-control" name="year">
								<option disabled selected> Select Batch </option>
								<option value="">1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
					</li>
					<li class="nav-item active">
						<div class="form-group">
							<label>Select Batch</label>
							<select class="form-control" name="year">
								<option disabled selected> Select Course </option>
								<option value="">1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li> -->
				</ul>
			</nav>
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
						</tr>

					<?php } ?>					
				</tbody>
			</table>
			<script type="text/javascript">
				$(document).ready( function () {
					$('#alumni_table').DataTable();
				} );
			</script>

		</div>
	</div>

	<footer style="height: 20rem;">
		
	</footer>
</body>
</html>
