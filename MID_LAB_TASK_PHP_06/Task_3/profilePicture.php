<html>
    <body>
        <fieldset>
        <legend><b>PROFILE PICTURE</b></legend>
			<img align="right" src="./image/20210126_090223.jpg"; width="150px"> 
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
            <input type="file" name="file">
            <hr>
            <input type="submit" name="submit" value="Submit"> <br>
            </form>
        
        </fieldset>
        
    </body>
</html>