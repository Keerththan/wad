<?php
require './DbConnector.php';
session_start();
if(isset($_SESSION['uname'])|| isset($_COOKIE['u_name'])){

    header("location:welcome.php");
    exit();


}
else{


 $username=$_POST['username'];
 $password=$_POST['password'];

$dbcon=new DbConnector();
$con=$dbcon->getConnection();

$query="SELECT * FROM user_new WHERE username=? ";

try{
    $pstmt=$con->prepare($query);
    $pstmt->bindValue(1,$username);
    $pstmt->execute();

    $row=$pstmt->fetch(PDO::FETCH_OBJ);
    if(!empty($row)){
        $pwdhash=$row->password;
        if(password_verify($password,$pwdhash)){
            $_SESSION['uname']=$username;
            $_SESSION['fname']=$row->fname;
            $_SESSION['lname']=$row->lname;
           
            if(isset($_POST['choRememberMe'])){

                setcookie('u_name',$username,time()+30,'/');
                setcookie('f_name',$row->fname,time()+30,'/');
                setcookie('l_name',$row->fname,time()+30,'/');
            }

            header("location:welcome.php");
            exit();
        }
        else{
           echo "Login unsuccessful<br>";
           echo "<a href='login.php'>Back to Login</a>";
        }
    }
    else{
        
         header("location:login.php");
         exit();
    }
    


}
catch(PDOException $ex){
    die("faild".$ex->getMessage());
}



}


?>