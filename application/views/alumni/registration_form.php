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
	<link href="<?=base_url();?>assets/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
	<link href="<?=base_url();?>assets/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<!-- Font special for pages-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Vendor CSS-->
	<link href="<?=base_url();?>assets/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="<?=base_url();?>assets/datepicker/daterangepicker.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="<?=base_url();?>assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
	<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" style="background-image: url(<?php echo base_url();?>assets/img/alumni.jpg); background-repeat: no-repeat; background-size: 100%;  background-attachment: fixed; height:100%; ">
		<div class="wrapper wrapper--w680" style="opacity: 0.95;box-shadow: 0 0 10px grey;border-radius: 20px;">
			<div class="card card-4">
				<div class="card-body" >
					<div align="center">
						<img src="<?=base_url()?>assets/img/logo.jpeg" class="img-fluid" style="max-height: 140px; ">
					</div>
					<h1 class="title" align="center" style="font-size: 25px; margin-bottom: 5px;"><b>Government of GOA</b></h1>
					<h2 class="title" align="center"><b>Alumni Registration Form </b></h2>
					<!-- <span>Personal Details</span><br><br><br> -->
					<form method="POST" action="#">
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label class="label">first name</label>
									<input class="input--style-4" type="text" name="first_name" autofocus="" required="">
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
									<div class="rs-select2 js-select-simple select--no-search">
										<select name="admission_year" class="input--style-4" style="height: 30px;">
											<option selected disabled="">Select Year</option>

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
										</select>
										<div class="select-dropdown"></div>
									</div>
									<!-- <input class="input--style-4" type="year" name="admission_year"> -->
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">Year of leaving College</label>
									<div class="rs-select2 js-select-simple select--no-search">
										<select name="admission_year" class="input--style-4" style="height: 30px;">
											<option selected="" disabled=""> Select Year </option>

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
										</select>
										<div class="select-dropdown"></div>
									</div>
									<!-- <input class="input--style-4" type="text" name="last_name"> -->
								</div>
							</div>
						</div>

						<div class="input-group">
							<label class="label">email</label>
							<div class="rs-select2 js-select-simple select--no-search">
								<input class="input--style-4" type="text" name="email" autocomplete="off">
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
								<select name="college" class="input--style-4" style="height: 30px;">
									<option disabled="disabled" selected="selected">Choose college</option>
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
									<div class="rs-select2 js-select-simple select--no-search">
										<select required name="marital_status" class="input--style-4" style="height: 30px;">
											<option selected disabled>Select</option>
											<option value="single">Single</option>
											<option value="Married">Married</option>
										</select>
										<div class="select-dropdown"></div>
									</div>
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
								<select name="occupation" class="input--style-4" style="height: 30px;">
									<option selected="" required disabled="">Select Occupation</option>
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
							<strong>
								<textarea class="input--style-4" maxlength="200" cols="60" rows="2" placeholder="max. 200 characters" name="profile"></textarea>		
							</strong>
						</div>

						<div class="input-group">
							<label class="label">Special Achievements</label>
							<strong>
								<textarea class="input--style-4" maxlength="200" cols="60" rows="2" placeholder="max. 200 characters" name="profile"></textarea>		
							</strong>
						</div>	
						 <div class="form-group cpt m-b-30 col-md-2 col-sm-3 col-xs-6">
                                            <label for="subject">Captcha *</label> <img src="https://mumbaipolice.gov.in/captcha/default?N23BnDhd"  id="mycaptcha" style="width:90px !important;">&nbsp;<img src="<?=base_url()?>assets/img/refresh.png" data-value="https://mumbaipolice.gov.in/captcha/default?9nwAjs4C" id="captcha_refresh" onclick="return refreshcaptcha();" style="cursor:pointer;width:30px;height:34px;">
                         </div>
                                        
                          <div class="form-group m-b-30 mt-25 col-md-4 col-sm-4 col-xs-6">
                                            <input class="form-control styCp" name="captcha" onkeyup="this.value=this.value.replace(/[^\d]/,'')" maxlength="5" placeholder="Enter Captcha Here *" type="text" title="Enter Captcha Here" autocomplete="off" required="">
                                            <span class="validity"></span>
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
	<script src="<?=base_url();?>/assets/jquery/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<!-- Vendor JS-->
	<script src="<?=base_url();?>/assets/select2/select2.min.js"></script>
	<script src="<?=base_url();?>/assets/datepicker/moment.min.js"></script>
	<script src="<?=base_url();?>/assets/datepicker/daterangepicker.js"></script>

	<!-- Main JS-->
	<script src="<?=base_url();?>/assets/js/global.js"></script>
	<script src="<?=base_url();?>/assets/js/captcha.js"></script>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->