<?php
include 'registerphp.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
<style>
	.form{
		background-color: white;
		text-align: center;
		width: 500px;
		margin-left: auto;
		margin-right: auto;
		border: 1px;
		}
				input.ng-invalid {
									border-color: red;
								}
				
				input.ng-valid {
									border-color: green;
								}
				.inputwithicon input[type=text]
						{
						padding-left:40px;
						}
				.inputwithicon input[type=number]
						{
						padding-left:40px;
						}	
				
				.inputwithicon input[type=email]
						{
						padding-left:40px;
						}
				.inputwithicon input[type=password]
						{
						padding-left:40px;
						}
				.inputwithicon
						{
						position:relative;
						}
			
				.inputwithicon i
						{
						position:absolute;
						left:3px;
						top:2px;
						padding:9px 8px;
						color:blue;
						transition:3s;
						}				
						ul.f1 {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #f67280;
	
		}
		
	li.f2{
		display: block;
		color: white;
		text-align:left;
		padding: 12px 14px;
		text-decoration: none;
		}
</style>
			
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!--font awesome-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
	

		<body style="background-color: #fbb195">
			<ul class=f1>
			<li class=f2>
			<font color="red" size="6px" ><i class="fas fa-birthday-cake"></i></font>&nbsp &nbsp
			<font face="segoe script" size="5px" ><u>Cake For You</u></font>&nbsp &nbsp 
			</li>
			
		</ul>
			<div class="container">	
				<form class="form" name="registration" method="POST" action="register.php"  style="border-color: #CCC">
					<legend align="center"><font face="segoe script"><u>Registration Page</u></font></legend>
								<center> <i class="fa fa-user-circle" style="font-size:90px "></i> </center>
		<!--1 row-->				
					
					<div class="row">
							<div class="col-lg-1"></div>
							<div class="col-lg-10 text-center">
				<!--username-->				
								<label><font face="segoe script"size="4px"><b><u>Username</u></b></font></label>
									<div class="inputwithicon">
										<input type="text" class="form-control" name="Username"  ng-model="Username" placeholder="Enter your username" required autofocus>
										<i class="fa fa-user fa-lg fa-fw"></i>
									</div>
							</div>
							<div class="col-lg-1"></div>
					</div>	
						
		<!--2row-->				
						<div class="row">
							<div class="col-lg-1"></div>
					<!--phone-->		
							<div class="col-lg-10 text-center">
									<label><font face="segoe script" size="4px"><b><u>Phone Number</u></b></font></label>
								<div class="inputwithicon">
									<input type="number" class="form-control" name="Phone" placeholder="Enter your P-number" ng-maxlength="10" ng-model="Phone" required>
									<i class="fa fa-phone fa-lg fa-fw"></i>
								</div>
							</div>
							<div class="col-lg-1"></div>
						</div>
		<!--3row-->				
						<div class="row">
							<div class="col-lg-1"></div>

					<!--email-->				
							<div class="col-lg-10 text-center">
								<label><font face="segoe script" size="4px"><b><u>Email</u></b></font></label>
									<div class="inputwithicon">
										<input type="email" class="form-control" name="Email" placeholder="Enter your email" ng-model="Email" required>
										<i class="fa fa-envelope fa-lg fa-fw"></i>
									</div>
							</div>
							<div class="col-lg-1"></div>
						</div>
					
		<!--4 row-->				
						<div class="row">
							<div class="col-lg-1"></div>
					<!--password-->		
							<div class="col-lg-10 text-center">
								<label><font face="segoe script" size="4px"><b><u>Password</u></b></font></label>
									<div class="inputwithicon">
										<input type="password" class="form-control" name="Password" placeholder="Enter your Password" ng-model="Password" ng-maxlength=8 ng-minlength=8 required >
										<i class="fa fa-key fa-lg fa-fw"></i>
										<small class="form-text text-muted"><font color="red">*Your password must be 8 digit</font> </small>
									</div>
							</div>
					<!--confirm password-->		
							<div class="col-lg-1 text-center"></div>
							
						</div>
						<br>
							<!--6 row-->				
						<div class="row">
							<div class="col-lg-4">
							</div>
							<div class="col-lg-4 text-center"><font size="4px"><b>
								<input type="submit" class="btn btn-md btn-block btn-primary" name="Submit" value="Submit"></b></font>
							</div>
							<div class="col-lg-4">
							</div>
						</div>			
					

					<br>
					<br>
					<br>
					<br>
				</form>
			</div>
			<footer>
			
			</footer>
			
		</body>
</html>