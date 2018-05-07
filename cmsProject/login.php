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
		include '../cmsProject/menu.php';
		
		?>
	</div>
<?php
//connect DB
$servername = "localhost";
$dbusername = "rking_rking";
$password = "Jrrtk123";
$dbname = "rking_goodsamaritan";
$conn = new mysqli($servername, $dbusername, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username = trim(strip_tags($_POST['username']));
		$password = trim(strip_tags($_POST['password']));

		$query = "SELECT * from users WHERE username='$username' AND password='$password' ";

	$result = mysqli_query($conn, $query);

	$row = mysqli_fetch_assoc($result);
	if($row['username'] == $username && $row['password'] == $password)
	{
		print "loged in as $username";
		session_start();
			$_SESSION['username'] = $row['username'];
			$_SESSION['loggedin'] = time();
			ob_end_clean();
			header('Location: cms.php');
			exit();}

		if($row['username'] == 'admin' && $row['password'] == 'admin')
	{
			session_start();
			$_SESSION['username'] = $row['username'];
			$_SESSION['loggedin'] = time();
			ob_end_clean();
			header('Location: cms.php');
			exit();

	}
	else if($row['username'] == 'publisher' && $row['password'] == 'publisher')
	{
			session_start();
			$_SESSION['username'] = $row['username'];
			$_SESSION['loggedin'] = time();
			ob_end_clean();
			header('Location: cms.php');
			exit();

	}
	else if($row['username'] == 'customer' && $row['password'] == 'customer')
	{
			session_start();
			$_SESSION['username'] = $row['username'];
			$_SESSION['loggedin'] = time();
			ob_end_clean();
			header('Location: cms.php');
			exit();

	}
	else {
		 print '<p> invalid login try again</p>';
		 echo '<a href="accountlogin.php">Try Again</a>';
		
	};
	}



	//username/password isset

 
	
	if(isset($_SESSION['loggedin']))
	{
		echo '<a href="<?php> unset($_SESSION["loggedin"]); 
$_SESSION["loggedin"] = "false";
} ?>">logout</a>';
	}

?>

	<div id="footer">
		<?php
		include '../cmsProject/footer.php'
		?>
	</div>
</body>
</html>