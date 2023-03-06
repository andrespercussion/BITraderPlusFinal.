/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Modelo;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import javax.swing.JOptionPane;

/**
 *
 * @author USUARIO
 */
public class ClienteDao {
    
    Conexion cn = new Conexion();
    Connection con;
    PreparedStatement ps;
    ResultSet rs;
    
    public boolean RegistrarCliente(Cliente cl){
        String sql = "INSERT INTO clientes (paridad, porcentaje, inversion, ganancia) VALUES (?,?,?,?)";
        try {
            con = cn.getConnection();
            ps = con.prepareStatement(sql);
            ps.setString(1, cl.getParidad());
            ps.setString(2, cl.getPorcentaje());
            ps.setString(3, cl.getInversion());
            ps.setString(4, cl.getGanancia());
            ps.execute();
            return true;
        } catch (SQLException e) {
            JOptionPane.showMessageDialog(null, e.toString());
            return false;
        }finally{
            try {
                con.close();
            } catch (SQLException e) {
                System.out.println(e.toString());
            }
        }
    }
    
   public List ListarCliente(){
       List<Cliente> ListaCl = new ArrayList();
       String sql = "SELECT * FROM clientes";
       try {
           con = cn.getConnection();
           ps = con.prepareStatement(sql);
           rs = ps.executeQuery();
           while (rs.next()) {               
               Cliente cl = new Cliente();
               cl.setId(rs.getInt("id"));
               cl.setParidad(rs.getString("paridad"));
               cl.setPorcentaje(rs.getString("porcentaje"));
               cl.setInversion(rs.getString("inversion"));
               cl.setGanancia(rs.getString("ganancia"));
               ListaCl.add(cl);
           }
       } catch (SQLException e) {
           System.out.println(e.toString());
       }
       return ListaCl;
   }
   
   public boolean EliminarCliente(int id){
       String sql = "DELETE FROM clientes WHERE id = ?";
       try {
           ps = con.prepareStatement(sql);
           ps.setInt(1, id);
           ps.execute();
           return true;
       } catch (SQLException e) {
           System.out.println(e.toString());
           return false;
       }finally{
           try {
               con.close();
           } catch (SQLException ex) {
               System.out.println(ex.toString());
           }
       }
   }
   
   public boolean ModificarCliente(Cliente cl){
       String sql = "UPDATE clientes SET paridad=?, porcentaje=?, inversion=?, ganancia=? WHERE id=?";
       try {
           ps = con.prepareStatement(sql);   
           ps.setString(1, cl.getParidad());
           ps.setString(2, cl.getPorcentaje());
           ps.setString(3, cl.getInversion());
           ps.setString(4, cl.getGanancia());
           ps.setInt(5, cl.getId());
           ps.execute();
           return true;
       } catch (SQLException e) {
           System.out.println(e.toString());
           return false;
       }finally{
           try {
               con.close();
           } catch (SQLException e) {
               System.out.println(e.toString());
           }
       }
   }
   
   public Cliente Buscarcliente(String paridad){
       Cliente cl = new Cliente();
       String sql = "SELECT * FROM clientes WHERE paridad = ?";
       try {
           con = cn.getConnection();
           ps = con.prepareStatement(sql);
           ps.setString(1, paridad);
           rs = ps.executeQuery();
           if (rs.next()) {
               cl.setId(rs.getInt("id"));
               cl.setPorcentaje(rs.getString("porcentaje"));
               cl.setInversion(rs.getString("inversion"));
               cl.setGanancia(rs.getString("ganancia"));
           }
       } catch (SQLException e) {
           System.out.println(e.toString());
       }
       return cl;
   }
   
}
