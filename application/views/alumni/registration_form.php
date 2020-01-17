<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Colorlib Templates">
	<meta name="author" content="Colorlib">
	<meta name="keywords" content="Colorlib Templates">

	<!-- Title Page-->
	<title> Alumni registration form</title>

	<!-- Icons font CSS-->
	<link href="<?=base_url();?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
	<link href="<?=base_url();?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<!-- Font special for pages-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Vendor CSS-->
	<link href="<?=base_url();?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="<?=base_url();?>assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
	<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" style="background-image: url(<?php echo base_url();?>assets/img/univ.jpg)">
		<div class="wrapper wrapper--w680">
			<div class="card card-4">
				<div class="card-body">
					<h2 class="title"><b>GOVT OF GOA- Alumni Registration Form </b></h2>
					<!-- <span>Personal Details</span><br><br><br> -->
					<form method="POST">
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label class="label">first name</label>
									<input class="input--style-4" type="text" name="first_name">
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">last name</label>
									<input class="input--style-4" type="text" name="last_name">
								</div>
							</div>
						</div>

						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label class="label">Year of admission in College</label>
									<select name="admission_year" class="input--style-4" style="height: 30px;">
										<option>- Year -</option>

										<option value="2019">2019</option>
										<option value="2018">2018</option>
										<option value="2017">2017</option>
										<option value="2016">2016</option>
										<option value="2015">2015</option>
										<option value="2014">2014</option>
										<option value="2013">2013</option>
										<option value="2012">2012</option>
										<option value="2011">2011</option>
										<option value="2010">2010</option>
										<option value="2009">2009</option>
										<option value="2008">2008</option>
										<option value="2007">2007</option>
										<option value="2006">2006</option>
										<option value="2005">2005</option>
										<option value="2004">2004</option>
										<option value="2003">2003</option>
										<option value="2002">2002</option>
										<option value="2001">2001</option>
										<option value="2000">2000</option>
										<option value="1999">1999</option>
										<option value="1998">1998</option>
										<option value="1997">1997</option>
										<option value="1996">1996</option>
										<option value="1995">1995</option>
										<option value="1994">1994</option>
										<option value="1993">1993</option>
										<option value="1992">1992</option>
										<option value="1991">1991</option>
										<option value="1990">1990</option>
										<option value="1989">1989</option>
										<option value="1988">1988</option>
										<option value="1987">1987</option>
										<option value="1986">1986</option>
										<option value="1985">1985</option>
										<option value="1984">1984</option>
										<option value="1983">1983</option>
										<option value="1982">1982</option>
										<option value="1981">1981</option>
										<option value="1980">1980</option>
										<option value="1979">1979</option>
										<option value="1978">1978</option>
										<option value="1977">1977</option>
										<option value="1976">1976</option>
										<option value="1975">1975</option>
										<option value="1974">1974</option>
										<option value="1973">1973</option>
										<option value="1972">1972</option>
										<option value="1971">1971</option>
										<option value="1970">1970</option>
										<option value="1969">1969</option>
										<option value="1968">1968</option>
										<option value="1967">1967</option>
										<option value="1966">1966</option>
										<option value="1965">1965</option>
										<option value="1964">1964</option>
										<option value="1963">1963</option>
										<option value="1962">1962</option>
										<option value="1961">1961</option>
										<option value="1960">1960</option>
										<option value="1959">1959</option>
										<option value="1958">1958</option>
										<option value="1957">1957</option>
										<option value="1956">1956</option>
										<option value="1955">1955</option>
										<option value="1954">1954</option>
										<option value="1953">1953</option>
										<option value="1952">1952</option>
										<option value="1951">1951</option>
										<option value="1950">1950</option>
										
									</select>
									<!-- <input class="input--style-4" type="year" name="admission_year"> -->
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">Year of leaving College</label>
									<select name="admission_year" class="input--style-4" style="height: 30px;">
										<option>- Year -</option>

										<option value="2019">2019</option>
										<option value="2018">2018</option>
										<option value="2017">2017</option>
										<option value="2016">2016</option>
										<option value="2015">2015</option>
										<option value="2014">2014</option>
										<option value="2013">2013</option>
										<option value="2012">2012</option>
										<option value="2011">2011</option>
										<option value="2010">2010</option>
										<option value="2009">2009</option>
										<option value="2008">2008</option>
										<option value="2007">2007</option>
										<option value="2006">2006</option>
										<option value="2005">2005</option>
										<option value="2004">2004</option>
										<option value="2003">2003</option>
										<option value="2002">2002</option>
										<option value="2001">2001</option>
										<option value="2000">2000</option>
										<option value="1999">1999</option>
										<option value="1998">1998</option>
										<option value="1997">1997</option>
										<option value="1996">1996</option>
										<option value="1995">1995</option>
										<option value="1994">1994</option>
										<option value="1993">1993</option>
										<option value="1992">1992</option>
										<option value="1991">1991</option>
										<option value="1990">1990</option>
										<option value="1989">1989</option>
										<option value="1988">1988</option>
										<option value="1987">1987</option>
										<option value="1986">1986</option>
										<option value="1985">1985</option>
										<option value="1984">1984</option>
										<option value="1983">1983</option>
										<option value="1982">1982</option>
										<option value="1981">1981</option>
										<option value="1980">1980</option>
										<option value="1979">1979</option>
										<option value="1978">1978</option>
										<option value="1977">1977</option>
										<option value="1976">1976</option>
										<option value="1975">1975</option>
										<option value="1974">1974</option>
										<option value="1973">1973</option>
										<option value="1972">1972</option>
										<option value="1971">1971</option>
										<option value="1970">1970</option>
										<option value="1969">1969</option>
										<option value="1968">1968</option>
										<option value="1967">1967</option>
										<option value="1966">1966</option>
										<option value="1965">1965</option>
										<option value="1964">1964</option>
										<option value="1963">1963</option>
										<option value="1962">1962</option>
										<option value="1961">1961</option>
										<option value="1960">1960</option>
										<option value="1959">1959</option>
										<option value="1958">1958</option>
										<option value="1957">1957</option>
										<option value="1956">1956</option>
										<option value="1955">1955</option>
										<option value="1954">1954</option>
										<option value="1953">1953</option>
										<option value="1952">1952</option>
										<option value="1951">1951</option>
										<option value="1950">1950</option>
										
									</select>
									<!-- <input class="input--style-4" type="text" name="last_name"> -->
								</div>
							</div>
						</div>

						<div class="input-group">
							<label class="label">email</label>
							<div class="rs-select2 js-select-simple select--no-search">
								<input class="input--style-4" type="text" name="email">
							</div>
						</div>

						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label class="label">Password</label>
									<input class="input--style-4" type="password" name="email">
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">Confirm Password</label>
									<input class="input--style-4" type="password" name="cnfpassword">
								</div>
							</div>
						</div>
						<div class="input-group">
							<label class="label">College</label>
							<div class="rs-select2 js-select-simple select--no-search">
								<select name="college">
									<option disabled="disabled" selected="selected">Choose option</option>
									<option>IET,DAVV</option>
									<option>SGSITS</option>
									<option>BITS GOA</option>
									<option>IIPS</option>
									<option>ISC</option>
								</select>
								<div class="select-dropdown"></div>
							</div>
						</div>
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label class="label">Enrollment number</label>
									<input class="input--style-4" type="text" name="enroll_num">
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">Phone Number</label>
									<input class="input--style-4" type="text" name="phone">
								</div>
							</div>
						</div>

						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label class="label">Marital Status</label>
									<select required name="marital_status" class="input--style-4" style="height: 30px;">
										<option selected disabled>Select</option>

										<option value="single">Single</option>
										<option value="Married">Married</option>
									</select>
									
								</div>
							</div>
							
						</div>
						
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label class="label">Date of Birth</label>
									<div class="input-group-icon">
										<input class="input--style-4 js-datepicker" type="text" name="birthday">
										<i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
									</div>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">Gender</label>
									<div class="p-t-10">
										<label class="radio-container m-r-45">Male
											<input type="radio" checked="checked" name="gender">
											<span class="checkmark"></span>
										</label>
										<label class="radio-container">Female
											<input type="radio" name="gender">
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						

						<div class="input-group">
							<label class="label">Address</label>
							<div class="rs-select2 js-select-simple select--no-search">
								<input class="input--style-4" type="text" name="address">
							</div>
						</div>

						<div class="input-group">
							<label class="label">Occupation</label>
							<div class="rs-select2 js-select-simple select--no-search">
								<select name="occupation" >
	  								<option value="">------</option>
	 								 <option value="BUSINESS">BUSINESS</option>
	 								 <option value="SERVICE">SERVICE</option>
	 								 <option value="ENTREPRENEUR">ENTREPRENEUR</option>
	 								 <option value="HOME MAKER">HOME MAKER</option>
	 								 <option value="STUDENT">STUDENT</option>
	 								 <option value="OTHER">OTHER</option>
	 								</select>
								<div class="select-dropdown"></div>
							</div>
						</div>

						<div class="input-group">
							<label class="label">Brief Profile</label>
							<div class="rs-select2 js-select-simple select--no-search">
								<strong>
								<textarea maxlength="200" cols="60" rows="5" placeholder="200 characters" name="profile"> </textarea>		
								</strong>
							</div>
						</div>

						<div class="input-group">
							<label class="label">Special Achievements</label>
							<div class="rs-select2 js-select-simple select--no-search">
								<strong>
								<textarea maxlength="200" cols="60" rows="5" placeholder="200 characters" name="profile"> </textarea>		
								</strong>
							</div>
						</div>





						
						<div class="p-t-15">
							<button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Jquery JS-->
	<script src="<?=base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
	<!-- Vendor JS-->
	<script src="<?=base_url();?>/assets/vendor/select2/select2.min.js"></script>
	<script src="<?=base_url();?>/assets/vendor/datepicker/moment.min.js"></script>
	<script src="<?=base_url();?>/assets/vendor/datepicker/daterangepicker.js"></script>

	<!-- Main JS-->
	<script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->