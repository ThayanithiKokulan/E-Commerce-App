<?php
//create a variable called $pagename which contains the actual name of the page
$pagename="Add New Product";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("adminheadfile.html");

//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
echo"<table>";
echo "<form action = getproduct.php method = POST>";    
    echo"<tr>";	
		echo"<td>Product Name</td>";
		echo"<td>"."<input type=text name=productName>"."</td>";
    echo"</tr>";

    echo"<tr>";	
		echo"<td>Picture Name</td>";
		echo"<td>"."<input type=text name=picName>"."</td>";
    echo"</tr>";

    echo"<tr>";	
		echo"<td>Description</td>";
		echo"<td>"."<input type=text name=description>"."</td>";
    echo"</tr>";

    echo"<tr>";	
		echo"<td>Price</td>";
		echo"<td>"."<input type=text name=price>"."</td>";
    echo"</tr>";

    echo"<tr>";	
		echo"<td>Initial Quantity</td>";
		echo"<td>"."<input type=text name=qty>"."</td>";
    echo"</tr>";

    echo "<tr>";
        echo "<td><input type=submit value=Add Product name=addProduct></td>";
        echo "<td><input type=reset value=ClearForm name=clear></td>";
    echo "</tr>";

echo"</table>";
//include head layout
include("footfile.html");
?>
