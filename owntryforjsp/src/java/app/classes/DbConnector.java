/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package app.classes;
import java.sql.*;
import java.util.logging.Level;
import java.util.logging.Logger;



/**
 *
 * @author ASUS
 */
public class DbConnector {
    
    final static String URL="jdbc:mysql://localhost:3306/lecture4db";
    final static String USER="root";
    final static String PASSWORD="";
    final static String DRIVER="com.mysql.jdbc.Driver";
    
   
    public static Connection getConnection() throws SQLException{
       Connection con=null;
       
        try {
            Class.forName(DRIVER);
            con=DriverManager.getConnection(URL,USER,PASSWORD);
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(DbConnector.class.getName()).log(Level.SEVERE, null, ex);
        }
       
       return con;
        
        
        
    }
   

}
