<?php
//create a variable called $pagename which contains the actual name of the page
$pagename="Welcome to workedUP!";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");


//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
echo "<P>Welcome to workedUp, an amazing place to purchase mobile phones at a very competitive price</p>";
echo "<hr>";
echo "Adminstrators: <a href=login.php>Admin Login</a></br></br>";
echo "workedUP friends: <a href=index.php>Go to our Index Page</a>";
//include head layout
include("footfile.html");
?>
