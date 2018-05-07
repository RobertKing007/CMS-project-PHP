<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<link rel="stylesheet" type="text/css" href="../css/cms.css">

<head>
	<?php
	include '../cmsProject/header.php'
	?>

</head>
<body>
	<h3>shopping cart</h3>
	<?php
session_start();
	$servername = "localhost";
$dbusername = "rking_rking";
$password = "Jrrtk123";
$dbname = "rking_goodsamaritan";
$conn = new mysqli($servername, $dbusername, $password, $dbname);
		$query = "SELECT * from cart ORDER BY id ASC ";
		$result = mysqli_query($conn, $query);


		if (mysqli_num_rows($result) > 0)
		{
			while ($row = mysqli_fetch_array($result))
			{
				?>
				<div>
					<form method="post" action="test.php?action=add&ID= <?php echo $row["id"];?>">
						<div>
						<img src="<?php echo $row["img"]; ?>" class=""/>
						</div>
						<h4> <?php echo $row["name"]; ?> </h4>
						<h4> <?php echo $row["price"]; ?> </h4>
						<input type="text" name="qty" value= "1">
						<input type="hidden" name="hiddenName" value="<?php echo $row["name"]; ?>">
						<input type="hidden" name="hiddenPrice" value="<?php echo $row["price"]; ?>">
						<input type="submit" name="submit" value="Add to Cart">
					</form>
				</div>
				
		<?php		
		}
	}
?>
</body>
</html>