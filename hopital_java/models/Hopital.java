package poo.hopital1.models;

import java.util.ArrayList;

public class Hopital {
    private int id;
    private String nom, adresse;
    private static int nbHopital=0;
    private ArrayList<Medecin> medecins = new  ArrayList<Medecin>();
    public Hopital(String nom, String adresse) {
        this.nom = nom;
        this.adresse = adresse;
        id=++nbHopital;
    }
    public Hopital() {
        id=++nbHopital;
    }
    public ArrayList<Medecin> getMedecins() {
        return medecins;
    }
    
    public int getId() {
        return id;
    }
    public void setId(int id) {
        this.id = id;
    }
    public String getNom() {
        return nom;
    }
    public void setNom(String nom) {
        this.nom = nom;
    }
    public String getAdresse() {
        return adresse;
    }
    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }
    public int getNbHopital() {
        return nbHopital;
    }
    
    @Override
    public String toString() {
        return "Hopital [adresse=" + adresse + ", id=" + id + ", nom=" + nom + "]";
    }
}

//Hopital h1 = new Hopital() ==> nbHopital=1 --> id=1
//Hopital h2 = new Hopital() ==> nbHopital=2 --> id=2
//Hopital h3 = new Hopital() ==> nbHopital=3 --> id=3


//h1.setNbHopital(2)
