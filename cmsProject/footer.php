<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title></title>
</head>
<body>

</body>
<footer class="footer">
</br>
<a href="../index.php">assignment page</a>
	<div class="lastModified"> <?php
		echo "Last modified: ".date("F d Y H:i:s.",filemtime("../index.php"));?>
		
	</div>
	
	<div class="socialMeida">
		<img src="../../img/face book.png" width="30" height="30">
		<img src="../../img/instagram.png" width="30" height="30">
		<img src="../../img/youtube.png" width="30" height="30">
		<img src="../../img/twitter.png" width="30" height="30">
		<img src="../../img/sound cloud.png" width="30" height="30">

	</div>
	<div class="validator">
		<a href="http://validator.w3.org/check?uri=referer" 
		style="background-color: transparent">
		<img style="border-style:none" width="80" height="30" 
		src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" /></a>
		&nbsp;&nbsp;
		<a href="http://jigsaw.w3.org/css-validator/check/referer" 
		style="background-color: transparent">
		<img style="border-style:none" width="80" height="30" 
		src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
		</a>
	</div>
	</footer>
</html>
