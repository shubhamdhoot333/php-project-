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
						echo "not connect with server ";
						echo "<br>";
						}
					else 
						{
						 "connect with server";
						}
						
						
						if($Email!='')
						{
						
						if(isset($_POST['submit']))
						{
							if($_POST['text']=="" )
							{
							die;
							}
	
							$text=$_POST['text'];
							$text_length=strlen($text);							
						
							if($text_length>255)
							{
								$e="text must be 255 digit ";
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
							}
							
							$result = "select * from review where email='$Email'";
							mysqli_query($conn,$result);
							$num_row=mysqli_affected_rows($conn);
				
							if($num_row>=1)
							{
							$e=" your review is already exist";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;															
							}
					  					
							$query="INSERT INTO review(email,story,stage) 
									VALUES('$Email' ,'$text',' ')"; 
					if(mysqli_query($conn,$query))
						{  
						header('location:index.php');
						}
					else 
						{
							 mysqli_error($conn);
						}
				
			}
					}
					else
					{
						$e=" Please login your account";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						
					}						
					mysqli_close($conn);
						
					
						
						
?>						

<html>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
            <title>Review</title>
				<!--linking part-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<!--font awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
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
									<li class="breadcrumb-item active" aria-current="page">Review </li>
								</ol>
						</div>	
				<div class="container">
							
						<font face="segoe script" size="5px" ><center>Enter your review here</center></font>	
							<form method="post" action="review.php" >
								
								 <textarea class="form-control" aria-label="With textarea" name="text" ></textarea>
									<font color="red">	<center><p>*255 character limit<p></center></font>
										<br><br>
								<center>		
								<input type="submit" class="btn btn-md  btn-primary" name="submit" >		
								</center>
							</form>
				</div>

</body>

</html>						