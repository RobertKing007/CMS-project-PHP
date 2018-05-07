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
$servername = "localhost";
$dbusername = "rking_rking";
$password = "Jrrtk123";
$dbname = "rking_goodsamaritan";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
		$newAccArr = array( 
			$firstName = trim(strip_tags($_POST['firstName'])),
			$lastName = trim(strip_tags($_POST['lastName'])),
			$email = trim(strip_tags($_POST['email'])),

			$username = trim(strip_tags($_POST['username'])),
			$password = trim(strip_tags($_POST['password'])),
			$confirmPassword = trim(strip_tags($_POST['confirmPassword']))
			);
$validate = true;
// validations
if (empty($_POST['firstName']))
{
    print '<p class="error">Please enter vaild  first name </p>';

  $validate = false;
  
}
if (empty($_POST['lastName']))
{
    print '<p class="error">Please enter vaild last name </p>';

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

  if (empty($_POST['username']))
{
  print '<p class="error">Please enter vaild Username </p>';
  $validate = false;

}
if (empty($_POST['password']))
{
  print '<p class="error">Please enter vaild password </p>';
   $password = ($_POST["password"]);
  $validate = false;

}
if (empty($_POST['password']))
{
  print '<p class="error">Please enter vaild password </p>'; 
  $validate = false;
}
else{
   $confirmPassword = ($_POST["confirmPassword"]);
   if($confirmPassword!=$password)
   { 
   	print '<p class="error">Paswords do not match </p>';
   	$validate = false;}
 
}


if($validate == true)
{
		print "Thank you $firstName for signing up! Please check your email, $email to confirm your account!";
		$addAccount = "INSERT INTO users ( user_priv, first_name, last_name, email, username, password, login_time) VALUES (3, '$firstName', '$lastName', '$email', '$username', '$password', NOW())";
		$result = mysqli_query($conn, $addAccount);
	}


	if ($validate == false) {
		echo '<a href="signup.php">Try Again</a>';
	}
	 ?>
	

	<div id="footer">
		<?php
		include '../cmsProject/footer.php'
		?>
	</div>
</body>
</html>