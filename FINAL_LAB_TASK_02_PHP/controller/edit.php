<?php
	require_once('../model/productsModel.php');
	$id = $_GET['id'];
	
	
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$buy = $_POST['buy'];
		$sell = $_POST['sell'];
		$display = $_POST['display'];

		$product = [
						'name'    => $name,
						'buy'     => $buy,
						'sell'    => $sell,
						'display' =>$display
		 		   ];

		$status = updateProduct($product, $id);

	    if ($status) {
	    	echo "Successfully ddited from database";
	    }else{
	    	echo "Faiked product from database";
	    }
	}
?>