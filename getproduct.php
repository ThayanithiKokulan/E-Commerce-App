<?php
//create a variable called $pagename which contains the actual name of the page
$pagename="New Product Confirmation";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title></br>";
//include head layout 
include ("adminheadfile.html");
include ("db.php");

//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

$prod_Name = $_POST['productName'];
$prod_Pic = $_POST['picName'];
$prod_Des = $_POST['description'];
$prod_Price = $_POST['price'];
$prod_Qty = $_POST['qty'];

$insertSQL = "INSERT 
            INTO product
            (prodId,prodName,prodPicName,prodDescrip,prodPrice,prodQuantity)
            VALUES('','$prod_Name','$prod_Pic','$prod_Des','$prod_Des','$prod_Price','$prod_Qty')"; 
		

//execute SQL query
$exeSQL=mysqli_query($conn,$insertSQL);

echo "The product has been added</br></br>";
echo "Product Name:"."$prod_Name"."</br>";
echo "Picture Name:"."$prod_Pic"."</br>";
echo "Description:"."$prod_Des"."</br>";
echo "Price:$"."$prod_Price"."</br>";
echo "Initial Quantity:"."$prod_Qty"."</br>";
//include head layout
include("footfile.html");
?>
