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
 * @author HP
 */
public class DbConnector {
    private static final String DRIVER = "com.mysql.jdbc.Driver";
    private static final String URL = "jdbc:mysql://localhost:3306/music";
    private static final String DBUSER = "cst_user";
    private static final String DBPW = "cst_user";
    
    public static Connection getConenction(){
    Connection con = null;
        try {
            Class.forName(DRIVER);
            con = DriverManager.getConnection(URL, DBUSER, DBPW);
        } catch (ClassNotFoundException | SQLException ex) {
            Logger.getLogger(DbConnector.class.getName()).log(Level.SEVERE, null, ex);
        }
    return con;
    }
}
