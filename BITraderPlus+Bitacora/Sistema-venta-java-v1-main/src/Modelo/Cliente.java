/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Modelo;

/**
 *
 * @author USUARIO
 */
public class Cliente {
    private int id;
    private String paridad;
    private String porcentaje;
    private String inversion;
    private String ganancia;

    public Cliente() {
    }

    public Cliente(int id, String paridad, String porcentaje, String inversion, String ganancia) {
        this.id = id;
        this.paridad = paridad;
        this.porcentaje = porcentaje;
        this.inversion = inversion;
        this.ganancia = ganancia;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getParidad() {
        return paridad;
    }

    public void setParidad(String paridad) {
        this.paridad = paridad;
    }

    public String getPorcentaje() {
        return porcentaje;
    }

    public void setPorcentaje(String porcentaje) {
        this.porcentaje = porcentaje;
    }

    public String getInversion() {
        return inversion;
    }

    public void setInversion(String inversion) {
        this.inversion = inversion;
    }

    public String getGanancia() {
        return ganancia;
    }

    public void setGanancia(String ganancia) {
        this.ganancia = ganancia;
    }
    
}
