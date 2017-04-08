<?php
//create a variable called $pagename which contains the actual name of the page
$pagename="Admin menu";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("adminheadfile.html");

//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
echo "This is your admin menu, select from one of the options above on the navigation bar.";

//include head layout
include("footfile.html");
?>
