<?php
session_start();
error_reporting(0);
//connect to datatbase		
				$Email=$_SESSION['Email'];
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="shop";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
					if(!$conn)
						{
						 "not connect with server ";
						 "<br>";
						}
					else 
						{
						 "connect with server";
						}
						
//get product value	
						if($Email!='')
						{
						$pid=$_GET['value1'];
						$ti_name=$_GET['value2'];	
						$quan=$_GET['value'];
													
				if($pid!='')
					{
						$result=mysqli_query($conn,"select * from product where product_id='$pid' ");
						$row = mysqli_fetch_array($result);
							 $name=$row['name'];
							 $cost=$row['cost'];
						
							 $data=$row['data'];
							 $photo=$row['photo1'];
							 $a=$pid;
					}
						}
				if($Email!='')
					{
						$result=mysqli_query($conn,"select * from address where email='$Email' ");
						$row = mysqli_fetch_array($result);
							 $uname=$row['Clientname'];
							 $phone=$row['Phone'];
							 $hnu=$row['Home_Number'];
							 $co=$row['Colony'];
							 $city=$row['City'];
							 $state=$row['State'];
	
					}
						
?>						


<html>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
            <title>Order stage</title>
				<!--linking part-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>
	
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
<body>
<!--1 navbar-->				
						
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
									<li class="breadcrumb-item active" aria-current="page">Order stage </li>
								</ol>
						</div>
						<div class="jumbotron bg-light">
							<div class="container">
				<!--1row-->				
								<div class="row">
								<div class="col-lg-4"></div>
								<div class="col-lg-4 text-center">
								<font size="5px" face="segoe script"  color="white"style="background-color: red; ">See your details </font>
								</div>
								<div class="col-lg-4"></div>
								</div>
				<!--2row-->		<br><br>		
								<div class="row">
									<div class="col-lg-4 text-center">
										<b><font face="segoe script"color="red" size="5px">Product Detail</font></b>
											<br>
										
								<?php  echo "<img src='$photo' height='150px' width='150px'>";?>
									<br><br>
										<table class="table table-striped">
											<tr><td><label>Name:</label></td><td><?php echo $name;  ?></td></tr>
											
											<tr><td><label>Quantity</label></td><td><?php echo $quan;?>	
											</td></tr>
											<tr><td><label>Data</label></td><td><?php echo $data; ?></td></tr>
											
										</table>
										</div>

									
									<div class="col-lg-4 text-center">
											<b><font face="segoe script"color="red" size="5px">User Detail</font></b>
											<br>
										
										<table class="table table-striped">
											<tr><td><label>Order Data</label></td><td><?php echo date('Y-m-d');?></td></tr>
											<b><tr><td><label>Username</label></td><td><?php echo $uname; ?></td></tr> 
											<tr><td><label>Email:</label></td><td><?php echo $Email; ?></td></tr>
											<tr><td><label>Phone:</label></td><td><?php echo $phone;  ?></td></tr>
											<tr><td><label>	Address:</label></td><td><?php echo $hnu;echo "<br>";echo $co;echo "<br>"; echo $city; echo"<br>"; echo $state; ?></td></tr>
											</b>
										</table>
										</div>
								
									
									<div class="col-lg-4 text-center">
										<b><font face="segoe script"color="red" size="5px">Order Detail</font></b><br>	
											
											<table class="table table-striped">
											<tr><td><label>Product Id</label></td><td><?php echo $pid; ?></td></tr>											
											<tr><td><label>Name</label></td><td><?php echo $ti_name;  ?></td></tr> 
											<tr><td><label>Total cost</label></td><td> <?php echo $t=$cost*$quan;?></td></tr>
											
											</table>
									</div>
								</div>
								<div class="row">
								<div class="col-lg-4"></div>
								<div class="col-lg-4">
									<?php echo"<a href='payment.php?value1=$pid & value2=$quan & value3=$Email & value4=$ti_name & value5=$t' class='btn btn-primary btn-block' >Pay Now</a>"; ?>
								</div>
								<div class="col-lg-4"></div>
							
							</div>
						</div>
</body>
</html>						