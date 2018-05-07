<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta  charset="utf-8">
	<meta name="description" content="Assignment 3">
  	<meta name="keywords" content="HTML,CSS,XML,PHP, liberty university">
 	<meta name="author" content="Robert King">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Assignment 2</title>
</head>
<body>

<div class="Navbar" id="Navbar">
	    <a href="../webForm.php">POST</a>
	    <a href="get.php">GET</a>
	</div>
<div class="product-grid">
<?php

// GET variables to store data
$response = $_GET["response"];
$fullName = $_GET["fullName"];
$review = $_GET["review"];
$productName = $_GET["productName"];



// print out of what user entered into form
print "$fullName, you reviewed the $productName. The rating you gave was $response. Here is what you had to say, $review";
?>

<p>Thank you for your review! Please feel free to rate another product.</p>
<form>
<input class="goToReview" type="button" value="Rate another product" onclick="window.location.href='get.php'" />
</form>
</div>
<footer class="footer">

<?php
include '../menu.php'
?>
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
<link rel="stylesheet" type="text/css" href="../css/webForm.css">
</html>