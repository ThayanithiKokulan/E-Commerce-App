<?php
//create a variable called $pagename which contains the actual name of the page
$pagename="Login";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
echo "<table>";
echo "<form action = getlogin.php method = POST>";
echo "<tr>";
echo "<td>Email Address</td>";
echo "<td>"."<input type=text name=login_Email>"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Password</td>";
echo "<td>"."<input type=password name=login_Pass>"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td><input type=submit value=Login name=login></td>";
echo "<td><input type=reset value=ClearForm name=clear></td>";
echo "</tr>";
echo "</form>";
echo "</table>";

//include head layout
include("footfile.html");
?>
