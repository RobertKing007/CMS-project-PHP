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
	$connect = new mysqli($servername, $dbusername, $password, $dbname);
		$query = "SELECT * from products ORDER BY id ASC ";
		$result = mysqli_query($connect, $query);


if(mysqli_num_rows($result) > 0)  
                {  
          while($row = mysqli_fetch_array($result))  
                     {  
                     	
                ?> 
                <div class="">  
                     <form method="post" action="cart.php">  
                          <div>  
                               <!-- <img src="<?php echo $row["img"]; ?>" /> -->
                               <br />  

                               <h4 ><?php echo $row["name"]; ?>
                               	
                               </h4>
                               <h4>$ <?php echo $row["product_desc"]; ?>
                               	
                               </h4>  
                               <h4>
                               	$ <?php echo $row["price"]; ?>
                               		
                               	</h4> 
                               	<input type="hidden" value="<?php echo $row["ID"]; ?>" name="hiddenID"> 
                               <input type="text" name="qty"  value="1">  
                               <input type="hidden" name="hiddenName" value="<?php echo $row["name"]; ?>" >  
                               <input type="hidden" name="hiddenPrice" value="<?php echo $row["price"]; ?>">  
                               <input type="submit" name="addToCart"  value="Add to Cart" />
                               
                          </div>  
                     </form> 

                     <form action="deleteItem.php" method="post"><?php 
                               if(isset($_SESSION['username'])){
                               if ($_SESSION['username'] == "admin")
                               {
                               	?>
                               	<input type="hidden" value="<?php echo $row["name"];?>" name="hiddenName">
                               	<input type="submit" name="deleteItem" value="Delete This Item">
                            <?php
                               }
                               }
                            ?>  
                        </form> 
                        <form action="addNewItem.php" method="post">
                        	<?php
                        	if(isset($_SESSION['username'])){
                        	if ($_SESSION['username'] == "admin" || $_SESSION['username'] == "publisher" )
                               {
                               	?>
                               	<input type="submit" name="addNewItem" value="Add New Item">
                            <?php
                               }
                               }
                            ?>  
                        	
                        </form>
                         

                </div>
                <form action="updatePrice.php" method="post">
                        	<?php
                        	
                        	if(isset($_SESSION['username'])){
                        	if ($_SESSION['username'] == "admin" || $_SESSION['username'] == "publisher" )
                               {
                               	?>
                               	<input type="text" name="newPrice" value=""> 
                               	<input type="hidden" value="<?php echo $row["name"]; ?>" name="hiddenName">
                               	<input type="submit" name="update" value="update price">
                            <?php
                               }
                               }?>
                               </form> 
                               
                        	
                          
                <?php  
                     } //while loop
                     if(isset($_post['deleteItem']))
			{
				$remove = "DELETE FROM products WHERE ID=$row ";
			}
			
                 }// if rows 
                       
                ?>  
		
	<div id="footer">
		<?php
		include '../cmsProject/footer.php'
		?>
	</div>
</body>
</html>