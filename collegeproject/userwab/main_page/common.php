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
							 "connect with server";
							}
	//take value from link		
					$n1=$_GET['value1'];
						
								

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
									<li class="breadcrumb-item active" aria-current="page"><?php echo $n1;?></li>
								</ol>
						</div>
						<br>
						<div class="container">
		<!--row-->					
							<div class="row">
								<div class="col-lg-12 text-center">
								<font size="6px" face="segoe script" color="red"><u><?php echo $n1; ?></u></font>
								</div>
							</div>		
		<!--row-->				
							<?php
								if($n1!=='')
								{
								$result=mysqli_query($conn,"select * from product where title='$n1' ");
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
										 $n2=$row['name'];
										 $n1;
										 echo "<font size='4px'><b>";
										 echo "Product name&nbsp:&nbsp&nbsp&nbsp".$n2;
										 echo "<br>";
										 echo "Cost&nbsp:&nbsp&nbsp&nbsp".$cost;
										 echo "<br><br>";										
										 echo "<a href='productcommonpage.php?value1=$product_id & value2=$n2' class='btn btn-primary'>See Full Details </a>";
										echo "</u></font>";
									
									echo "</div>";
									echo "</div>";
									echo "</div>";
									$i++;
								}
							
								}
								}
							?>			
							</div>		
						
						</b>
						</div>	
						
					
						
						
</body>
</html>						