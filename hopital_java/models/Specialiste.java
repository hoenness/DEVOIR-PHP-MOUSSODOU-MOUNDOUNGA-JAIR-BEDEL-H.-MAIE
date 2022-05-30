package poo.hopital1.models;

public class Specialiste extends Medecin{
    private String specialite;
    private int nombreAnnee;
    
    public Specialiste(String nom, String prenom, String dateRecrutement, Hopital hopital, String specialite, int nombreAnnee) {
        super(nom, prenom, dateRecrutement, hopital);
        this.specialite = specialite;
        this.nombreAnnee = nombreAnnee;
        type = "Specialiste";
    }
    public Specialiste() {
        type = "Specialiste";
    }
    public String getSpecialite() {
        return specialite;
    }
    public void setSpecialite(String specialite) {
        this.specialite = specialite;
    }
    public int getNombreAnnee() {
        return nombreAnnee;
    }
    public void setNombreAnnee(int nombreAnnee) {
        this.nombreAnnee = nombreAnnee;
    }
    @Override
    public String toString() {
        return "Specialiste "+super.toString()+ " nombreAnnee=" + nombreAnnee + ", specialite=" + specialite + "]";
    }
}
