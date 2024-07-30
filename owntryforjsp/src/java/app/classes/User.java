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
public class User {
     private String username;
     private String firstname;
     private String lastname;
     private String password;

    public User(String username, String firstname, String lastname, String password) {
        this.username = username;
        this.firstname = firstname;
        this.lastname = lastname;
        this.password = password;
    }
      public User(String user_name, String pass_word) {
        this.username = user_name;
        this.password = pass_word;
    }
     
      public String getFirstname() {
        return firstname;
    }

    public String getLastname() {
        return lastname;
    }
   
    public boolean saveData(Connection con) throws SQLException{
      
   
             String query = "INSERT INTO user_new(fname,lname,username,password)VALUES (?,?,?,?)";
             PreparedStatement pstmt = con.prepareStatement(query);
             pstmt.setString(1, this.firstname);
             pstmt.setString(2, this.lastname);
             pstmt.setString(3, this.username);
             pstmt.setString(4, this.password);
        
        
        return pstmt.executeUpdate() > 0;
        
    }
    public void getData(Connection con) throws SQLException{
        String query="SELECT * FROM user_new WHERE username=? ";
        PreparedStatement pstmt=con.prepareStatement(query);
        pstmt.setString(1,this.username);
        ResultSet rs=pstmt.executeQuery();
       
        
        if (rs.next()) {
                    
                    this.firstname=rs.getString("fname");
                    this.lastname=rs.getString("lname");
                   
                }
        
        
     
    }
    
    
     
     
    
    
    
    
}
