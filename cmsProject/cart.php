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

if (isset($_POST["addToCart"]))
{
	if(isset($_SESSION["cart"]))
	{


		$itemArrayid = array_column($_SESSION["cart"], "itemId");

		if(!in_array($_POST["hiddenID"], $itemArrayid))
		{
			$count = count($_SESSION["cart"]);
			$itemArray = array
		(
			'ID' => trim($_POST['hiddenID']),
			'name' => trim($_POST['hiddenName']),
			'price' => trim($_POST['hiddenPrice']),
			'qty' => trim($_POST['qty']),
		);
		$_SESSION["cart"][$count] = $itemArray;
		$query = "INSERT INTO products (ID, name, price, quantity)
			VALUES ('ID', 'name', 'price', 'qty')";


		}
	}
	else
	{
		$itemArray = array
		(
			'ID' => $_POST['hiddenID'],
			'name' => $_POST['hiddenName'],
			'price' => $_POST['hiddenPrice'],
			'qty' => $_POST['qty'],
		);
	$_SESSION["cart"][0] = $itemArray;
	}
	//session set
}//cart set

	if(isset($_GET["action"]))
	{
		if ($_GET["action"] == "delete")
		{
			foreach ($_SESSION["cart"] as $key => $values) {
				if($values["ID"] == $_GET["ID"])
				{
					unset($_SESSION["cart"][$key]);
					$remove = "DELETE FROM products WHERE ID= '$ID'";
					echo "Item removed";
					header("location: cart.php");

				}
			}
		}
	}

	if (isset($_POST['emptyCart']))
			{
				session_destroy();
				header('Location: cart.php');
				$delete = "TRUNCATE shopping_cart";
			}

?>


<div>
	<table>
		<tr>
			<th>Name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Total</th>
			<th>Action</th>
			

		</tr>
		<?php
			if(!empty($_SESSION["cart"]))
			{
				$subTotal = 0;

				foreach ($_SESSION["cart"] as $key => $values) 
				{
					?>
					<tr>
						<td><?php
						echo $values["name"];
						?></td>
						<td><?php
						echo $values["qty"];
						?></td>
						<td><?php
						echo $values["price"];
						?></td>
						<td><?php
						echo number_format($values["qty"] * $values["price"], 2);
						?></td>
						<td><a href="cart.php?action=delete&ID=<?php echo $values["ID"]; ?>"><span class="text-danger">Remove</span></a></td>  
					</tr>

					<?php
					$subTotal = $subTotal + ($values["qty"] * $values["price"]);

				} //foreach
				?> 

				<tr>
					<td align="right">SubTotal</td>
					<td align="right">$ <?php echo number_format($subTotal,2); ?></td>
				</tr>
				<tr>
					<td align="right">Tax</td>
					<td align="right">7.5%</td>
				</tr>
				<tr>
					<td align="right">Total</td>
					<td align="right">$ <?php $tax=.075; $total = $subTotal * $tax + $subTotal;
					echo number_format($total, 2); ?></td>
				</tr>
				<tr>
					<td><form action="" method="post"><input type="submit" name="emptyCart" value="Empty Cart" align="right"></form></td>
				</tr>
				
<?php
			}
		?>
	</table>

	<?php

	?>
</div>









	<!-- <?php
	include '../cmsProject/menu.php';
	
	if(!isset($_SESSION['SessionCart'])){ $_SESSION['SessionCart'] = array();}
	$itemArray = array
		(
			'name' => $_POST['name'],
			'price' => $_POST['price'],
			'qty' => $_POST['qty'],
		);

	$_SESSION['SessionCart'][] = $itemArray;

	if (isset($_POST['update']))
		{
			foreach ($_POST['postQty'] as $quantiyID => $quantity) {	
					if($quantity == 0)	
					{unset($_SESSION['SessionCart'][$quantiyID]);}	
					 else if ($quantity >=1)
					{
						$_SESSION['SessionCart'][$quantiyID ]['qty'] = $quantity;
					}
			}
					header('Location:' .$_SERVER['PHP_SELF']);		
		}
	else if (isset($_POST['delete']))
			{
				session_destroy();
				header('Location: cart.php');
			}	
?>
	<div class="shoppingCart">
		<form action="cart.php" method="post" name="shoppingCart">

			<table>
				<tr>
					<td><h1>Shopping cart</h1></td>
				</tr>
			</table>
			<table width="500" border="2">
				<tr>
					<th scope="col">Name</th>
					<th scope="col">Price</th>
					<th scope="col">Quantity</th>
					<th scope="col">Cost</th>
				</tr>
				<?php
				$totalp = 0;
				foreach ($_SESSION['SessionCart'] as $cartID => $cartItem) 
				{
					
				

				?>

				<tr id="item<$php echo $cartID;?>">
					<td><?php echo $cartItem['name'];  ?></td>
					<td><?php echo $cartItem['price'];  ?></td>
					<td><input type="text" 
						name="postQty[<?php echo $cartID; ?>]" 
						id="item_<?php echo $cartID;?>qty" 
						value="<?php echo $cartItem['qty']; ?>" 
						size="2" maxlength="4">
					</td>
					<td>  <?php
					$total = array('price' => 
						$cartItem['price'],
						'qty' => $cartItem['qty']
						
				);
						$totalu = $cartItem['price'] * $cartItem['qty'];
					
						$totalp+=$totalu;
						echo $totalu;
					?>
						
					</td>

				</tr>
				
				<?php
			}

			?>
			<tr>
					<td>Total:</td>
					<td></td>
					<td></td>
					<td>
					<?php 
						echo $totalp;
				  	?></td>

			</tr>
				

			</table>
			<input type="submit" name="update" value="update cart">
			<input type="submit" name="delete" value="empty cart">
			
		</form>
		
	</div>
 -->
</body>
<?php
	include '../cmsProject/footer.php';
	?>
</html>