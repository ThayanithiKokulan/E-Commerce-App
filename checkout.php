<?php
session_start();
include("db.php");
include("detectlogin.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Check Out Confirmation";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include("headfile.html");

//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
$_total = 0;
$_subTotal = 0;
$_date = date('Y-m-d H:i:s');
$_userId = $_SESSION['c_userid'];

$SQL = "INSERT 
            INTO orders
            (orderNo,userId,orderDateTime,orderTotal)
            VALUES('','$_userId','$_date','$_total')"; 
		

    //execute SQL query
    $exeSQL=mysqli_query($conn,$SQL);
    
    if(mysqli_errno($conn) == 0){
        $maxSQL ="Select orderNo from orders where userId = "."'$_userId' order by MAX(orderDateTime)"; 

		//execute SQL query
		$exemaxSQL=mysqli_query($conn,$maxSQL) or die(mysqli_error($conn));
	
		//create array of records & populate it with result of the execution of the SQL query
		$maxArray=mysqli_fetch_array($exemaxSQL);
		
		$_orderNo = $maxArray['orderNo'];
		
		echo"<strong>Your order has been placed successfully</br></br>";
		echo"ORDER NO:"."$_orderNo"."</strong>";
		
	$newprodid = $_POST['h_prodid'];
	$reququantity = $_POST['quantity'];

	$_SESSION['basket'][$newprodid] = $reququantity;
	
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
	
    }
    else{
        if(mysqli_errno($conn) == 1062){
            echo "There is an error with Check out Please Try Again</br>";
        }
	}
//include head layout
include("footfile.html");
?>