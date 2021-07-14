<?php
error_reporting(0);
	//1 connect to datatbase		
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="shop";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
					if(!$conn)
						{
						$e="not connect with server "; 
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
					else 
						{
						"connect with server";
												}
	
	
	//2data code		
					if(isset($_POST['Submit']))
						{
	
	//check value not empty		
							if($_POST['Username']=="" or $_POST['Email']=="" or $_POST['Phone']=="" or $_POST['Password']=="")
							{
							die;
							}
	
							$Username=$_POST['Username'];
							
							$Phone_Number=$_POST['Phone'];
							$Email=$_POST['Email'];					
							$Password=$_POST['Password'];
							
						
	//find length of all variable	
					$username_length=strlen($Username);
					$Phone_Number_length=strlen($Phone_Number);
					$Password_length=strlen($Password);
						
	
	// check phone number formate or not
						
						if(preg_match('/^[0-9]{10}+$/' , $Phone_Number))
							{
								 "valid Phone number" ;
							}
							else
							{
								$e="invalied phone number";
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
							}
	//check phone number length						
					if($Phone_Number_length>10 or $Phone_Number_length<10 )
						{
						$e="phone number incorrect";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
							
	//check username length						
					if($username_length>20)
						{
						$e="username must be 20 digit ";
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
	//check confirm password length						
					if($c_password_length>8 AND $c_password_length<8 )
						{
						$e="confirm password must be 8 digit ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	// check email validation					
					if(!filter_var($Email,FILTER_VALIDATE_EMAIL)===false)
							{
							"email address is valid <br>";
							}
						else 
							{
								$e="email not valid<br>";
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;	
							}
	//check email exist or not
					if($Email!==" ")
					  {
						$result = "select * from user where email='$Email'";
						mysqli_query($conn,$result);
						$num_row=mysqli_affected_rows($conn);
				
						if($num_row>=1)
							{
							$e=" your email address is exist";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;															
							}
					  }	
	
	//run sql query					
						$query="INSERT INTO user(name,Phone,email,Pass) 
													VALUES('$Username' ,'$Phone_Number','$Email','$Password')"; 
					if(mysqli_query($conn,$query))
						{  
						header('location:login.php');
						}
					else 
						{
							 mysqli_error($conn);
						}
				
			}		
					mysqli_close($conn);
					?>