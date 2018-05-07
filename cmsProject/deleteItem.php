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
$name = trim(strip_tags($_POST['hiddenName']));

$delete = "DELETE FROM products WHERE name ='$name'";
		$result = mysqli_query($conn, $delete);

print "$name deleted";
?>
<a href="shop.php">return to Shop</a>




</body>
<?php
	include '../cmsProject/footer.php';
	?>
</html>