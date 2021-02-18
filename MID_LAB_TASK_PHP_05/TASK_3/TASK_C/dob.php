<!DOCTYPE html>
<html>
<head>
	<title>Date of birth Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
				<legend><b>DATE OF BIRTH</b></legend>
					<table>
						<tr>
							<td>
								<i>dd</i>
							</td>
							<td>
								<i>mm</i>
							</td>
							<td>
								<i>yy</i>
							</td>
						</tr>

						<tr>
							<td>
								<input type="text" name="day" size="6" value="<?php if(isset($_POST['day'])){ echo $_POST['day'];} ?>">/
							</td>
							<td>
								<input type="text" name="mn" size ="6" value="<?php if(isset($_POST['mn'])){ echo $_POST['mn'];} ?>">/
							</td>
							<td>
								<input type="text" name="yr" size="6" value="<?php if(isset($_POST['yr'])){ echo $_POST['yr'];} ?>">
							</td>	
						</tr>
					</table>
					<hr align="left" width="80%">
					<input type="Submit" name="submit" value="submit">						
			</fieldset>
	</form>	
</body>
</html>