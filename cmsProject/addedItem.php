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
	<?php
$servername = "localhost";
$dbusername = "rking_rking";
$password = "Jrrtk123";
$dbname = "rking_goodsamaritan";
$conn = new mysqli($servername, $dbusername, $password, $dbname);

$name = trim(strip_tags($_POST['name']));
$productDesc = trim(strip_tags($_POST['productDesc']));
$qty = trim(strip_tags($_POST['qty']));
$price = trim(strip_tags($_POST['price']));

print "$name Added!";
		$addItem = "INSERT INTO products (name, product_desc, quantity, price) VALUES ( '$name', '$productDesc', '$qty', '$price')";
		$result = mysqli_query($conn, $addItem);
?>
<a href="shop.php">return to Shop</a>



</body>
<?php
	include '../cmsProject/footer.php';
	?>
</html>