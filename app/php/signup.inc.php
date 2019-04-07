<?php
	
		session_start();
		
		$db=mysqli_connect("127.0.0.1","root" ,"","registeration");
		if(! $db ) {
		die('Could not connect: ' . mysql_error());
			}
		if(isset($_POST["signup_btn"]))
		{
			 
			
			$User_name=($_POST["username"]);
			$firstname=($_POST["first_name"]);
			$lastname=($_POST["last_name"]);
			$Age=($_POST["Age"]);
			$Gender=($_POST["Gender"]);
			$Adress=($_POST["Adress"]);
			$pass=($_POST["password"]);
			$pass2=($_POST["password"]);
			$User_Type='User';
			if($pass==$pass)
			{
				
				
				$sql=" INSERT INTO user (User_Name ,F_name,L_name,age,Gender,Adress,password,Confirm_Password,User_Type) VALUES('$User_name','$firstname','$lastname','$Age','$Gender','$Adress','$pass','$pass2','$User_Type')";
				
				mysqli_query( $db , $sql );
  
				$_SESSION['message']=" you are logged in ";
				$_SESSION['message']=$User_Name;
				header("location:home.php");
			}
			else{
				
				$_SESSION['message']=" TOW password doesest match";
				
				
			}
			
			
			
			
			
		}
		
	
	
?>