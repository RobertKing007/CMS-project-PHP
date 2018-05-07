<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<head>
	<meta  charset="utf-8">
	<meta name="description" content="First PHP Webapp">
  	<meta name="keywords" content="HTML,CSS,XML,PHP, liberty university">
 	<meta name="author" content="Robert King">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>My First PHP Webapp</title>
</head>
<body>

<div class="centerContaier">
<h1>CSIS 410 Assignment Page</h1>
	<ul>
		<li><a href="cmsProject/cms.php">CMS Project</a></li>
		<li><a href="../intro.php">Assingment 1</a></li>
		<li><a href="../Variables.php">Assingment 2</a></li>
		<li><a href="../webForm.php">Assingment 3</a></li>
		<li><a href="Variables.php">Assingment 4</a></li>
		<li><a href="pages/VariablesLoginCheck.php">Assingment 5</a></li>
		<li><a href="pages/VariablesLoginCheck.php">Assingment 6</a></li>
	</ul>

</div>

<footer class="footer">


	<div class="lastModified"> <?php
		echo "Last modified: ".date("F d Y H:i:s.",filemtime("index.php"));?>
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
