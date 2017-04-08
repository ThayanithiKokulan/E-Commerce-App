<?php
if(isset($_SESSION['c_userid'])){
    echo"<div align = right>";
    echo"Name: ".$_SESSION['c_userfName']." ".$_SESSION['c_userlName']."/"."Customer No:".$_SESSION['c_userid'];
    echo"</div>";
    echo "<hr></hr>";
}
?>