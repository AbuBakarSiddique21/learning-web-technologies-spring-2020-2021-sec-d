<?php
	session_start();

    if(isset($_POST['submit']))
    {
    	$currentPassword=$_POST['currentPass'];
    	$newPassword=$_POST['newPass'];
    	$retypePassword=$_POST['retypePass'];

    	if($currentPassword == "" || $newPassword == "" || $retypePassword == "")
    	{
    		echo "Error submission";
    	}
    	else{
    		$pass=$_SESSION['user'];

    		if ($currenttPass == $pass['password']) {
    			echo "Current password and new password are not match";
    		}
    		elseif($newPassword != $retypePassword)
    		{
    			echo "Password and Re-Password mismatch";
    		}else{
    			echo "Password change successfully";
    		}
    	}
    }
    else
    {
    	echo "Invalid requested";
    }

?>