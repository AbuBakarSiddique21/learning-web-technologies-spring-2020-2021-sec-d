<?php

  require_once('../model/userModel.php');
  $id = $_GET['id'];
 $status =  deleteUser($id);

 if ($status){
	echo "Successfully deleted from database";
 }
 else{
 	echo "Failed deleted from database";
 }

?>