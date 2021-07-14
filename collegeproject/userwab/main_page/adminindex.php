<html>
<head>
	<title>Register</title>
<style>
		ul.f1 {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: ffcc99;
	
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
	

		<body>
			<ul class=f1>
			<li class=f2>
			<font color="red" size="6px" ><i class="fas fa-birthday-cake"></i></font>&nbsp &nbsp
			<font face="segoe script" size="5px" ><u>Cake For You</u></font>&nbsp &nbsp 
			</li>
			
			</ul>

			
		<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color:#f67280 ; ">			
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmenu" aria-controls="navbarmenu" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
									<font face="segoe script" size="3px">Order</font>
								</button>
			
					<div class="collapse navbar-collapse" id="navbarmenu">
								<div class="navbar-nav">
									<div class="dropdown">
	<!--home-->									
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="homemenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>Product</b></font>
										</a>
	<!--1home menu--->											
							<div class="dropdown-menu text-justify " aria-labelledby="homemenu">
								
								<div class="p-2 border-bottom border-dark ">
										<a class="dropdown-item " href="adminaddproduct.php">Add Product</a>
								</div>
								
								<div class="p-2 border-bottom border-dark ">
										<a class="dropdown-item " href="#">Delete Product</a>
								</div>
								
								<div class="p-2 border-bottom border-dark ">
										<a class="dropdown-item " href="#">Update Product</a>
								</div>
								
								
							</div>
									</div>
									
									<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>menu2</b></font>
										</a>
									
	<!--account setting-->				<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--l&s-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="l&s.php">m1</a> 
											</div>
						<!--manage address-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="#">M2</a>
											</div>
											
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="logout.php">m3</a>
											</div>
						<!--review-->
						<!--signout-->					
										</div>
									</div>
									
									<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>menu</b></font>
										</a>
									
	<!--sofas item-->				<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--fabric sofas-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="#common.php?value1=fabric sofas & value2=sofas">m1</a> 
											</div>
						<!--Wooden sofas-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="#common.php?value1=wooden sofas & value2=sofas">m2</a>
											</div>
						<!--3 seater sofas-->									
											<div class="p-2 border-bottom border-dark ">		
												<a class="dropdown-item" href="#common.php?value1=3 seater sofas & value2=sofas">m3</a>
											</div>
						<!--2 seater sofas-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="#common.php?value1=2 seater sofas & value2=sofas">m4</a>
											</div>
						
									</div>
	<!--close-->			</div>
	<!--4Living-->											
									<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>menu</b></font>
										</a>
									
	<!--living item-->				<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--tv unit-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="#common.php?value1=tv unit & value2=otheritem">m1</a> 
											</div>
						<!--tables-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="#common.php?value1=living room table & value2=table1">m2</a>
											</div>
						<!--chairs-->									
											<div class="p-2 border-bottom border-dark ">		
												<a class="dropdown-item" href="#common.php?value1=living room chair & value2=chair">m3</a>
											</div>
						<!--divans-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="#common.php?value1=divans & value2=otheritem">m4</a>
											</div>
						

									</div>
				<!--close-->	</div>
	<!--5bedroomitem-->
								<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>menu</b></font>
										</a>
									<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--beds-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="#common.php?value1= bed room beds & value2=beds">menu</a> 
											</div>
						<!--tables-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="#common.php?value1=bed room table & value2=table1">menu</a>
											</div>
					
					
									</div>
				<!--close-->	</div>
				
	<!--6Dining-->
								<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>menu</b></font>
										</a>
									<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--tables-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="#common.php?value1=dining room table & value2=table1">m</a>
											</div>
						<!--chairs-->									
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="#common.php?value1=kitchen trolley & value2=otheritem">m</a>
											</div>
											<div class="p-2 border-bottom border-dark ">		
												<a class="dropdown-item" href="#common.php?value1=dining room chair & value2=chair"> m</a>
											</div>
						<!--beds-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="#common.php?value1=kitchen cabinate & value2=otheritem">m</a> 
											</div>
						<!--wardrobes-->					
						<!--storage-->					
											
									</div>
				<!--close-->	</div>
										
								</div>
							</div>	
							
								
						</nav>

</body>
</html>