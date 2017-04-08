<?php
session_start();
//create a variable called $pagename which contains the actual name of the page
$pagename="Register and create a workedUp account";

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
echo "<form action = getregister.php method = POST>";
echo "<tr>";
echo "<td>First Name</td>";
echo "<td>"."<input type=text name=fName>"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Last Name</td>";
echo "<td>"."<input type=text name=lName>"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Address</td>";
echo "<td>"."<input type=text name=address>"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>PostCode</td>";
echo "<td>"."<input type=text name=pCode>"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Tel No</td>";
echo "<td>"."<input type=tel maxlength=10 pattern=[0-9]{10} name=tNo>"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Email Address</td>";
echo "<td>"."<input type=text name=email>"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Password</td>";
echo "<td>"."<input type=password name=pass>"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Confirm Password</td>";
echo "<td>"."<input type=password name=c_Pass>"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td><input type=submit value=Register name=register></td>";
echo "<td><input type=reset value=ClearForm name=clear></td>";
echo "</tr>";
echo "</form>";
echo "</table>";


//include head layout
include("footfile.html");
?>
