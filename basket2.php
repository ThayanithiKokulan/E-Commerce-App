<?php
session_start();
//include a db.php file to connect to database
include ("db.php");

//create a variable called $pagename which contains the actual name of the page
$pagename="Ordering Basket";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";



//include head layout 
include ("headfile.html");

//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

$total=0;

if(isset($_POST['p_quantity'])){
@$newprodid = $_POST['h_prodid'];
@$reququantity = $_POST['p_quantity'];
$_SESSION['basket'][$newprodid]=$reququantity;
}

if(isset($_SESSION['basket']))
{
echo "<table border='1'>
<tr>
	<th>Product Name</th>
	<th>Price</th>
	<th>Quantity</th>
	<th>Subtotal</th>
</tr>";

//$_SESSION['basket'][$newprodid]=$reququantity;
//$itemArray = $_SESSION['basket'];

foreach($_SESSION['basket'] as $key=>$value)
{

$SQL="select prodId, prodName, prodPicName, prodDescrip , prodPrice, prodQuantity from product
where prodId=".$key.";";

$exeSQL = mysql_query($SQL) or die (mysql_error()); 

//echo "Product ID ".$key."<br>Quantity ".$value."<br><hr>";


while ($arrayprod=mysql_fetch_array($exeSQL))
{
	echo "<tr><td>";
	
	echo $arrayprod['prodName'];
	echo "</td><td>";
	echo "USD ".$arrayprod['prodPrice'];
	echo "</td><td>";
	echo $reququantity;
	echo "</td><td>";
	echo $subtotal= $arrayprod['prodPrice']*$reququantity;
	echo "</td></tr>";
	$total = $total+$subtotal;
	

}

}
echo "<hr><td colspan=3>Total</td><td>".$total."</td>";

echo "</table>";
echo "<a href='clearbasket.php'>Clear basket</a>";

}
else {
	echo "Basket is empty";
}







//include footer layout
include("footfile.html");
?>