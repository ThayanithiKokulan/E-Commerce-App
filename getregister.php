<?php
session_start();
include("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Registration Confirmation";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

$fName = $_POST['fName'];
$lName = $_POST['lName'];
$address = $_POST['address'];
$pCode = $_POST['pCode'];
$tNo = $_POST['tNo'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$c_Pass = $_POST['c_Pass'];

if(empty($fName)||empty($lName)||empty($address)||empty($pCode)||empty($tNo)||empty($email)||empty($pass)||empty($c_Pass)){
	echo "All Fields are Compulsory</br>";
	echo "Go back to ";
    echo "<a href=register.php>Register</a>";	
	}

else{
	
	$pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
	$result = preg_match($pattern,$email);
	
	if($result == 0){
		echo "Email not valid </br>";
		echo "Go back to ";
		echo "<a href=register.php>Register</a>";
	}
	
	else{
	if($pass != $c_Pass){
		echo "The 2 passwords you entered do not match</br>";
		echo "Please make sure you enter them correctly</br>";
		echo "<a href=register.php>Go back to Register</a>";
	}

else{

    $SQL = "INSERT 
            INTO users
            (userId,UsersType,UsersFName,UsersLName,UsersAddress,UsersPostCode,UsersTelNo,UsersEmail,UsersPassword)
            VALUES('','','$fName','$lName','$address','$pCode',$tNo,'$email','$pass')"; 
		

    //execute SQL query
    $exeSQL=mysqli_query($conn,$SQL);
    
    if(mysqli_errno($conn) == 0){
        echo "You have Sucessfully registered in the system</br>";
        echo "To continue, please";
        echo "<a href=login.php>login</a>";
    }
    else{
        if(mysqli_errno($conn) == 1062){
            echo "There is an error with your registration</br>";
            echo "The email you entered already exists</br>";
            echo "Go back to ";
            echo "<a href=register.php>Register</a>";
        }
    }
}
	}
}
die();
    //include head layout
include("footfile.html");
?>
