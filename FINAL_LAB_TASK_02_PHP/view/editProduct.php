<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
</head>
<body>
	<form method="post" action="../controller/addProductCheck.php">
		<fieldset>
			<legend>EDIT PRODUCT</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>Buying Price</td>
					<td><input type="number" name="buyingPrice" value=""></td>
				</tr>
				<tr>
					<td>Selling Price</td>
					<td><input type="number" name="sellingPrice" value=""></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="iteam[]">Display</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="save" value="SAVE"> 
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>