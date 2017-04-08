<?php
session_start();
include("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Login Confirmation";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

$login_Email = $_POST['login_Email'];
$login_Pass = $_POST['login_Pass'];


if(empty($login_Email)||empty($login_Pass)){
	echo "Your form is incomplete</br>";
	echo "Please fill in all the required details</br>";
	echo "Go back to ";
    echo "<a href=login.php>Login</a>";	
	}

else{	
	$pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
	$result = preg_match($pattern,$login_Email);
	
	if($result == 0){
		echo "Email not valid </br>";
		echo "Go back to ";
		echo "<a href=login.php>Login</a>";	
	}
	
else{

    $SQL = "select userId,userType,UsersFName,UsersLName,UsersEmail,UsersPassword FROM users
			WHERE UsersEmail="."'$login_Email'"; 
		
    //execute SQL query
    $exeSQL=mysqli_query($conn,$SQL)or die(mysqli_error($conn));

    $thearraylogin=mysqli_fetch_array($exeSQL);
    
    $log_Email = $thearraylogin['UsersEmail'];
    $log_Pass = $thearraylogin['UsersPassword'];
    $log_Id = $thearraylogin['userId'];
    $log_FName = $thearraylogin['UsersFName'];
    $log_LName = $thearraylogin['UsersLName'];
	$log_UserType = $thearraylogin['userType']; 

    if($log_Email != $login_Email){
            echo "Sorry, the email you entered was not recognized</br>";
            echo "Go back to ";
            echo "<a href=login.php>login</a>";
    }
    else{

        if($log_Pass != $login_Pass){
            echo "Sorry, the password you entered is not valid</br>";
            echo "Go back to ";
            echo "<a href=login.php>login</a>";
        }

        else{
            $_SESSION['c_userid'] = $log_Id;
            $_SESSION['c_userfName'] = $log_FName;
            $_SESSION['c_userlName'] = $log_LName;
			$_SESSION['userType'] = $log_UserType;
            
			if($_SESSION['userType'] == 'C'){
				echo "Hello,".$_SESSION['c_userfName']." ".$_SESSION['c_userlName']."</br>";
				echo "You have Sucessfully logged into the system as a customer!</br></br>";
				echo "To continue shopping <a href=index.php>Index</a></br>";
				echo "To view your basket <a href=basket.php>My Basket</a>";
			}
			
			else{
				echo "Hello,".$_SESSION['c_userfName']." ".$_SESSION['c_userlName']."</br>";
				echo "You have Sucessfully logged into the system as an Administrator!</br></br>";
				echo "Access the <a href=adminmenu.php>Admin Menu</a>";
			}

        }
    }
}
	}
    //include head layout
include("footfile.html");
die();
?>
