<?php
session_start();
error_reporting(0);
	// connect to dbms			
				$Email=$_SESSION['Email'];
				if($Email!=''){
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="shop";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
				
				if(!$conn)
				{
					
					$e="not connect with server";
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
				}
				else 
				{
				 "connect with server";
				
				}
					
	//take data from dbms			
					$query="select * from user where email='$Email' ";
						$data=mysqli_query($conn,$query);
						$total=mysqli_fetch_assoc($data);	
					 $id=$total['id'];
					 $Username=$total['name'] ;
					  $Phone=$total['Phone'];
					 $Password=$total['pass'];

	//edit the data 				 
					 if(isset($_POST['Edit']))
				{
	//check value empty or not empty		
							if($_POST['Username']=="" or  $_POST['Email']=="" or $_POST['Phone']==""  or $_POST['Password']=="" )
							{
							die;
							}
						$Username1=$_POST['Username'];
						$Phone_Number1=$_POST['Phone'];
						$Email1=$_POST['Email'];					//data code
						$Password1=$_POST['Password'];
				
	//find length of all variable	
					$username_length=strlen($Username1);
					$Age_length=strlen($Age1);
					$Phone_Number_length=strlen($Phone_Number1);
					$Password_length=strlen($Password1);
		
	//check username length						
					if($username_length>20)
						{
						$e="Username must be 20 digit ";
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
						
						}
	//check phone number length						
					if($Phone_Number_length>10)
						{
						$e="invalied phone number";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	//check password length						
					if($Password_length>8)
						{
						$e="password must be 8 digit ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	// check email validation					
					if(!filter_var($Email,FILTER_VALIDATE_EMAIL)===false)
							{
							 "email is valid <br>";
							}
						else 
							{
							$e="Enter Email formate not right ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;	
							}		
	//check email unique			
				if($Email!==$Email1)
							{
								$result = " select * from user where email='$Email1'";
								mysqli_query($conn,$result);
								$num_row = mysqli_affected_rows($conn);
				
								if($num_row>=1)
								{
								$e="email exist plz change your email";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
								 															
								}
							}
	//update data in page query				
						$query="update user set name='$Username1',email='$Email1',Phone='$Phone_Number1',Pass='$Password1' where id  like '$id'"; 
					
					if(mysqli_query($conn,$query))
						{  
							header('location:logout.php');
							
							"Edit succesfull";
						}
					else 
						{
							echo mysqli_error();
						}
				}
	// check usern enter cancel button					
						if(isset($_POST['Cancel']))
						{
							header('location:index.php');
							
						}
				}
				else{
					$e="please login your Account";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
				}	
				mysqli_close($conn);
?>				

<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Account Setting</title>
			<!--link-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<!--font awesome-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
			<link rel="stylesheet" href="L&S.css">
			
</head>
<body>
		<div class="conatiner-fluid">
	<!--navbar-->		
					<nav class="navbar navbar-expand-lg " style="background-color:#f67280; ">
							<font face="segoe script"size="5px"color="white">
							<i class="fas fa-birthday-cake"></i>Cake For You</font>
					</nav>
					
	<!--breadcrumb-->			
						<div aria-label="breadcrumb"  >
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Account Setting</li>
								</ol>
						</div>
						</div>
	<!--container-->				
					<div class="container"  style="background-color:#F8B195">
	<!--1row-->			<div class="row ">
							<div class="col-lg-12 text-center">
							<font color="red" size="6px" face="segoe script">
									<b>Account Setting</b>
							</font>
							</div>
						</div>
						<br>
					<form method="POST" action="L&S.php" enctype="multipart/form-data">	
	<!--2row-->		
						
					<legend align="center"><i class="fa fa-user-circle" style="font-size:100px"></i></legend>		
	<!--3row-->					
						<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-5 input-group-sm"><b><label><font size="4px">Username:</font></label></b>
									<div class="inputwithicon">
										<input type="text" class="form-control" name="Username" value="<?php echo $Username ?>" required>
										<i class="fa fa-user fa-lg fa-fw"></i>	
									</div>
								</div>
								<div class="col-lg-5 input-group-sm"><b>Email Address:</b>
									<div class="inputwithicon">
										<input type="Email" class="form-control" name="Email" value="<?php echo $Email ?>" required>
										<i class="fa fa-envelope fa-lg fa-fw"></i>
									</div>
								</div>
								
								<div class="col-lg-1"></div>
						</div>
	<!--4row-->	
						<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-5 input-group-sm"><b><label><font size="4px">Phone Number:</font></label></b>
									<div class="inputwithicon">
										<input type="text" class="form-control" name="Phone" value="<?php echo $Phone ?>" required>
										<i class="fa fa-phone fa-lg fa-fw"></i>
									</div>
								</div>
	
								<div class="col-lg-5 input-group-sm"><b><label><font size="4px">Password:</font></label></b>
									<div class="inputwithicon">
									<input type="Password" class="form-control" name="Password" value="<?php echo $Password ?>" required>
									<i class="fa fa-key fa-lg fa-fw mr-2"></i>	
									</div>
								</div>
								<div class="col-lg-1"></div>
						</div>	
						
	<!--6 row-->		<br>
						<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-4 text-center">
								<input type="submit" class="btn btn-block  btn-primary"name="Edit" value="Edit">
								</div><br><br><br>
								<div class="col-lg-4">
								<input type="submit" class="btn btn-block  btn-primary"name="Cancel" value="Cancel">
								</div>
								<div class="col-lg-2"></div>
						</div>	
						<br>
				
				</form>
					</div>
	<br><br>
	
	
</body>
</html>