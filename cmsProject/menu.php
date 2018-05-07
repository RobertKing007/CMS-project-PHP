<?php
ob_start();
?>

		
<div class="menu">

	<ul>
		<li><a href="../cmsProject/cms.php">Home</a></li>
		<li><a href="../cmsProject/shop.php">Shop</a></li>
		<li><a href="../cmsProject/aboutus.php">About Us</a></li>
		<li><a href="../cmsProject/gallary.php">Gallary</a></li>
		<li><a href="../cmsProject/contact.php">Contact</a></li>
		<li><a href="../cmsProject/accountlogin.php">Account</a></li>
		<li id="currentUser"><?php 
		session_start();
		if(isset($_SESSION['loggedin'])){
			$username = $_SESSION['username'];
		
		print "Welcome, $username";

		echo '<a href="accountlogin.php" > logout</a>';}
		?></li>
	
	</ul>



