<?php
    session_start();
    include 'model/session.php';
    if($_SESSION['uType'] == "user"){
?>

<!DOCTYPE html>
<html>

<head>
    <title>Logged in Dashboard</title>
</head>

<body>

    <table width="1000px" border="1" cellpadding="0" cellspacing="0" align="center">
        <tr height = "50px">
            <td colspan="2" align="right" style="padding-right: 10px">
                <p style="display: inline-block;">Logged in as <b><?php echo ucwords($_SESSION['login_user']); ?></b></p>
                <a href="controller/logout.php">Logout</a>
            </td>
        </tr>
        <tr height = "120px">
            <td width="250px" style="padding: 0px 10px">
                <strong><p style="border-bottom: 1px solid black; padding: 10px 0">Account</p></strong>
                <ul style="list-style-type: none;">
                    <li><a href="controller/viewProfile.php">Veiw Profile</a></li>
                    <li><a href="controller/changePassword.php">Change Password</a></li>
                    <li><a href="view/manageProduct.html">Manage Product</a></li>
                    <li><a href="view/listOfSellProduct.html">List of Sell Product</a></li>
                    <li><a href="view/fixedProductPrice.html">Fixed Product Price</a></li>
                    <li><a href="view/ManageCostRange.html">Manage Cost Range</a></li>
                    <li><a href="view/medicalServices.html">Medical Services</a></li>
                    <li><a href="view/productDescription.html">Product Description</a></li>
                    <li><a href="view/upcomingProduct.html">Upcoming Product</a></li>
                    <li><a href="view/contactSystemAdmin.html">Contact System Admin</a></li>
                    <li><a href="controller/logout.php">Logout</a></li>
                </ul>
            </td>
        	<td style="padding-left: 10px">
                <form>
                    <input type="" name="">
                    <a href="#">search</a>
                </form>
                <p>Welcome <b><?php echo ucwords($_SESSION['login_user']); ?></b></p>
            </td>
        </tr>
        <tr height = "30px">
        	<td colspan="2" align="center">Copyright@ 2021</td>
        </tr>
    </table>
</body>

</html>

<?php

}
?>