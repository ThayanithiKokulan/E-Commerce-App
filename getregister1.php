<?php
session_start();
$_SESSION['message'] = '';
include('db.php');

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//create a variable called $pagename which contains the actual name of the page
$pagename="Registration Confirmation";

//display window title
echo "<title>".$pagename."</title>";
//include head layout
include ("headfile.html");
echo "<p></p>";

//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
 //set all the post variables
		 
       $f_name =$_POST['f_name'] ;
		$l_name = $_POST['l_name'];
		$address = $_POST['address'];
		$post_code = $_POST['post_code'];
		$tel_no = $_POST['tel_no'];
        $email = $_POST['email'];
        $password = $_POST['password']; 
		$conpassword = $_POST['c_password']; 


           if(empty($f_name)||empty($l_name)||empty($address)||empty($post_code)||empty($tel_no)||empty($email)||empty($password)||empty($conpassword) ){
			echo "All fields are compulsory";
            echo"<p>Go back to</p><a href='register.php'>Register</a>";
            }
			else if($password==$conpassword) {
		    //insert user data into database
                $SQL = "INSERT INTO users (userFName,userSName,userAddress,userPostCode,userTelNo,userEmail,userPassword ) "
                        . "VALUES ('$f_name', '$l_name', '$address', '$post_code', '$tel_no','$email','$password')";
                
                $exeSQL=mysql_query($SQL) or die (mysql_error());
				 echo "You have registered sucessfully";
				 echo"<p>To continue,please<br></p><a href='login.php'>Login</a>";
				 
			} else{
            echo "<p>the two password you enterde do no match";
            echo "<p>please make sure you entered the correcly";
            echo "<p>Go back<a href='register.php'>Register</a></p>";





}
               



//include head layout
include("footfile.html");

?>