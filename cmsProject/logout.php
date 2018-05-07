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
<?php
session_start();
session_unset();
session_destroy();

header("location:cms.php");
exit();
?>
	
	</div>
	<div id="footer">
		<?php
		include '../cmsProject/footer.php'
		?>
	</div>
</body>
</html>