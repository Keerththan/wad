<%-- 
    Document   : loginProcess
    Created on : Jul 30, 2024, 12:54:41 AM
    Author     : ASUS
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="app.classes.User"%>
<%@page import="app.classes.DbConnector"%>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> </title>
    </head>
    <body>
        <%! String user_name,pass_word;%>
        <%
            
            user_name = request.getParameter("user_name");
            pass_word = request.getParameter("pass_word");
            

      User user=new User(user_name,pass_word);
       user.getData(DbConnector.getConnection());
       out.println(user.getFirstname());
        out.println(user.getLastname());
        
        
      



        %>
        
        
    </body>
</html>
