<?php

	if(isset($_POST['submit']))
	{
		$bloodGropu = $_POST['blood'];
		
		if($bloodGropu == ""){
			echo "null submission";
		}
		else{
			echo "Blood group: ".$bloodGropu."<br/><br/>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood group Input</title>
</head>
<body>
	<form method="post" action="#" >
		<fieldset>
			<legend>BLOOD GROUP</legend>
			<select name="blood">
				<option>A+</option>
				<option>A-</option>
				<option>B+</option>
				<option>B-</option>
				<option>AB+</option>
				<option>AB-</option>
				<option>O+</option>
				<option>O-</option>			
			</select>
			<hr align="left" width="80%">
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>