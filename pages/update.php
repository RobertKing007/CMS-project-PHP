    <?php
ob_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" type="text/css" href="../css/Variables.css">
	<meta  charset="utf-8">
	<meta name="description" content="Assignment 4">
  	<meta name="keywords" content="HTML,CSS,XML,PHP, liberty university">
 	<meta name="author" content="Robert King">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Assignment 4</title>

</head>
<body>
<div class="centerContaier">
<?php

//variables 
$update = array (
$familyMember = $_POST['familyMember'],
$fullName = $_POST['fullName'],
$age = $_POST['age'],
$interest = $_POST['interest'],
$pets = $_POST['pets']);



 
$validate = true;
// validations

if (empty($_POST['fullName']))
{
  print '<p class="error">Please enter vaild name </p>';
  $validate = false;
}

if (empty($_POST['age']) || !is_numeric($_POST['age'])  )

{
  print '<p class="error">Please enter vaild age </p>';
  $validate = false;
}


if (empty($_POST['interest']))
{
  print '<p class="error">Please enter vaild interest </p>';
  $validate = false;
}
if (empty($_POST['pets']) )
{
  print '<p class="error">Please enter vaild pet </p>';
  $validate = false;
}
if ($validate == false) {
print '<a href="../Variables.php"> try again</p>';
}

switch ($familyMember){
        case 'Sheril':
       
       // header("location: sheril.php");
  break;
  case 'Alex':
       // header("location: alex.php");
  break;
  case 'Tom':
       // header("location: tom.php");
  break;
  case 'Lea':
       // header("location: lea.php");
  break;
  case 'Jeri':
       // header("location: jeri.php");
  break;
  }
?>

<?php
if ($validate == true)

  
{ 
  print "<p> $fullName is $age years old. Interest is $interest. Owns $pets</p><br><p> Thank you for updating familyMember's page!</p>";
  echo "<a href='../Variables.php'> Back to Family Tree</a>";

}


?>
<footer class="footer">

  <a href="../index.php">Assignments Page</a>

  <div class="loginout">
    <?php 
    if(isset($_SESSION['loggedin']))
      $username = $_SESSION['username'];
  {
print "<p>Welcome, $username</p>";

   echo '<a href="logout.php" > logout</a>';
  }
    ?>
    </div>
  <div class="lastModified"><?php
    echo "Last modified: ".date("F d Y H:i:s.",filemtime("../index.php"));?>
  </div>


  

  <div class="validator">
    <a href="http://validator.w3.org/check?uri=referer" 
    style="background-color: transparent">
    <img style="border-style:none" width="88" height="31" 
    src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" /></a>
    &nbsp;&nbsp;
    <a href="http://jigsaw.w3.org/css-validator/check/referer" 
    style="background-color: transparent">
    <img style="border-style:none" width="88" height="31" 
    src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
    </a>
  </div>
  </footer>
</div>
</body>
</html>