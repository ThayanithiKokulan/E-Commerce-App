<?php
session_start();

//create a variable called $pagename which contains the actual name of the page
$pagename="Customer Registration";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";


//display name of the page and some random text
 echo"<fieldset style=width:30%><legend>Registration Form</legend>";

 echo"<table>";
    echo"<form action=getregister.php method=get enctype=text/plain>";
    
    echo"<tr><td> First name : </td><td><input type=text name=fname ></td></tr>  ";
	echo"<br><br>";
	echo"<tr><td> Last name :</td><td>  <input type=text name=lname></td></tr>  ";
	echo"<br><br>";
    echo"<tr><td> Address :</td><td> <input type=text name=address></td></tr>  ";
    echo"<br><br>";
	echo"<tr><td> E-mail :</td><td><input type=email name=email required></td></tr>  ";
	echo"<tr><td> Postcode : </td><td><input type=text name=pcode required></td></tr>  ";
	echo"<br><br>";
    echo"<tr><td>Tel Number :</td><td>  <input type=text name=telno></td></tr>  ";
	echo"<br><br>";
	echo" <tr><td>Password: </td><td> <input type=text name=password required></td></tr>  ";
	echo"<br><br>";
	echo"<tr><td> Confirm Password:</td><td> <input type=text name=conpassword required>  </td></tr>  ";
	echo"<br><br>";
	
	
	
	echo"<tr><td> <input type=submit value=Register  color: white;font-size: 18px;font-weight: bold;cursor: pointer;></td>";
	echo"<td><input type=reset value=Clear Form  style=width:50;padding: 10px 45px;background-color: grey;border: none;color: white;margin-bottom: 10px;margin-left: 10px;font-size: 18px;font-weight: bold;cursor: pointer;></td>";
	echo"</tr><br><br>";
	
 echo"</form>";	
 echo"</table>";
 echo"</fieldset>";


//include head layout
include("footfile.html");
?>
