<?php
session_start();
error_reporting(0);
//connect to datatbase		
				$Email=$_SESSION['Email'];
				if($Email!='')
				{
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="shop";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
					if(!$conn)
						{
						$e="not connect with server";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						}
					else 
						{
						"connect with server";
						
						}
	//get product value	
						$pid=$_GET['value1'];
					$ti_name=$_GET['value2'];	
					$quan=$_GET['value3'];
					 
						
	//data code		
					if(isset($_POST['Submit']))
					{
	
	//check value not empty		
						if($_POST['Clientname']=="" or $_POST['Phone']=="" or $_POST['Pin_code']=="" or $_POST['Home_Number']=="" or $_POST['Colony']=="" or $_POST['City']==""  or $_POST['State']=="" or $_POST['Type']=="" )
							{
							die;
							}
						$Clientname=$_POST['Clientname'];
						$Phone=$_POST['Phone'];
						$Pin_code=$_POST['Pin_code'];
						$Home_Number=$_POST['Home_Number'];
						$Colony=$_POST['Colony'];
						$City=$_POST['City'];
						$State=$_POST['State'];
						$Type=$_POST['Type'];
	//find length of all variable	
					$C_length=strlen($Clientname);
					$P_length=strlen($Phone);
					$Pin_length=strlen($Pin_code);
					$H_length=strlen($Home_Number);
					$Co_length=strlen($Colony);
					$City_length=strlen($City);
					$S_length=strlen($State);
					$T_length=strlen($Type);
	//check clientname length						
					if($C_length>20)
						{
						$e="clientname must be 20 digit clientname incorrect";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	//check phone number length						
					if($P_length>10)
						{
						$e="please enter a valied phone number phone incorrect";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	//check pin code length						
					if($Pin_length>6)
						{
						$e="pin number must be 6 digit pin number incorrect";
						
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	//check home number length						
					if($H_length>30)
						{
						$e="home number must be 8 digit home number incorrect";
						
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	//check colony length						
					if($Co_length>30)
						{
					$e="colony name must be 20 digit colony name incorrect";
						
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	//check city length						
					if($City_length>30)
						{
						$e="city name must be 20 digit city name incorrect";
						
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	//check state length						
					if($S_length>20)
						{
						$e="state must be 20 digit state name incorrect";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	//check type length						
					if($T_length>10)
						{
						
						$e="type(home /office) must be 10 digit (home /office)name incorrect";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
					$query1="select * from address where email='$Email' ";
								mysqli_query($conn,$query1);
								$n= mysqli_affected_rows($conn);
								if($n!=0) 
								{
									$query2="UPDATE address 
									SET Clientname='$Clientname', Phone='$Phone', Pin_code='$Pin_code', Home_Number='$Home_Number', Colony='$Colony', City='$City' ,State='$State', Type='$Type' 
									WHERE email='$Email'";
	//run sql query										
								}
								else
								{
	//update sql querry				
									$query2="INSERT INTO address(email,Clientname,Phone,Pin_code,Home_Number,Colony,City,State,Type) 
								VALUES('$Email','$Clientname','$Phone','$Pin_code','$Home_Number','$Colony','$City','$State','$Type')"; 				
									
								}
									if(mysqli_query($conn,$query2))
									{  
										 echo "yes";
									}
									else 
										{
										echo mysqli_error();
										}
					}
							$query3="select * from address where email='$Email' ";
						 $data=mysqli_query($conn,$query3);
						 $total=mysqli_fetch_assoc($data);
							$Clientname=$total['Clientname'];
							  $Phone=$total['Phone'];
						       $Pin_code=$total['Pin_code'];
						       $Home_Number=$total['Home_Number'];
						       $Colony=$total['Colony'];
						       $City=$total['City'] ;
						       $State=$total['State'];
						       $Type=$total['Type'];	

				}
				else{
					$e="Please Login your Account";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
				}	
				
?>
<html>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
            <title>Buy Product</title>
				<!--linking part-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<script 
					src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.7/angular.min.js">
			</script>
				<style>
	

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
<!--breadcrumb-->			
						<div aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Buy Now </li>
								</ol>
						</div>
<!--container-->						
					<div class="container">
		<!--1row-->		<br>		
						<div class="row">
							<div class="col-lg-12 text-center">						
								<font  face="segoe script" color="white" size="5px"><p style="background-color: red ; ">You Can Carry old Address And Enter New Address</p></font>
							</div>
						</div>
						
		<!--2row-->				
						<div class="row">
			<!--col-->					
								<div class="col-lg-6 text-center">
			<!--use accordion--><br>					
							<div class="accordion" id="accordionExample">
				<!--card-->					
									<div class="card">
				<!--header-->	
									<div class="card-header" style="background-color: #f67280; " id="headingTwo">
										<button class="btn btn-link  "  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<font color="white" size="4px"><b>Old Address</b></font>
										</button>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				<!--body-->					
										<div class="card-body">
											<table class="table table-striped">
												<tr><td><label>State:</label></td><td><?php echo $State; ?></td></tr> 
												<tr><td><label>Clientname:</label></td><td><?php echo $Clientname;  ?></td></tr>
												<tr><td><label>City:</label></td><td><?php echo $City ;  ?></td></tr>
												<tr><td><label>	Phone Number:</label></td><td><?php echo $Phone;  ?></td></tr>
												<tr><td><label>colony</label></td><td><?php echo $Colony; ?></td></tr>
												<tr><td><label>Pincode:</label></td><td><?php echo $Pin_code;  ?></td></tr>
												<tr><td><label>House no:</label></td><td><?php echo $Home_Number; ?></td></tr>
												<tr><td><label>Address type:</label></td><td><?php echo $Type;?></td></tr>
											</table>
										</div>
									</div>
									</div>
							</div>
							</div>
		<!--col-->					
							<div class="col-lg-6 text-center">	
		<!--1st card-->			<br>
								<div class="accordion" id="accordionExample1">
								
								<div class="card">
			<!--header-->							
									<div class="card-header" style="background-color: #f67280; " id="headingOne">
											<button class="btn btn-link "  data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
												<font color="white" size="4px"><b>Add New Address</b></font>
											</button>
									</div>
									<div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample1">
			<!--body-->					
										<div class="card-body">
											<form method="POST" action="addaddress.php" enctype="multipart/form-data">
											<input type="text" class="form-control disable" value="India" disabled><br>
											<input type="text" class="form-control" name="Clientname" placeholder="Enter your clientname" required><br> 
											<input type="text" class="form-control" name="Phone" placeholder="Enter your Phone number without prefixes"required><br>
											<input type="text" class="form-control" name="Pin_code" placeholder="(0 to 9) 6 digit pincode"required><br>
											<input type="text" class="form-control" name="Home_Number" placeholder="Flat / house No./ Floor / Building"required><br>
											<input type="text" class="form-control" name="Colony" placeholder="Colony /Street / Locality"required><br>
											<input type="text" class="form-control" name="City" placeholder="City"required><br>
											<input type="text" class="form-control" name="State" placeholder="State"required><br>
											<h5 class="h5 text-center">Select Address type</h5>
											<input type="text" class="form-control" name="Type" placeholder="Home/Office"required><br>	
											<input type="submit" class="btn btn-primary  btn-block" name="Submit" value="Submit">
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					
					</div>
		<!--3row-->		<br>	
						<div class="row">
							<div class="col-lg-3" ></div>	
							<div class="col-lg-6 text-center" >
					<?php	echo"<a href='order.php?value1=$pid &value2=$ti_name & value=$quan' class='btn btn-primary btn-block'> Next</a>"; ?>
							</div>
							<div class="col-lg-3" ></div>
						</div>
					</div>				
					<br><br>
	

					
</body>	
</html>			