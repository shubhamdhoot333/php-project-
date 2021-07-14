<?php
error_reporting(0);
session_start();
$cookies_name="shubham";
	//connect to DBMS			
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="shop";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
					if(!$conn)
						{
						$e="not connect with server "; 
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
					else 
						{
						"connect with server";
						}
	
						if(isset($_REQUEST['Submit']))
						{
	//check email or password is blank or not			
							if($_REQUEST['Email']=="" or $_POST['Password']=="" )
							{
								$e="Please enter some value"; 
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
	
							die;
							}
							
							
								
							 $Email=$_REQUEST['Email'];
							 $pass=$_REQUEST['Password'];
							 $remember=$_REQUEST['remember'];
								if($remember!='')
								{									
								$arr=array();
								array_push($arr,$Email);
								array_push($arr,$pass);
								
								
								setcookie($cookies_name,"".$Email.",".$pass,time()+(86400*1000),"/");
					
							}
								
	//check email is validate or not			
							if(!filter_var($Email,FILTER_VALIDATE_EMAIL)===false)
								{
								"email is valid <br>";
								}
							else 
								{
								$e="email not valid"; 
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
								}
	//check password length or validate or not	
								$passlength=strlen($pass);
							if($passlength>8)
								{
								$e="password must be 8 digit password incorrect";
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
								}
		//check email or password enter is valied or not			
								$query="select * from admin where email='$Email' AND password='$pass' ";
								mysqli_query($conn,$query);
								$n= mysqli_affected_rows($conn);
							
							if($n!=0) 
								{
								$_SESSION['Email']=$Email;
								header('location:adminindex.php');
								}
							else 
								{
							$e=" not login ";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
								}
								
						}
						
				mysqli_close($conn);
?>

<html>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
            <title>login form</title>
		<!--linking part-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!--font awesome-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
						   <style>
		      
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
		background-color: #F8B195;
	
		}
		
	li.f2{
		display: block;
		color: white;
		text-align:left;
		padding: 12px 14px;
		text-decoration: none;
		}
				
				
		   </style>
	</head>
<body>
	
		<ul class=f1>
			<li class=f2>
			<font color="red" size="6px" ><i class="fas fa-birthday-cake"></i></font>&nbsp &nbsp
			<font face="segoe script" size="5px" ><u>Cake For You</u></font>&nbsp &nbsp 
			</li>
			
		</ul>
		<br>		
		<div class="container" style="background-color:#f67280">
			<br>
			<form method="POST" action="adminindex.php" enctype="multipart/form-data">
				<fieldset>
							
							<legend align="center"><i class="fa fa-user-circle" style="font-size:100px"></i></legend>
								<font face="segoe script" size="5px"><center>Please Sign in</center></font>
			<!--1 row-->						
							<div class="row">
								<div class="col-lg-3"></div>
								<div class="col-lg-6">
									<label><font face="segoe script">Email</font></label>
										<div class="inputwithicon">
											<input type="email" class="form-control" name="Email" placeholder="Enter your Email"  required autofocus>
											
											<i class="fa fa-envelope fa-lg fa-fw"></i>
										</div>
								</div>
								<div class="col-lg-3">
								</div>
							</div>
			<!--2 row-->				
							<div class="row">
								<div class="col-lg-3"></div>
								<div class="col-lg-6">
									<label><font face="segoe script">Password</font></label>
										<div class="inputwithicon">
											<input type="password" class="form-control"  name="Password" max=8 min=8 placeholder="Enter your Password" required>
												<i class="fa fa-key fa-lg fa-fw"></i>
										</div>
								</div>
								<div class="col-lg-3">
								</div>
							</div>
			<!--3 row-->							
								<br>
							<div class="row">
								<div class="col-lg-5"></div>
								<div class="col-lg-2 text-center">
								<label>
									<input type="checkbox" name="remember" value="remember-me"> <font face="segoe script">Remember me</font>
								</label>
								</div>
								<div class="col-5">
								</div>
							</div>
			
			<!--4 row-->						
							<div class="row">
								<div class="col-lg-4"></div>
								<div class="col-lg-4">
									<input type="submit" class="btn btn-primary  btn-block" name="Submit" value="Submit">	
								</div>
								<div class="col-lg-4">
								</div>
							</div>
						<br>	
												
						
				</fieldset>
			</form>
		</div>
	</body>
</html>
