<?php
session_start();
error_reporting(0);
//connect to DBMS
				$Email=$_SESSION['Email'];
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="shop";
				
				$conn=mysqli_connect($server,$user,$pass,$dbname);
	//server connect					
						if(!$conn)
							{
							$e="not connect with server";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							}
						else 
							{
							 "connect with server";
							}
	//take value from link		
					$id=$_GET['value1'];
					$name=$_GET['value2'];	
					$select=1;
				
					if($id!='')
					{
						$result=mysqli_query($conn,"select * from product where product_id='$id' ");
						$row = mysqli_fetch_array($result);
							 $name=$row['name'];
							 $cost=$row['cost'];
							 $data=$row['data'];
							 $title=$row['title'];
							 $photo1=$row['photo1'];
							 $photo2=$row['photo2'];
							 $t1=str_replace('.', '.<br>*', $data);
					
					}

					if(isset($_REQUEST['Save']))
					{					
						if($_REQUEST['select']!="")
						{
							
							 $select=$_REQUEST['select'];
							
						}
					}
//add to card					
				if($Email!=''){
					if(isset($_REQUEST['addtocard']))
						{					
						
						
							
//here check item present or not						
						$r=mysqli_query($conn,"select * from card where product_id='$id' and email='$Email' and name='$name' ");
						$row1 = mysqli_affected_rows($conn);
						
						if($row1==0)
						{
							 mysqli_query($conn,"INSERT INTO card(name,email,product_id,cost,title,data,photo1,photo2) 
									VALUES('$name','$Email','$id','$cost','$title','$data' , '$photo1' , '$photo2' ) ");
						}
						
						}	
				}
				else
				{
					$e="Please Login your account";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;
				}
					

?>
<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Product</title>
			<!--link-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<!--font awesome-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">				
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
									<li class="breadcrumb-item active" aria-current="page">Product Detail</li>
								</ol>
						</div>
			
		
		
		
		<!--contaner-->				
						<div class="container">
				<!--row-->	<br>
							<div class="row">
								<div class="col-lg-12 text-center">
									<font face="segoe script"  size="6px"><u><?php echo $name; ?></u></font>
								</div>
							</div>
				<!--row-->	<br>
							<div class="row">
								<div class="col-lg-6 text-center">
										<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<!--indicator-->			
											<ol class="carousel-indicators">
												<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
												<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
												
											</ol>
											
											<div class="carousel-inner">
												<div class="carousel-item active">
											<?php echo "<img src='$photo1' class='d-block w-100' alt='...' height='400px'>";  ?>
												</div>
											
												<div class="carousel-item">
											<?php echo "<img src='$photo2' class='d-block w-100' alt='...' height='400px'>";  ?>			
												</div>
							
												
											</div>
											
												<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
														<i class="fa fa-backward bg-dark" ></i>
														<i class="sr-only">Previous</i>
												</a>
							
												<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
														<i class="fa fa-forward bg-dark" ></i>
														<i class="sr-only">Next</i>
												</a>
										</div>
								</div>
								<div class="col-lg-6 text-center">
									<label><font size="5px" color="red"><u>Details of Products Of Product</u></font></label><br>
									<div class="text-left ml-4">	
								<font size="4px"><label>*Cost Of Product:-</label>&nbsp&nbsp
									<label><?php echo $cost; ?></label><br>
				
									<label>*Description of Product:-</label>&nbsp&nbsp<br>
									<label><?php echo $t1; ?></label>
								</font><br>
								<font size="4px"><b>Quantity</b></font>
								<?php echo "<form name='order' method='POST' action='productcommonpage.php?value1=$id &value2=$name'>";?>
								<select name="select" class="form-control">
												<option name="1" value="1">1</option>
												<option name="2" value="2">2</option>
												<option name="3" value="3">3</option>
												<option name="4" value="4">4</option>
												<option name="5" value="5">5</option>
												<option name="6" value="6">6</option>
												<option name="7" value="7">7</option>
												<option name="8" value="8">8</option>
												<option name="9" value="9">9</option>
												<option name="10" value="10">10</option>
												
								</select>
								<br>
								<div class="text-center">
									<input type="submit" name="Save" class="btn btn-primary" value="Save Quantity">
								</form>	
								</div>
								</div>
								<br>
								</div>
							</div>
				<!--row-->				
							<div class="row">
									<div class="col-lg-6 "></div>
									<div class="col-lg-3 text-center">	
						<?php
								if($Email!=''){
								echo "<form name='order'  method='POST'>";
								
								echo "<button type='submit' name='addtocard'  class='btn btn-primary btn-lg mr-4'>
								<i class='fa fa-shopping-cart mr-2'></i>Add To Card</button>";
								echo "</form>";
								}
						?>			</div>
									<div class="col-lg-3 text-center">
						<?php	
							if($Email!='')
							{	
						echo"<a href='addaddress.php?value1=$id & value2=$name & value3=$select' class='btn btn-primary btn-lg ml-4'>
								<i class='fa fa-sign-in-alt mr-3'></i>Buy Now</a>";
							}
							else{
								$e="Please login your account";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;
							}
						?>
									</div>		
							</div>
				
				<!--jumbortan--><br><br>
								<div class="jumbotron">
									<div class="row">
										<div class="col-lg-12 text-center">	
										<font size="5px"><b>Customer Questions & Answers</b></font><br><br>
										<font size="3px"><b>For More Info Call </b></font><br>
										<font color="red"><p><b>+91-9672277000</b><p></font>
										</div>	
									</div>
								</div>
						
											<?php
				
								$result=mysqli_query($conn,"select * from product where name='$name' ");
								$n=mysqli_affected_rows($conn);
								for($i=0;$i<$n;)
								{
								echo "<div class='row'>";
								for($j=0;$j<4;$j++)
								{
									if($i==$n)
									{   break;     }
								echo "<div class='col-lg-4 text-center'>";
								echo "<br>";
								echo "<div class='card' >";
										$row = mysqli_fetch_array($result);
										 $photo=$row['photo1'];
									echo "<img src='$photo' class='card-img-top' height='200px' width='150px'>";
									echo "<div class='card-body'>";
										 $cost=$row['cost'];
										 $product_id=$row['product_id'];
										 $name1=$row['name'];
										 echo "<font size='4px'><b>";
										 echo "Product name&nbsp:&nbsp&nbsp&nbsp".$name1;
										 echo "<br>";
										 echo "Cost&nbsp:&nbsp&nbsp&nbsp".$cost;
										 echo "<br><br>";										
										 echo "<a href='productcommonpage.php?value1=$product_id & value2=$name' class='btn btn-primary'>See Full Details </a>";
										echo "</u></font>";
									
									echo "</div>";
									echo "</div>";
									echo "</div>";
									$i++;
								}
							
								}
								
							?>			
						
						
						
						
						
						
						
						
						</div>
						
	<br><br>
							
						
</body>
</html>
