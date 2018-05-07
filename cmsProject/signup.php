<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="../css/cms.css">
<head>
	<?php
	include '../cmsProject/header.php'
	?>
</head>
<body>
	<div id="menu">
		<?php
		include '../cmsProject/menu.php'
		?>
	</div>
	<p>Please enter all the of the following information:</p>
	<form action="createAccount.php" method="post">
		First Name<input type="text" name="firstName" >
		<br>
		Last Name<input type="text" name="lastName" >
		<br>
		Email:<input type="text" name="email"><br>

		Username:<input type="text" name="username"><br>
		Password:<input type="text" name="password"><br>
		Confirm Password:<input type="text" name="confirmPassword"><br>

		<input type="submit" name="Sign Up">
	</form>	
	

	<div id="footer">
		<?php
		include '../cmsProject/footer.php'
		?>
	</div>
</body>
</html>