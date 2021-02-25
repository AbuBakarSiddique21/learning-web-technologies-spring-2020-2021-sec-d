<?php

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];


		if($name == "" || $email == "" || $gender=="" || $dob =="")
		{
			echo "Error submission";
		}
		else
		{
			
		}
	}
	else{
		echo "Invalid requested";
	}

?>