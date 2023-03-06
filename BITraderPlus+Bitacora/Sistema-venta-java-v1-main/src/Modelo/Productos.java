
package Modelo;

/**
 *
 * @author USUARIO
 */
public class Productos {
    private int id;
    private String paridad2;
    private String porcentaje2;
    private String inversion2;
    private String ganancia2;

    public Productos() {
    }

    public Productos(int id, String paridad2, String porcentaje2, String inversion2, String ganancia2) {
        this.id = id;
        this.paridad2 = paridad2;
        this.porcentaje2 = porcentaje2;
        this.inversion2 = inversion2;
        this.ganancia2 = ganancia2;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getParidad2() {
        return paridad2;
    }

    public void setParidad2(String paridad2) {
        this.paridad2 = paridad2;
    }

    public String getPorcentaje2() {
        return porcentaje2;
    }

    public void setPorcentaje2(String porcentaje2) {
        this.porcentaje2 = porcentaje2;
    }

    public String getInversion2() {
        return inversion2;
    }

    public void setInversion2(String inversion2) {
        this.inversion2 = inversion2;
    }

    public String getGanancia2() {
        return ganancia2;
    }

    public void setGanancia2(String ganancia2) {
        this.ganancia2 = ganancia2;
    }
    
}