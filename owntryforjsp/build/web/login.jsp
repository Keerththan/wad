<%-- 
    Document   : login
    Created on : Jul 30, 2024, 12:49:58 AM
    Author     : ASUS
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <h1>This is login page</h1>
        <form action="loginProcess.jsp" method="POST">
                <table>
                    
                     
                     <tr>
                        <td>Username</td>
                        <td><input type="text" name="user_name" value="" /></td>
                    </tr>
                     <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass_word" value="" /></td>
                    </tr>
                     <tr>
                        <td></td>
                        <td><input type="submit" value="Login" /></td>
                    </tr>
                </table>
                
                
                
            </form>
            <a href="index.html" > Register page</a>
    </body>
</html>
