<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registerProcess.php" method="POST">
        <label for="fname">First Name</label>
        <input type="text" id="fname"name="fname" required><br><br>
        <label for="">last Name</label>
        <input type="text" id="lname"name="lname" required><br><br>
        <label for="">User Name</label>
        <input type="text" id="username"name="username" required><br><br>
        <label for="">Password</label>
        <input type="passwod" id="password" name="password" required><br><br>
        <input type="submit" value="register"><br>

    </form>
    <a href="login.php">Login here</a>
    
</body>
</html>