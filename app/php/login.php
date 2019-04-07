<?php
	
		session_start();
		
		$db=mysqli_connect("127.0.0.1","root" ,"","registeration");
		if(! $db ) {
		die('Could not connect: ' . mysql_error());
			}
		if(isset($_POST["login_btn"]))
		{
			 
			$User_name=($_POST["username"]);
			$pass=($_POST["password"]);
			
				
				
				$sql=mysqli_query(" select * from user where User_Name=$User_name && Password=$pass");
				
				$row=mysqli_fetch_array($sql);
				
				if($row['User_Name']==$User_name && $row['password']==$pass)
				{
					echo "done";
					
				}
				else
				{
					echo "sorry ";
				}
				
			
			
			
			
			
		}
		
	
	
?>