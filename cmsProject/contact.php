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

	<div class="center-container-contact">
		<form action="contactform.php" method="post">
			<p class="name"> Full Name: <input type="text" name="fullName" size="25">

			<p class="email"> Email <input type="text" name="email" size="25">
			
			<p class="contactType">What are you interested in?
			 	<input type="radio" name="contactType"
				value="show"> Playing a show
				<input type="radio" name="contactType"
				value="rent"> Renting the venue	
				<input type="radio" name="contactType"
				value="info"> General Information


				<p class="comments">
				Comments: <textarea name="comments" rows="5" cols="30"></textarea>
			</p>

			<input type="submit" name="submit" value="Sumbit" >
		</form>
		<br>
		<p id="text-contact"> We are excited to hear from you! We will get back to you as soon as we can!</p>
	</div>	
	
	<div id="footer">
		<?php
		include '../cmsProject/footer.php'
		?>
	</div>
</body>
</html>