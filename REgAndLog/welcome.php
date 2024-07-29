<?php
session_start();
if(isset($_SESSION['uname'])){
 $fname = $_SESSION['fname'];
 $lname = $_SESSION['lname'];
}
elseif(isset($_COOKIE['u_name'])){
    $fname = $_COOKIE['f_name'];
    $lname = $_COOKIE['l_name'];
}
else{
    header("location:login.php");
    exit();
} 

 echo "<h2>Welcome to Web Application Development</h2><br>";
 echo "Hello, $fname $lname<br>";
 echo "<a href='login.php'>Logout</a>";

?>