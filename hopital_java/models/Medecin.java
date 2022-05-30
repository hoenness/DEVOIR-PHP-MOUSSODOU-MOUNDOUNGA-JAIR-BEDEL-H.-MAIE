package poo.hopital1.models;

public abstract class Medecin {
    protected String nom, prenom, dateRecrutement, type;
    protected int id;
    private static int nbMedecin=0;
    private Hopital hopital;
    public Medecin(String nom, String prenom, String dateRecrutement, Hopital hopital) {
        this.nom = nom;
        this.prenom = prenom;
        this.dateRecrutement = dateRecrutement;
        id = ++nbMedecin;;
        this.hopital = hopital;
    }
    public Medecin() {
        id = ++nbMedecin; //id = ++nbMedecin ==> nbMedecin+=1 ensuite id=nbMedecin
    }
    public Hopital getHopital() {
        return hopital;
    }
    public void setHopital(Hopital hopital) {
        this.hopital = hopital;
    }
    public String getNom() {
        return nom;
    }
    public void setNom(String nom) {
        this.nom = nom;
    }
    public String getPrenom() {
        return prenom;
    }
    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }
    public String getDateRecrutement() {
        return dateRecrutement;
    }
    public void setDateRecrutement(String dateRecrutement) {
        this.dateRecrutement = dateRecrutement;
    }
    public int getId() {
        return id;
    }
    
    public int getNbMedecin() {
        return nbMedecin;
    }
    public String getType() {
        return type;
    }
    @Override
    public String toString() {
        return "[dateRecrutement=" + dateRecrutement + ", id=" + id + ", nom=" + nom + ", prenom=" + prenom
                + ", type=" + type + ",";
    }
    
}