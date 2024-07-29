<?php
require './DbConnector.php';
$dbcon=new DbConnector();
$con=$dbcon->getConnection();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

$query="INSERT INTO user_new (username,password,fname,lname) VALUES (?,?,?,?)";
try{
    $stmt=$con->prepare($query);
    $stmt->bindParam(1,$username);
    $stmt->bindParam(2,$password);
    $stmt->bindParam(3,$fname);
    $stmt->bindParam(4,$lname);

    

if($stmt->execute()){
    echo" User added Successfull";
    echo "<a href='login.php'>Login</a>";
}else{
    echo "Error occurred";
}


}

catch (PDOException $exc) {
    die("Error in query: " . $exc->getMessage());
}

?>