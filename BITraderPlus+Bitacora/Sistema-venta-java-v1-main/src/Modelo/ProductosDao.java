
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
public class ProductosDao {
    
    Conexion cn = new Conexion();
    Connection con;
    PreparedStatement ps;
    ResultSet rs;
    
    public boolean RegistrarProductos(Productos pro){
        String sql = "INSERT INTO productos (paridad2, porcentaje2, inversion2, ganancia2) VALUES (?,?,?,?)";
        try {
            con = cn.getConnection();
            ps = con.prepareStatement(sql);
            ps.setString(1, pro.getParidad2());
            ps.setString(2, pro.getPorcentaje2());
            ps.setString(3, pro.getInversion2());
            ps.setString(4, pro.getGanancia2());
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
    
   public List ListarProductos(){
       List<Productos> ListaPro = new ArrayList();
       String sql = "SELECT * FROM productos";
       try {
           con = cn.getConnection();
           ps = con.prepareStatement(sql);
           rs = ps.executeQuery();
           while (rs.next()) {               
               Productos pro = new Productos();
               pro.setId(rs.getInt("id"));
               pro.setParidad2(rs.getString("paridad2"));
               pro.setPorcentaje2(rs.getString("porcentaje2"));
               pro.setInversion2(rs.getString("inversion2"));
               pro.setGanancia2(rs.getString("ganancia2"));
               ListaPro.add(pro);
           }
       } catch (SQLException e) {
           System.out.println(e.toString());
       }
       return ListaPro;
   }
   
   public boolean EliminarProductos(int id){
       String sql = "DELETE FROM productos WHERE id = ?";
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
   
   public boolean ModificarProductos(Productos pro){
       String sql = "UPDATE productos SET paridad2=?, porcentaje2=?, inversion2=?, ganancia2=? WHERE id=?";
       try {
           ps = con.prepareStatement(sql);   
           ps.setString(1, pro.getParidad2());
           ps.setString(2, pro.getPorcentaje2());
           ps.setString(3, pro.getInversion2());
           ps.setString(4, pro.getGanancia2());
           ps.setInt(5, pro.getId());
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
   
   public Productos Buscarproductos(String paridad2){
       Productos pro = new Productos();
       String sql = "SELECT * FROM productos WHERE paridad2 = ?";
       try {
           con = cn.getConnection();
           ps = con.prepareStatement(sql);
           ps.setString(1, paridad2);
           rs = ps.executeQuery();
           if (rs.next()) {
               pro.setId(rs.getInt("id"));
               pro.setPorcentaje2(rs.getString("porcentaje2"));
               pro.setInversion2(rs.getString("inversion2"));
               pro.setGanancia2(rs.getString("ganancia2"));
           }
       } catch (SQLException e) {
           System.out.println(e.toString());
       }
       return pro;
   }
   
}
