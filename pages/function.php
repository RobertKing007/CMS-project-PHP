<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="../css/Variables.css">

<head>
</head>
<body>
<?php

//checks login info
function login($username, $password)
 {
 
		if(strtolower(($_POST['username']) == 'admin') && ($_POST['password'] == 'admin'))
		{
				session_start();
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['loggedin'] = time();
				ob_end_clean();
				header('Location: ../Variables.php');
				exit();

		}
		else if(strtolower(($_POST['username']) == 'customer') && ($_POST['password'] == 'customer'))
		{
				session_start();
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['loggedin'] = time();
				ob_end_clean();
				header('Location: ../Variables.php');
				exit();

		}
		else {
			 print '<p> invalid login try again</p>';
			 echo '<a href="../pages/VariablesLoginCheck.php">Try Again</a>';
			
		};
		if(isset($_SESSION['loggedin']))
		{
			echo '<a href="<?php> unset($_SESSION["loggedin"]); 
	$_SESSION["loggedin"] = "false";
	} ?>">logout</a>';
		}
	}

//text box creation and variables. note the session if/else statement for the admin rights
function textInputs($name, $label)
		{
			
			
			print '<p><label>' .$label. ': ';
			if($_SESSION['username'] == 'admin')
				{
				print '<input type="text" name="'.$name.'"  size="20">';
				}
			elseif($_SESSION['username'] != 'admin')
				{
					print '<input type="text" name="'.$name.'" readonly size="20">';
				}
			
		}

//creation on family member select
function familyMemberMenu($option)
		{
			$_POST['test'] = '';
			$familyMember = array
			( 1 => 'Select a Name',  2 =>'Alex', 3 =>'Jeri', 4 =>'Lea', 5 =>'Sheril', 6 => 'Tom');
			print '<select name="familyMember">';

			foreach ($familyMember as $key => $value) 
						{
							print "<option name='test'>$value</option>";
							print $option;
						}

			print '</select>';
			$option = isset( $_POST['familyMember']);
		}

//logout
function logout()
		{
			session_start();
			session_destroy();
			header("Location:../pages/VariablesLoginCheck.php");
		}


?>


	<div id="footer">
		
	</div>
</body>
</html>