<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="../css/Variables.css">
<head>
	<meta  charset="utf-8">
	<meta name="description" content="First PHP Webapp">
  	<meta name="keywords" content="HTML,CSS,XML,PHP, liberty university">
 	<meta name="author" content="Robert King">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>My First PHP Webapp</title>
</head>
<body>
<div class="Navbar" id="Navbar">
	<a href="../Variables.php">Family Tree</a>
</div>

<div class="centerContaier">
<?php
$name = 'Tom King';
$age = 59;
$interest = "Board Games";
$pets = "no pets";

print "<p> $name is $age years old. Interest is $interest. Owns $pets</p";
?>
</div>
<footer class="footer">

	<a href="../index.php">Assignments Page</a>
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