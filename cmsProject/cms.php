<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	include '../cmsProject/header.php'
	?>
<link rel="stylesheet" type="text/css" href="../css/cms.css">


	

<body>
	<div id="menu">
		<?php
	$servername = "localhost";
$dbusername = "rking_rking";
$password = "Jrrtk123";
$dbname = "rking_goodsamaritan";
$conn = new mysqli($servername, $dbusername, $password, $dbname);

		include '../cmsProject/menu.php';
		$query = "SELECT username from users";
		
		?>
	</div>
		
	<div class="center-container-cms">
		<h1 class="center-container-cms" >The Good Samaritan</h1>
		<h3 class="center-container-cms" >Christain venue and music shop</h3>
		<div class="row-photos-gallary">
  <div class="column-photos-gallary">
    <div class="content-photos">
      <img src="../../img/daniel-wirtz-368992.jpg"  style="width:100%">
      
    </div>
		</div>
		<div class="column-photos-gallary">
    <div class="content-photos">
      <img src="../../img/marcus-neto-96651.jpg"  style="width:100%">
      
    </div>
		</div>
		<div class="column-photos-gallary">
    <div class="content-photos">
      <img src="../../img/gabriel-gurrola-57448.jpg"  style="width:100%">
      
    </div>
		</div>
		
		</br>
		
		


	</div>
	<div class="events-cms">
			<h3>Up Coming Events</h3><br>
			<ul>
				<li>9/23/17  - Guitar auction</li>
				<li>10/04/17 - HillSong</li>
				<li>10/15/17 - Rend Collective</li>
				<li>10/25/17 - Equitment Expo</li>
			</ul>
			<p>Do you want to book a show<br> or event at our location?</p>
			
		</div>

	<div id="footer">
		<?php
		include '../cmsProject/footer.php'
		?>
	</div>
</body>
</html>