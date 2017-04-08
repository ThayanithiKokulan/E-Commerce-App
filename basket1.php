<?php
session_start();
//include a db.php file to connect to database
include ("db.php");

//create a variable called $pagename which contains the actual name of the page
$pagename="Ordering Basket";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";







//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
if(isset($_POST['p_quantity'])){
@$newprodid = $_POST['h_prodid'];
@$reququantity = $_POST['p_quantity'];
if(isset($_SESSION['basket'])){
   $_SESSION['basket'][$newprodid] = $reququantity;
   $message =  'Your basket has been updated.';
}else{
   $_SESSION['basket'] = [];
   $_SESSION['basket'][$newprodid] = $reququantity;
}

} else {
   $message =  'Existing basket.';
}
//include head layout 
include ("headfile.html");
//display window title
echo "<title>".$pagename."</title>";
echo "<p>".$message."</p>";

?>
<a href='clearbasket.php'>Clear basket</a>

<?php
//include head layout
include("footfile.html");

?>