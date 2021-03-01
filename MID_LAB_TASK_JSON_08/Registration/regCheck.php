<?php
   		if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$conPass=$_POST['confirmPassword'];
		$day=$_POST['dd'];
		$month=$_POST['mm'];
		$year=$_POST['yyyy'];

   		if($name == "" || $email == "" || $username == ""||$password == "" ||$conPass == "" || $day == "" ||$month =="" || $year == "")
		{
			echo "Error null Submission";
		}
		else if ($password != $conPass)
		{
			echo "Password and Confirm password are not match";
		}
		else
		{
   			$arr_data =[];
		
  			$formdata = [
							'name'     => $_POST['name'],
							'email'    => $_POST['email'],
							'username' => $_POST['username'],
							'password' => $_POST['password'],
							'conPass'  => $_POST['confirmPassword'],
							'gender'   => $_POST['gender'],
							'day'      => $_POST['dd'],
							'month'    => $_POST['mm'],
							'year'     => $_POST['yyyy']
	  					];
	   		$jsondata = file_get_contents('user.json');
			$arr_data = json_decode($jsondata, true);
			
			array_push($arr_data,$formdata);
			$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
		   

		   if(file_put_contents('user.json', $jsondata)) 
		   {
		        header('location: login.html');
		   }
		   else 
		   {
		        echo "Requested error !";
		   }
	}
}

?>