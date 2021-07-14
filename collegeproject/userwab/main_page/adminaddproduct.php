<?php
	//connect to DBMS			
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
							echo "connect with server";
							}
							
		//submit value					
							if(isset($_REQUEST['Submit']))
						{
		//check value not null					
							if($_REQUEST['title']=="" or $_REQUEST['id']=="" or $_REQUEST['name']=="" or $_REQUEST['cost']==""  or $_REQUEST['data']=="" )
							{
								$e="Please enter some value"; 
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
							}
		//show all name					
								 $title=$_REQUEST['title'];
								 $id=$_REQUEST['id'];
								 $name=$_REQUEST['name'];
								 $cost=$_REQUEST['cost'];
								 
								 $data=$_REQUEST['data'];
								 

		//check title length						
								$titlelength=strlen($title);
								if($titlelength>50)
								{
									$e="title must be less then 20 character, title incorrect";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		//check id length						
								$idlength=strlen($id);
								if($idlength>10)
								{
									$e="product id  must be less then 10 digit id incorrect";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		//check name length						
								$namelength=strlen($name);
								if($namelength>50)
								{
									$e="product name must be less then 20 character name incorrect";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		//check cost length						
								$costlength=strlen($cost);
								if($costlength>10)
								{
									$e="cost must be less then 10 digit cost incorrect";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		// check wood length							
							
		//check text 			
								$datalength=strlen($data);
								if($datalength>250)
								{
									$e="description must be less then 250 character";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
								
	//check product exist or not
							if($id!==" ")
								{
									$result = "select * from product where id='$id'";
									mysqli_query($conn,$result);
										$num_row=mysqli_affected_rows($conn);
				
										if($num_row>=1)
										{
										$e="product exist";
										echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
										die;															
										}
								}	
								
								
								if($_FILES['file1']=="" or $_FILES['file2']=="")
								{
									die;								
								}
	//file 1				
						$filename = $_FILES["file1"]["name"];
						$tempname = $_FILES["file1"]["tmp_name"];
						$filetype = $_FILES["file1"]["type"];
					if($filetype=="image/jpeg" or $filetype=="image/jpg" or $filetype=="image/png")
					{
						$folder = "../image/".$filename;
						if(move_uploaded_file($tempname,$folder))
						{
						"file upload<br>";
						}
					else{
						$e="image1 cannot upload";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						
						}	
					}	
	//file2		
						$filename = $_FILES["file2"]["name"];
						$tempname = $_FILES["file2"]["tmp_name"];
						$filetype = $_FILES["file2"]["type"];
					if($filetype=="image/jpeg" or $filetype=="image/jpg" or $filetype=="image/png")
					{
						$folder1 = "../image/".$filename;
						if(move_uploaded_file($tempname,$folder1))
						{
						 "file upload<br>";
						}
					else{
						$e="image2 cannot upload";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}	
					}
					
								
								
		//run sql query					
						$query="INSERT INTO product(title,name,product_id,cost,data,photo1,photo2) 
													VALUES('$title', '$name' ,'$id', '$cost' , '$data' , '$folder' , '$folder1' )"; 
					if(mysqli_query($conn,$query))
						{  
							header('location:adminaddproduct.php');
							echo "registration succesfull";
						}
					else 
						{
								echo mysqli_error();
						}	
						
						}	
							
						mysqli_close($conn);

?>	

<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Add Product</title>
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

</head>
<body>
		<!--1 navbar-->				
							<ul class=f1>
			<li class=f2>
			<font color="red" size="6px" ><i class="fas fa-birthday-cake"></i></font>&nbsp &nbsp
			<font face="segoe script" size="5px" ><u>Cake For You</u></font>&nbsp &nbsp 
			</li>
			
			</ul>
		<!--container-->
							<div class="container">
								<br><br>
								<form name="add" method="POST" action="adminaddproduct.php" enctype="multipart/form-data">
						<!--row-->		
									<div class="row">
										<div class="col-lg-12">
											<legend align="center"><font face="segoe script">Product Add From </font></legend>
										</div>
									</div>	
						<!--2row-->			
									<div class="row">
										<div class="col-lg-6">
												<label> Product Title  </label>
												<input type="text" class="form-control" name="title" placeholder="Enter product title" required>
										</div>
										
										<div class="col-lg-6">
												<label> Product Id </label>
												<input type="number" class="form-control" name="id" placeholder="Enter product Id" required>
										</div>
								
									</div>
						<!--3row-->			
									<div class="row">
										<div class="col-lg-6">
												<label> Product Name </label>
												<input type="text" class="form-control" name="name" placeholder="Enter product name" required>
										</div>
										
										<div class="col-lg-6">
												<label> Product Cost </label>
												<input type="number" class="form-control" name="cost" placeholder="Enter product cost" required>
										</div>
								
									</div>
						<!--4row-->			
									<div class="row">
										<div class="col-lg-6">
												<label> Product image  1</label>
												<input type="file" class="form-control" name="file1" placeholder="choose product file"  required>
										</div>
										
										<div class="col-lg-6">
												<label> Product image  2 </label>
												<input type="file" class="form-control" name="file2" placeholder="choose product file"  required>
										</div>
								
									</div>
						<!--5row-->			
									<div class="row">
										<div class="col-lg-3"></div>
										<div class="col-lg-6">
													<label> Product Description </label>
													 <textarea class="form-control" name="data" rows="4" placeholder="something special word..."></textarea>	
										</div>
										<div class="col-lg-3">
										<br><br><font color="red">*1.it in containe height*width*length
										<br>2.explain some product attribute which through product show beautiful.
										</font>
										</div>
									</div>
									
						<!--5row-->	<br>		
									<div class="row">
										<div class="col-lg-4"></div>
										<div class="col-lg-4 text-center">
										<input type="submit" class="btn btn-primary btn-md btn-block" name="Submit" value="Submit">	
										</div>
										<div class="col-lg-4"></div>
									</div>	
								</form>	
							</div>		
</body>
</html>							