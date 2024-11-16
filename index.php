<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<div class="header">
				<h1 class="text-center">Donate the blood, save the life</h1>
				<p class="text-center">Donate the blood to help the others.</p>
			</div>


			<h1 class="text-center">Search The Donors</h1>
			<hr class="white-bar text-center">

			<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
				<div class="form-group text-center justify-content-center">
					<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default"
						required>
						<option value="">-- Select City --</option>
						<optgroup title="Barishal" label="&raquo; Barishal"></optgroup>
						<option value="Barguna">Barguna</option>
						<option value="Barishal">Barishal</option>
						<option value="Bhola">Bhola</option>
						<option value="Jhalokathi">Jhalokathi</option>
						<option value="Patuakhali">Patuakhali</option>
						<option value="Pirojpur">Pirojpur</option>
						
						
						
						<optgroup title="Chattogram" label="&raquo; Chattogram"></optgroup>
						<option value="B.baria">B.baria</option>
						<option value="Bandarban">Bandarban</option>
						<option value="Chandpur">Chandpur</option>
						<option value="Chattogram">Chattogram</option>
						<option value="Cox's bazar">Cox's bazar</option>
						<option value="Cumilla">Cumilla</option>
						<option value="Feni">Feni</option>
						<option value="Khagrachari">Khagrachari</option>
						<option value="Laxmipur">Laxmipur</option>
						<option value="Noakhali">Noakhali</option>
						<option value="Rangamati">Rangamati</option>
						
						
						
						
						<optgroup title="Dhaka" label="&raquo; Dhaka"></optgroup>
						<option value="Dhaka">Dhaka</option>
						<option value="Faridpur">Faridpur</option>
						<option value="Gazipur">Gazipur</option>
						<option value="Gopalganj">Gopalganj</option>
						<option value="Kishoreganj">Kishoreganj</option>
						<option value="Madaripur">Madaripur</option>
						<option value="Manikganj">Manikganj</option>
						<option value="Munshiganj">Munshiganj</option>
						<option value="Narayanganj">Narayanganj</option>
						<option value="Narshingdi">Narshingdi</option>
						<option value="Rajbari">Rajbari</option>
						<option value="Shariatpur">Shariatpur</option>
						<option value="Tangail">Tangail</option>
						
						
						
						
						
						<optgroup title="Khulna" label="&raquo; Khulna"></optgroup>
						<option value="Bagerhat">Bagerhat</option>
						<option value="Chuadanga">Chuadanga</option>
						<option value="Jashore">Jashore</option>
						<option value="Jhenaidah">Jhenaidah</option>
						<option value="Khulna">Khulna</option>
						<option value="Kushtia">Kushtia</option>
						<option value="Magura">Magura</option>
						<option value="Meherpur">Meherpur</option>
						<option value="Narail">Narail</option>
						<option value="Satkhira">Satkhira</option>
						
						
						
						
						
						
						<optgroup title="MYMENSINGH" label="&raquo; MYMENSINGH"></optgroup>
						<option value="Jamalpur">Jamalpur</option>
						<option value="Mymensingh">Mymensingh</option>
						<option value="Netrokona">Netrokona</option>
						<option value="Sherpur">Sherpur</option>
						<option value="Satkhira">Satkhira</option>
						
						
						
						
						
						
						
						<optgroup title="Rajshahi" label="&raquo; Rajshahi"></optgroup>
						<option value="Bogura">Bogura</option>
						<option value="C. nawabganj">C. nawabganj</option>
						<option value="Joypurhat">Joypurhat</option>
						<option value="Naogaon">Naogaon</option>
						<option value="Natore">Natore</option>
						<option value="Pabna">Pabna</option>
						<option value="Rajshahi">Rajshahi</option>
						<option value="Sirajganj">Sirajganj</option>
						
						
						
						
						
						
						
						<optgroup title="Rangpur" label="&raquo; Rangpur"></optgroup>
						<option value="Dinajpur">Dinajpur</option>
						<option value="Gaibandha">Gaibandha</option>
						<option value="Kurigram">Kurigram</option>
						<option value="Lalmonirhat">Lalmonirhat</option>
						<option value="Nilphamari">Nilphamari</option>
						<option value="Panchagarh">Panchagarh</option>
						<option value="Rangpur">Rangpur</option>
						<option value="Thakurgaon">Thakurgaon</option>
						
						
						
						
						
						
						
						
						<optgroup title="Sylhet" label="&raquo; Sylhet"></optgroup>
						<option value="Habiganj">Habiganj</option>
						<option value="Moulvibazar">Moulvibazar</option>
						<option value="Sunamganj">Sunamganj</option>
						<option value="Sylhet">Sylhet</option>
						
					</select>
					
				</div>
				<div class="form-group center-aligned">
					<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;"
						class="form-control demo-default text-center margin10px">
						<option value="" disabled selected>Select Blood</option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>

					</select>
				</div>
				<div class="form-group center-aligned">
					<button type="submit" class="btn btn-lg btn-danger">Search</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- header ends -->

<!-- donate section -->
<div class="container-fluid red-background">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
			<hr class="white-bar">
			<p class="text-center pera-text">
				We are a group of exceptional programmers; our aim is to promote education. If you are a student, then
				contact us to secure your future. We deliver free international standard video lectures and content. We
				are also providing services in Web & Software Development.

				We are a group of exceptional programmers; our aim is to promote education. If you are a student, then
				contact us to secure your future. We deliver free international standard video lectures and content. We
				are also providing services in Web & Software Development.
			</p>
			<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
		</div>
	</div>
</div>
<!-- end doante section -->


<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Vission</h3>
				<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					We are a group of exceptional programmers; our aim is to promote education. If you are a student,
					then contact us to secure your future. We deliver free international standard video lectures and
					content. We are also providing services in Web & Software Development.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Goal</h3>
				<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					We are a group of exceptional programmers; our aim is to promote education. If you are a student,
					then contact us to secure your future. We deliver free international standard video lectures and
					content. We are also providing services in Web & Software Development.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Mission</h3>
				<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					We are a group of exceptional programmers; our aim is to promote education. If you are a student,
					then contact us to secure your future. We deliver free international standard video lectures and
					content. We are also providing services in Web & Software Development.
				</p>
			</div>
		</div>
	</div>
</div>

<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>