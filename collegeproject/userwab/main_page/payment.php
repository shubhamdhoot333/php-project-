<?php
session_start();
error_reporting(0);
//connect to datatbase		
						$Email=$_SESSION['Email'];
	//link value take				
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
							
						if($Email!='')
						{
						 $pid=$_GET['value1'];
						$quan=$_GET['value2'];	
						$email=$_GET['value3'];
						$name=$_GET['value4'];
						$amt=$_GET['value5'];
						}	
						
						if(isset($_POST['Pay']))
						{
						    $result1=mysqli_query($conn,"select * from product where product_id='$pid' ");
						$row = mysqli_fetch_array($result1);
							$name=$row['name'];
							$cost=$row['cost'];
							
							$data=$row['data'];
							$photo=$row['photo1'];
//user& address info							 
						$result2=mysqli_query($conn,"select * from address where email='$Email' ");
						$row1 = mysqli_fetch_array($result2);
							 $hm=$row1['Home_Number'];
							 $co=$row1['Colony'];
							 $city=$row1['City'];
							 $sta=$row1['State'];
							 $phone=$row1['Phone'];
							 $user=$row1['Clientname'];
							 $pin=$row1['Pin_code'];
							 $email=$row1['email'];
							 $ta=$hm;
							 $ta.='  ,';
							 $ta.=$co;
							 $ta.='  ,';
							 $ta.=$city;
							 $ta.='  ,';
							 $ta.=$sta;
							 $ta.='  ,';
							 $d =date('Y-m-d');
//data insert							
                            $query3="INSERT INTO order_table(product_id , name,date1,address,quantity,cost,stage,email,phone ,photo1,uname) 
							VALUES('$pid','$name','$d','$ta','$quan','$amt','','$email','$phone', '$photo' ,'$user')"; 
					if(mysqli_query($conn,$query3))
						{  
						    $e1="you are successfully submit your order";
						echo '<script type="text/javascript">alert("congress : ' . $e1 . '")</script>';
						
						
						}
						else 
						{
							 mysqli_error($conn);
						}
					
						}
?>
<html>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
            <title>Payment</title>
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
									<li class="breadcrumb-item active" aria-current="page">Payment </li>
								</ol>
						</div>
	<!--container-->					
						<div class="container">
				<!--1row-->				
								<div class="row">
								<div class="col-lg-4"></div>
								<div class="col-lg-4 text-center">
									<font size="6px" face="segoe script" color='red' ><u>Payment Option </u></font><br>
									<font size="5px"><u>Cash on Delivery</u></font>
								</div>
								<div class="col-lg-4"></div>
								</div>			
				<!--2row-->		<br>
								<div class="row">
								    <div class="col-lg-4"></div>
								    <div class="col-lg-4 text-center">
									<?php	echo "<form name='payment' method='POST' action='payment.php?value1=$pid & value2=$quan & value3=$email & value4=$title & value5=$amt' enctype='multipart/form-data'>"; ?>
									<font size="5px">
									cost<?php echo $amt ;?></font><br><br>
									
										<input type="submit" class="btn btn-md btn-block btn-primary" name="Pay" value="Submit order">
								     	</form>
								</div>
								<div class="col-lg-4">
								
								</div>
								</div>				
								
				<!--3 row-->	
				            <br>
								<div class="row">
								     <div class="col-lg-4"></div>
								      <div class="col-lg-4 text-center">
								           <a href="index.php" class="btn btn-primary" role="button">Go To Home Page</a>
								        </div>
								        <div class="col-lg-4"></div>
				                </div>        
</body>
</html>						