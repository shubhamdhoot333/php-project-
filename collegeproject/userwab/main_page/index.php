<?php
session_start();
error_reporting(0);
$Email=$_SESSION['Email'];
include 'mainpagephp.php';
?>

<html>
	<head>
			<title>Index</title>
	
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
	

	
table {
  width:50%;
	margin-left:5%;
  
}
table, td {
  border: 1px black;
  
}
 td {
  padding: 50px;
  text-align: left;
}
center.q1{
background-color:red;
margin-left:40%;
margin-right:40%;
}

center.q2{
background-color:red;
}
body{
background-color:ffcc99;
}

footer {
  background-color:#f67280;
  padding: 10px;
  text-align: center;
  color: white;
}

</style>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<!--font awesome-->
	<!--font awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	</head>
	
	<body  >
	<!--nav bar-->
		
		<ul class=f1>
			<li class=f2>
			<font color="red" size="6px" ><i class="fas fa-birthday-cake"></i></font>&nbsp &nbsp
			<font face="segoe script" size="5px" ><u>Cake For You</u></font>&nbsp &nbsp 
			</li>
			
		</ul>
		
		<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #f67280; " >			
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmenu" aria-controls="navbarmenu" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
									<font face="segoe script" size="3px">Menu</font>
								</button>
			
					<div class="collapse navbar-collapse" id="navbarmenu">
								<div class="navbar-nav">
									<div class="dropdown">
	<!--home-->									
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="homemenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>Home</b></font>
										</a>
	<!--1home menu--->											
							<div class="dropdown-menu text-justify " aria-labelledby="homemenu">
								
								<div class="p-2 border-bottom border-dark ">
										<a class="dropdown-item " href="profile.php">Profile</a>
								</div>
								
								<div class="p-2 border-bottom border-dark ">
										<a class="dropdown-item " href="customer_review.php">Customer review </a>
								</div>
								
								<div class="p-2 border-bottom border-dark ">
										<a class="dropdown-item " href="review.php">Review</a>
								</div>
								
								
							</div>
									</div>
									
									<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>Setting</b></font>
										</a>
									
	<!--account setting-->				<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--l&s-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="l&s.php">Login & Security</a> 
											</div>
						<!--manage address-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="manageaddress.php">Manage Address</a>
											</div>
											
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="logout.php">Logout</a>
											</div>
						<!--review-->
						<!--signout-->					
										</div>
									</div>
									
									<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>Cake</b></font>
										</a>
									
	<!--sofas item-->				<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--fabric sofas-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="common.php?value1=Birthday cake ">Birthday cake</a> 
											</div>
						<!--Wooden sofas-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="common.php?value1=Anniversary cake ">Anniversary</a>
											</div>
						<!--3 seater sofas-->									
											<div class="p-2 border-bottom border-dark ">		
												<a class="dropdown-item" href="common.php?value1=Congratulations cake">Congratulations</a>
											</div>
						<!--2 seater sofas-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="common.php?value1=Wedding cake">Wedding cake</a>
											</div>
						
									</div>
	<!--close-->			</div>
	<!--4Living-->											
									<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>Pastries</b></font>
										</a>
									
	<!--living item-->				<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--tv unit-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="common.php?value1= Red Velvet Pastry">Red Velvet Pastry</a> 
											</div>
						<!--tables-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="common.php?value1=Chocolate Cream Pastry">Chocolate Cream Pastry</a>
											</div>
						<!--chairs-->									
											<div class="p-2 border-bottom border-dark ">		
												<a class="dropdown-item" href="common.php?value1=Black forest Pastry">Black forest Pastry</a>
											</div>
						<!--divans-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="common.php?value1=Butter scotch Pastry">Butter scotch Pastry</a>
											</div>
						

									</div>
				<!--close-->	</div>
	<!--5bedroomitem-->
								<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>Contact us</b></font>
										</a>
									<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--beds-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="company.php">Company information</a> 
											</div>
						<!--tables-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="customer.php">Customer care</a>
											</div>
					
					
									</div>
				<!--close-->	</div>
				
	<!--6Dining-->
								<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>Order</b></font>
										</a>
									<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--tables-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="card.php">Add to Cart</a>
											</div>
						<!--chairs-->									
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="currentorder.php">Current order</a>
											</div>
											<div class="p-2 border-bottom border-dark ">		
												<a class="dropdown-item" href="pastorder.php"> Past Order</a>
											</div>
						<!--beds-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="cancleorder.php">Cancel order</a> 
											</div>
						<!--wardrobes-->					
						<!--storage-->					
											
									</div>
				<!--close-->	</div>
										
								</div>
							</div>	
							
								<?php 
									if($Email=='')	
									{		
										echo "<div>";
										echo "<a href='login.php'><font color='white' size='4px' class='mr-3'><i class='fa fa-user fa-lg fa-fw'></i>Login</font></i></a>";
										echo "</div>";	
									}
									else
									{
										 $result=mysqli_query($conn, "select * from  user  where email like '$Email' ");
										$total=mysqli_fetch_assoc($result);
										$Username=$total['name'];
										echo "<label><font size='4px' color='white'><u>";
										echo "Welcome &nbsp" .$Username;
										echo "</font></u></label>";
									}
									?>
							
						</nav>
		
		
		
		<br><br>
		
		<div class="container-field">
			<!--3 slide show-->					
								<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
							<!--indicator-->			
											<ol class="carousel-indicators">
												<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
												<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
												<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
											</ol>
																					
											<div class="carousel-inner">
												<div class="carousel-item active">
													<center><img class="d-block" src="../image/c1.jpg " height="60%" width="40%"  alt="First slide"></center>
												</div>
											
												<div class="carousel-item">
														<center><img class="d-block" src="../image/c4.jpg" height="60%" width="40%"  alt="second slide"></center>
												</div>
							
												<div class="carousel-item">
														<center><img class="d-block" src="../image/c3.jpg" height="60%" width="40%"  alt="thired slide"></center>
												</div>
											</div>
											
												<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
													<h2 class="h2"><i class="fa fa-arrow-circle-left bg-dark" ></i></h2>
														<i class="sr-only">Previous</i>
												</a>
							
												<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
														<h2 class="h2"><i class="fa fa-arrow-circle-right bg-dark" ></i></h2>
														<i class="sr-only">Next</i>
												</a>
								</div>
			<br><br>
		</div>
		<h3><font face="segoe script" size="5px" color="white" ><center class="q1">Cakes by Flavor </center></font>   </h3>
<table>
  <tr>
    <td><a href="common.php?value1=Chocolate cake"><img src="../image/c3.jpg" height="200px" width="200px">
	<font face="segoe script" size="4px" color="white"><b><center class="q2">Chocolate cake</b> </center></font></a></td>
    <td><a href="common.php?value1=Red Velvet cake"><img src="../image/c1.jpg" height="200px" width="200px">
	<font face="segoe script" size="4px" color="white"><b><center class="q2">Red Velvet cake</b> </center></font></a></td>
    <td> <a href="common.php?value1=Truffle cake"><img src="../image/c4.jpg" height="200px" width="200px"> 
	<font face="segoe script" size="4px"  color="white"><b><center class="q2">Truffle cake</b> </center></font> </a></td>
	<td> <a href="common.php?value1=Butterscotch cake"> <img src="../image/c5.jpg" height="200px" width="200px"> 
	<font face="segoe script" size="4px" color="white" ><b><center class="q2">Butterscotch cake</b> </center></font></a></td>
  </tr>
 </table>
		<h3><font face="segoe script" size="5px" color="white" ><center class="q1">Best Seller Cakes </center></font>   </h3>		
<table> 
  <tr>
    <td> <a href="common.php?value1=Black Forest cake"><img src="../image/c6.jpg" height="200px" width="200px">
	<font face="segoe script" size="4px"  color="white"><b><center class="q2">Black Forest cake</b> </center></font> </a> </td>
    <td> <a href="common.php?value1=Fruit cake"><img src="../image/c7.jpg" height="200px" width="200px"> 
	<font face="segoe script" size="4px" color="white"><b><center class="q2">Fruit cake</b> </center></font> </a> </td>
    <td><a href="common.php?value1=Oreo cake"> <img src="../image/c8.jpg" height="200px" width="200px"> 
	<font face="segoe script" size="4px" color="white" ><b><center class="q2">Oreo cake</b> </center></font></a>  </td>
	<td><a href="common.php?value1=Blueberry cake"> <img src="../image/c9.jpg" height="200px" width="200px"> 
	<font face="segoe script" size="4px"  color="white"><b><center class="q2">Blueberry cake</b> </center></font></a>  </td>
  </tr>
</table>

<h3><font face="segoe script" size="5px" color="white"><center class="q1">Best Seller Cakes </center></font>   </h3>
<table>
  <tr>
    <td><a href="common.php?value1=Designer cake"> <img src="../image/c10.jpg" height="200px" width="200px">
	<font face="segoe script" size="4px" color="white"><b><center class="q2">Designer cake</b> </center></font></a></td>
   
   <td><a href="common.php?value1=Baby cake"> <img src="../image/c11.jpg" height="200px" width="200px">
	<font face="segoe script" size="4px" color="white" ><b><center class="q2">Baby cake</b> </center></font></a></td>

    <td><a href="common.php?value1=multi tier cake"> <img src="../image/c12.jpg" height="200px" width="200px"> 
	<font face="segoe script" size="4px" color="white" ><b><center class="q2">multi tier cake</b> </center></font></a> </td>
	
	<td><a href="common.php?value1=cup cake"> <img src="../image/c13.jpg" height="200px" width="200px"> 
	<font face="segoe script" size="4px" color="white" ><b><center class="q2">cup cake</center> </b> </center></font> </a> </td>
  </tr>
 </table>
		<h3><font face="segoe script" size="5px" color="white" ><center class="q1">Special Cakes </center></font>   </h3>		
<table> 
  <tr>
    
	<td><a href="common.php?value1=Birthday cake"> <img src="../image/c14.jpg" height="200px" width="200px">
	<font face="segoe script" size="4px" color="white" ><b><center class="q2"> Birthday cake</b> </center></font> </a> </td>
    
	<td><a href="common.php?value1=Anniversary"> <img src="../image/c15.jpg" height="200px" width="200px"> 
	<font face="segoe script" size="4px" color="white"><b><center class="q2">Anniversary</b> </center></font> </a> </td>
	
    <td><a href="common.php?value1=Congratulations"> <img src="../image/c16.jpg" height="200px" width="200px"> 
	<font face="segoe script" size="4px" color="white"><b><center class="q2">Congratulations</b> </center></font> </a> </td>
	
	<td><a href="common.php?value1=Wedding cake"> <img src="../image/c17.jpg" height="200px" width="200px"> 
	<font face="segoe script" size="4px" color="white"><b><center class="q2">Wedding cake</b> </center></font> </a> </td>
  </tr>
</table>

		
	
	</body>
	<footer>
	<br>
		<font face="segoe script" size="5px" color="white" ><b><u>Cake_For_You.com</u></b></font><br><br>
		<font size="4px" color="white" ><b><p>
		<a href="index.php" class="btn btn-light"><b>Home</b></a>  &nbsp &nbsp &nbsp 
		<a href="company.php"class="btn btn-light"><b>Shop</b></a> &nbsp &nbsp &nbsp 
		<a href="company.php" class="btn btn-light"><b>About</b></a> &nbsp &nbsp &nbsp 
		<a href="customer.php" class="btn btn-light"><b>Contact</b></a></b></p></font>
		<br><font size="4px" color="white" ><b><p><i class='far fa-save' style='font-size:24px'></i>  &nbsp &nbsp &nbsp 
						<i class='far fa-envelope-open' style='font-size:24px'></i> &nbsp &nbsp &nbsp 
						<i class='fab fa-facebook' style='font-size:24px'></i>&nbsp &nbsp &nbsp 
						<i class='fas fa-dove' style='font-size:24px'></i> &nbsp &nbsp &nbsp 
						<i class="fa fa-phone fa-lg fa-fw"></i></b></p></font>
						<br><br>
						<hr color="black" width="700px" ></hr>
		<font size="3px" color="white" ><p>copyright <i class='far fa-copyright' style='font-size:12px'></i>2021 All right reserved</p></font>
						
	
	
	</footer>
	

</html>