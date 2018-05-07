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
<form action="addedItem.php" method="post">
	
		Name<input type="text" name="name" >
		<br>
		Product Description<input type="text" name="productDesc"><br>
		Quantity<input type="text" name="qty"><br>
		Price<input type="text" name="price"><br>
		

		<input type="submit" name="Add">
	</form>	




</body>
<?php
	include '../cmsProject/footer.php';
	?>
</html>