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

<?php

$contactArr = array(
	$fullName = $_POST['fullName'],
	$email = $_POST['email'],
	$contactType = $_POST['contactType'],
	$comments = $_POST['comments']
);
$val = dio_truncate(fd, offset);
if (empty($_POST['fullName']))
{
    print '<p class="error">Please enter vaild Name </p>';

  $validate = false;
  
}
 if (empty($_POST["email"])) {
   print '<p class="error">Please enter vaild email </p>';
   $validate = false;
  } 
  elseif($email = ($_POST["email"])) {
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      print '<p class="error">Invalid format </p>';
      $validate = false;
    }
    
  }

  if (empty($_POST['contactType']))
{
  print '<p class="error">Please enter vaild contact reason </p>';
  $validate = false;

}

if($val == true)
{
		print "Thank you $fullName for signing up! Please check your email, $email to confirm your account!";
	}

	if ($val == false) {
		echo '<a href="contact.php">Try Again</a>';
	}
	 ?>


	
	<div id="footer">
		<?php
		include '../cmsProject/footer.php'
		?>
	</div>
</body>
</html>