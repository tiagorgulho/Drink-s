/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Login;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

public class User {
    public Connection conectarBD(){
        Connection conn = null;
        try
        {
            Class.forName("com.mysql.Driver.Manager").newInstance();
           
            conn = DriverManager.getConnection("jdbc:mysql://127.0.0.1/drinks", "root", "36621126");
                    }catch (Exception e){}
        return conn;}
    public String nome = "";
    public boolean result = false;
    
    public boolean verificarUsuario(String login, String senha){
        String sql = "";
        Connection conn = conectarBD();
        
        sql += "select nome from clientes";
        sql += "where nome = "+"'"+ login +"'";
        sql += " and senha = "+"'"+ senha +";";
        try{
            Statement st = conn.createStatement();
            ResultSet rs = st.executeQuery(sql);
            if(rs.next()){
                result = true;
                nome = rs.getString("nome");
            }
        }catch(Exception e){}
        return result;
        
    
    }
        
    
    }

