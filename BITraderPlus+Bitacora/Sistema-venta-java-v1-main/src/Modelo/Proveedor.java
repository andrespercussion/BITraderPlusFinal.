
package Modelo;

public class Proveedor {
    private int id;
    private String paridad1;
    private String porcentaje1;
    private String inversion1;
    private String ganancia1;
    
    public Proveedor(){
        
    }

    public Proveedor(int id, String paridad1, String porcentaje1, String inversion1, String ganancia1) {
        this.id = id;
        this.paridad1 = paridad1;
        this.porcentaje1 = porcentaje1;
        this.inversion1 = inversion1;
        this.ganancia1 = ganancia1;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getParidad1() {
        return paridad1;
    }

    public void setParidad1(String paridad1) {
        this.paridad1 = paridad1;
    }

    public String getPorcentaje1() {
        return porcentaje1;
    }

    public void setPorcentaje1(String porcentaje1) {
        this.porcentaje1 = porcentaje1;
    }

    public String getInversion1() {
        return inversion1;
    }

    public void setInversion1(String inversion1) {
        this.inversion1 = inversion1;
    }

    public String getGanancia1() {
        return ganancia1;
    }

    public void setGanancia1(String ganancia1) {
        this.ganancia1 = ganancia1;
    }
    
}
