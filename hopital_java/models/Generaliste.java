package poo.hopital1.models;

public class Generaliste extends Medecin{
    private String service;

    public Generaliste(String nom, String prenom, String dateRecrutement, Hopital hopital, String service) {
        super(nom, prenom, dateRecrutement, hopital);
        this.service = service;
        type="Generaliste";
    }

    public Generaliste() {
        super();
        type="Generaliste";
    }

    public String getService() {
        return service;
    }

    public void setService(String service) {
        this.service = service;
    }

    @Override
    public String toString() {
        return "Generaliste "+super.toString()+ " service=" + service + "]";
    }
    
}
