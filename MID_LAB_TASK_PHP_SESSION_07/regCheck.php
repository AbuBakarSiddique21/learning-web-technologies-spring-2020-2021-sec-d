<?php
	
	session_start();
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$conPassword=$_POST['confirmPassword'];
		$gender=$_POST['gender'];
		$day=$_POST['dd'];
		$month=$_POST['mm'];
		$year=$_POST['yyyy'];

		if($name == "" || $email == "" || $username == ""||$password == "" ||$conPassword == "" || $dd == "" ||$mm =="" || $yyyy == "")
		{
			echo "Error submition  and please try continue";
		}
		else if ($password != $conPassword)
		{
			echo "password & confirm password mismatch";
		}
		else
			{
				$user=[
						'name'        =>$name,
						'email'       =>$email,
						'username'    =>$username,
						'password'    =>$password,
						'conPassword' =>$conPassword,
						'gender' 	  =>$gender,
						'dd'		  =>$day,
						'mm'		  =>$month,
						'yyyy'        =>$year
					  ];

				$_SESSION['user']=$user;

				header('location: login.html');
			}

	}else{
		echo "Invalid request";
	}


?>