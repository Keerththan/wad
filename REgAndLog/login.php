<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loginProcess.php" method="POST">
        <label>Username :</label>
        <input type="username" name="username"><br><br>
        <label>Password :</label>
        <input type="password" name="password"><br><br>
        <input type="checkbox" name="chkRememberMe">Remember Me<br><br>
        <input type="submit" name="btnSubmit">
        <input type="reset" name="btnreset"><br>
    </form>

   <a href="register.php">Register here</a>
    
</body>
</html>