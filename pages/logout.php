<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="../css/Variables.css">

<head>
</head>
<body>
<?php 

include 'function.php' ;

logout();
?>
<footer class="footer">

	<a href="../index.php">Assignments Page</a>

	<div class="loginout">
		<?php 
		if(isset($_SESSION['loggedin']))
			$username = $_SESSION['username'];
	{
print "<p>Welcome, $username</p>";

		echo '<a href="logout.php" > logout</a>';
	}
		?>
		</div>
	<div class="lastModified"><?php
		echo "Last modified: ".date("F d Y H:i:s.",filemtime("../index.php"));?>
	</div>


	

	<div class="validator">
		<a href="http://validator.w3.org/check?uri=referer" 
		style="background-color: transparent">
		<img style="border-style:none" width="88" height="31" 
		src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" /></a>
		&nbsp;&nbsp;
		<a href="http://jigsaw.w3.org/css-validator/check/referer" 
		style="background-color: transparent">
		<img style="border-style:none" width="88" height="31" 
		src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
		</a>
	</div>
	</footer>
</body>
</html>