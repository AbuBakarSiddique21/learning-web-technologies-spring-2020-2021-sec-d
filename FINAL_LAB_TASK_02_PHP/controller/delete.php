<?php

	require_once('../model/productsModel.php');
	$id = $_GET['id'];

	$status = deleteProduct($id);

    if ($status) {
    	echo "Successfully deleted from database";
    }else{
    	echo "Failed product from database ";
    }

?>