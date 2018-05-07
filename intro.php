<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
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
		<a href="../intro.php">Home</a>
	    <a href="pages/phpconfig.php">PHP config</a>
	    <a href="pages/phpprint.php">Print Report</a>
	</div>
	  

	<div class="centerContaier">
		<h1>advantages and disadvantages of HostGator</h1>

		<p> HostGator was by far the best hosting site for this class. The price was the lowest and came with necessary features.  The interface is easy to use and is able to be customized. Their pricing and selection of domain names was also top notch. They made it easy to find and select a domain. Some of the disadvantages, There are not as many features as some other site. The have a web builder but it does not seem very impressive. The security options also weaker than other sites. Overall, for this class HostGator is an excellent pick.</p>
	</div>


<footer class="footer">

	<a href="../index.php">Assignments Page</a>
	<div class="lastModified"><?php
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

	<link rel="stylesheet" type="text/css" href="../css/intro.css">
</body>


</html>