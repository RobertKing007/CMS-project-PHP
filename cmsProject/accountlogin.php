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
	<div class="login">
	<form action="login.php" method="post">
		Username:<input type="text" name="username"><br>
		Password:<input type="text" name="password"><br>
		<input type="submit" name="submit">
	</form>	

	
<p>Not a member? Login <span><a href="signup.php">here</a></span></p>
<p>Logout <span><a href="logout.php">here</a></span></p>
</div>
	<div id="footer">
		<?php
		include '../cmsProject/footer.php'
		?>
	</div>
</body>
</html>