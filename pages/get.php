<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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

<form action="webPollGet.php" method="get">
	<!-- table to display each product -->
	<div class="product-grid">
	<!-- form for products -->


		<div class="product-grid-element">
			<h1 name="h1">Les Paul</h1>
			<p> <img src="../img/electric-guitar-161740_1280.png" width="100" height="100"></p>
			
			<p class="desc">Sunburst Gibson Les Paul. Made in 2000, in good condition</p>

			<p class="productQal">Quality of the product:   
				
			 	<input type="radio" name="response"
				value="Best"> The best!
				<input type="radio" name="response"
				value="Good"> Really good
			 	<input type="radio" name="response"
				value="Okay"> Just okay
				<input type="radio" name="response"
				value="questionable"> Questionable
			 	<input type="radio" name="response"
				value="worst"> Don't bother
				
			</p>

			<p class="name">
				Full Name: <input type="text" name="fullName" size="25">
			</p>
				<p class="productName">
				Product Name: <input type="text" name="productName" size="25">
			</p>

			<p class="review">
				Review: <textarea name="review" rows="5" cols="30"></textarea>
			</p>

			<input type="submit" name="submit" value="Rate this Product!" >
		</div>



		<div class="product-grid-element">
			<h1 name="h1">Fender Fat Strat</h1>
			<p> <img src="../img/music-2022796_1280.png" width="100" height="100"></p>
			
			<p class="desc">Black Fender fat strat. Made in 2012, in good condition</p>

			<p class="productQal">Quality of the product:   
				
			 	<input type="radio" name="response"
				value="Best"> The best!
				<input type="radio" name="response"
				value="Good"> Really good
			 	<input type="radio" name="response"
				value="Okay"> Just okay
				<input type="radio" name="response"
				value="questionable"> Questionable
			 	<input type="radio" name="response"
				value="worst"> Don't bother
				
			</p>

			<p class="name">
				Full Name: <input type="text" name="fullName" size="25">
			</p>
				<p class="productName">
				Product Name: <input type="text" name="productName" size="25">
			</p>

			<p class="review">
				Review: <textarea name="review" rows="5" cols="30"></textarea>
			</p>

			<input type="submit" name="submit" value="Rate this Product!" >
		</div>

		<div class="product-grid-element">
			<h1 name="h1">Fender Telecaster</h1>
			<p> <img src="../img/guitar-1858123_1920.jpg" width="100" height="100"></p>
			
			<p class="desc">White Fender telecaster. Made in 1970, in poor condition</p>

			<p class="productQal">Quality of the product:   
				
			 	<input type="radio" name="response"
				value="Best"> The best!
				<input type="radio" name="response"
				value="Good"> Really good
			 	<input type="radio" name="response"
				value="Okay"> Just okay
				<input type="radio" name="response"
				value="questionable"> Questionable
			 	<input type="radio" name="response"
				value="worst"> Don't bother
				
			</p>

			<p class="name">
				Full Name: <input type="text" name="fullName" size="25">
			</p>
				<p class="productName">
				Product Name: <input type="text" name="productName" size="25">
			</p>

			<p class="review">
				Review: <textarea name="review" rows="5" cols="30"></textarea>
			</p>

			<input type="submit" name="submit" value="Rate this Product!" >
		</div>

		<div class="product-grid-element">
			<h1 name="h1">Gibson Hallow Body</h1>
			<p> <img src="../img/electric-2616842_1280.jpg" width="100" height="100"></p>
			
			<p class="desc">Wood finish Gibson hallow body. Made in 1980, in execellent condition</p>

			<p class="productQal">Quality of the product:   
				
			 	<input type="radio" name="response"
				value="Best"> The best!
				<input type="radio" name="response"
				value="Good"> Really good
			 	<input type="radio" name="response"
				value="Okay"> Just okay
				<input type="radio" name="response"
				value="questionable"> Questionable
			 	<input type="radio" name="response"
				value="worst"> Don't bother
				
			</p>

			<p class="name">
				Full Name: <input type="text" name="fullName" size="25">
			</p>
				<p class="productName">
				Product Name: <input type="text" name="productName" size="25">
			</p>

			<p class="review">
				Review: <textarea name="review" rows="5" cols="30"></textarea>
			</p>

			<input type="submit" name="submit" value="Rate this Product!" >
		</div>

		<div class="product-grid-element">
			<h1 name="h1">Garcia Acoustic guitar</h1>
			<p> <img src="../img/guitar-1904390_1920.jpg" width="100" height="100"></p>
			
			<p class="desc">Wood finish Garcia Acoustic guitar. Made in 1995, in poor condition</p>

			<p class="productQal">Quality of the product:   
				
			 	<input type="radio" name="response"
				value="Best"> The best!
				<input type="radio" name="response"
				value="Good"> Really good
			 	<input type="radio" name="response"
				value="Okay"> Just okay
				<input type="radio" name="response"
				value="questionable"> Questionable
			 	<input type="radio" name="response"
				value="worst"> Don't bother
				
			</p>

			<p class="name">
				Full Name: <input type="text" name="fullName" size="25">
			</p>
				<p class="productName">
				Product Name: <input type="text" name="productName" size="25">
			</p>

			<p class="review">
				Review: <textarea name="review" rows="5" cols="30"></textarea>
			</p>

			<input type="submit" name="submit" value="Rate this Product!" >
		</div>



	
	</div>

</form>



<footer class="footer">

<?php
include 'menu.php'
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
