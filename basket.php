<?php

session_start();

include("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Ordering Basket";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";

//include head layout
include("headfile.html");
include("detectlogin.php");
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

$total = 0;
$subTotal = 0;
//$_SESSION['basket'][0] = 0;

if(!isset($_POST['h_prodid'])){
	echo "Existing Basket";
		
}

else{
	
	$newprodid = $_POST['h_prodid'];
	$reququantity = $_POST['quantity'];

	$_SESSION['basket'][$newprodid] = $reququantity;
	
	echo "Your basket has been updated";
	
	echo"<table>";
	
	echo"<th> Product Name </th>";
	
	echo"<th> Price</th>";
	
	echo"<th> Quantity</th>";
	
	echo"<th> Sub Total</th>";
	//print_r($_SESSION['basket']);
	
	foreach($_SESSION['basket'] as $id => $quantity){
		
		$SQL = "select 
		prodName,prodPrice from product
		where prodId="."'$id'";

		//execute SQL query
		$exeSQL=mysqli_query($conn,$SQL) or die(mysqli_error($conn));
	
		//create array of records & populate it with result of the execution of the SQL query
		$prod=mysqli_fetch_array($exeSQL);	
		
		$prodName = $prod['prodName'];

		$prodPrice = $prod['prodPrice'];
		
		echo"<tr>";
		
		echo"<td>$prodName</td>";
		
		echo'<td>'.'GBP '.$prodPrice.'</td>';
		
		echo"<td>$quantity</td>";
		$subTotal = $prodPrice * $quantity;
		echo'<td>'.'GBP '.$subTotal.'</td>';
		
		echo"</tr>";
		
		$total += $subTotal;
	
	}
		echo"<tr>";
		
		echo"<td colspan =". '3'.">Total</td>";

		echo"<td>"."GBP ".$total."</td>";

		echo"</tr>";

		echo"</table>";

		echo"<a href ="."clearbasket.php".">Clear Basket</a></br></br>";
		
		if(isset($_SESSION['c_userid'])){
			echo"To finalise your order <a href=checkout.php>Checkout</a>";
		}

		else{
			echo"New workedUp Customers <a href ="."register.php".">Register</a></br>";
			echo"Registered workedUp Members <a href ="."login.php".">Login</a></br>";
		}
		
	//include head layout
	include("footfile.html");	
}
?>