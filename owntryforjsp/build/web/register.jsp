<%-- 
    Document   : register
    Created on : Jul 29, 2024, 11:06:42 PM
    Author     : ASUS
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="app.classes.DbConnector" %>
<%@page import="app.classes.MD5" %>
<%@page import="app.classes.User" %>

<%!String username,password,firstname,lastname;%>
<%
    username=request.getParameter("username");
    firstname=request.getParameter("firstname");
    lastname=request.getParameter("lastname");
    password=MD5.getMd5(request.getParameter("password"));
%>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <%
        User user=new User(username,firstname,lastname,password);
        if(user.saveData(DbConnector.getConnection())){
            
            out.println( "Registered Sucess");
        }
        else{
            out.println( "Faild to add");
        }
        
        %>
        <h1>Hello World!</h1>
    </body>
</html>
