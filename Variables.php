<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="../css/Variables.css">

<head>
	<meta  charset="utf-8">
	<meta name="description" content="First PHP Webapp">
  	<meta name="keywords" content="HTML,CSS,XML,PHP, liberty university">
 	<meta name="author" content="Robert King">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>My First PHP Webapp</title>
</head>
<body>

<div class="Navbar" id="Navbar">
	<a href="../Variables.php">Family Tree</a>
	<a href="../index.php">Assignments Page</a>
</div>
<?php

include 'pages/function.php';


session_start();
if($_SESSION['username']=='admin')
	{is_writable('Variables.php');}
?>
<?php
$servername = "localhost";
$username = "rking_rking";
$password = "King007";
$dbname = "rking_RobertKing";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




$validate = true;
if (isset($_POST['deleteItem']))
{
	$validate = true;
  
}

if (empty($_POST['name']))
{
  print '<p class="error">Please enter vaild name </p>';
  $validate = false;
}
if (empty($_POST['title']))
{
  print '<p class="error">Please enter vaild title </p>';
  $validate = false;
}


if (empty($_POST['comment']))
{
  print '<p class="error">Please enter a comment </p>';
  $validate = false;
}

 




if($validate == true)
{
$_POST['ID']= 0;
$ID = trim(strip_tags($_POST['ID']));
$name = trim(strip_tags($_POST['name']));
$title = trim(strip_tags($_POST['title']));
$comment = trim(strip_tags($_POST['comment']));
 $dateo = $_POST['dateo'] = date("Y/m/d 
 	G:i:s");

 	//comment button
	if (isset($_POST['submitComment'])) 
	{
		$query = "INSERT INTO comments (ID, name, title, comments, comment_date)
			VALUES ('$ID', '$name', '$title', '$comment', NOW())";
	

	if ($conn->query($query) === TRUE) 
	{
	    echo "New record created successfully";
	} 
		else
		{
		    echo "Error: " . $query . "<br>" . $conn->error;
		}
	}

	//update button
	if (isset($_POST['update'])) 
	{
 	$updateQ = "UPDATE comments SET name ='$_POST[name]', title ='$_POST[title]', comments ='$_POST[comment]', comment_date = NOW() where ID = ( SELECT MAX(ID) order by ID desc ) ";
 	if ($conn->query($updateQ) === TRUE) 
	{
	    echo "New record created successfully";
	} 
		else
		{
		    echo "Error: " . $updateQ . "<br>" . $conn->error;
		}
	}

}//validate

//delete button
	if (isset($_POST['deleteItem'])) 
	{
 	$deleteItem = "delete from comments
order by ID desc limit 1";
 	if ($conn->query($deleteItem) === TRUE) 
	{
	    echo "New record created successfully";
	} 
		else
		{
		    echo "Error: " . $deleteItem . "<br>" . $conn->error;
		}
	}



?>

<div class="centerContaier">
<h1>Family Tree</h1>
	<ul>
		<li><a href="pages/Alex.php">Alex King</a></li>
		<li><a href="pages/Lea.php">Lea King</a></li>
		<li><a href="pages/Tom.php">Tom King</a></li>
		<li><a href="pages/Sheril.php">Sheril King</a></li>
		<li><a href="pages/Jeri.php">Jeri King</a></li>
	</ul>
<br>

	<div class="form">
		<form action="../pages/update.php" method="post" >
			<table><td>Family Member:<?php 
			familyMemberMenu('familyMember');  ?></td></table>
			<p><?php
			textInputs('name', 'Full Name');
			textInputs('age', 'Age');
			textInputs('interest', 'Interest');
			textInputs('pets', 'Pets');
			?>
			</p>

			<input type="submit" name="submit" value="Update!">
			
		</form>



	</div>
</div>
	<div class="comments">
		
	<p class="comment-form">
		<form action="" method="post">
			
				<?php
				textInputs('name','Full Name');
				textInputs('title','Title');
				?>
			<p>
				 
				<?php 
				echo 'Date: ',  date("Y/m/d H:i:s"); ?>
				
			</p>

			<p>
				Comment Here:<textarea rows="2" cols="50" name="comment" size="200" value="Comment Here"></textarea>
			</p>
		
			<input type="submit" name="submitComment" value="Comment">
		</form>
	</p>
</div>
		<!-- //update -->
		<div class="update">
		<form action="" method="post">
			<h1> Update your last post</h1>
				<?php
				textInputs('name','Full Name');
				textInputs('title','Title');
				?>
			<p>
				 
				<?php 
				echo 'Date: ',  date("Y/m/d H:i:s"); ?>
				
			</p>

			<p>
				Update Here:<textarea rows="2" cols="50" name="comment" size="200" value="Update Here"></textarea>
			</p>
		
			<input type="submit" name="update" value="update">

		</form>
		<</div>
		<div class="delete">
			<form action="" method="post">
				<h1>Delete last post</h1>
			<input type="hidden" name="id" value=".$row['id']." />			
			<input type="submit" name="deleteItem" value="delete last post">
		</form>
		</div>
	</p>
				
	
	<p class="comment-element">
		<?php
		$select = "SELECT * FROM comments";
		$result = $conn->query($select);
		if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " name: " . $row["name"]. " title: " . $row["title"]. " Date: " . $row["comment_date"]. " Comment: " . $row["comments"].    "<br/>";  
        if(isset($update))
        	{ echo $update;}
    }
} else {
    echo "0 results";
}



	

					  
				
?>




<?php
$conn->close();
		?>
	</p>
		
</div>
<footer class="footer">

	<a href="../index.php">Assignments Page</a>

	<div class="loginout">
		<?php 
		if(isset($_SESSION['loggedin']))
			$username = $_SESSION['username'];
		print "<p'>Welcome, $username</p>";

		echo '<a href="../pages/logout.php" > logout</a>';
		?>
		</div>
	<div class="lastModified"><?php
		echo "Last modified: ".date("F d Y H:i:s.",filemtime("index.php"));?>
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


</body>
</html>