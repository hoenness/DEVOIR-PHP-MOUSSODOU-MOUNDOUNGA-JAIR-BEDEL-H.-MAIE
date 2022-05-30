package poo.hopital1.models;

import java.util.ArrayList;

import poo.hopital1.core.IService;

public class Service implements IService {
    private ArrayList<Hopital> hopitaux = new  ArrayList<Hopital>();
    private ArrayList<Medecin> medecins = new  ArrayList<Medecin>();

    @Override
    public void addHopital(Hopital hopital) {
        hopitaux.add(hopital);
    }

    @Override
    public void addMedecin(Medecin medecin, Hopital hopital) {
        medecin.setHopital(hopital);
        medecins.add(medecin);     
    }

    @Override
    public void listerHopital() {
        for (Hopital hopital : hopitaux) {
            System.out.println(hopital);
        }
    }

    @Override
    public void listerMedecedinUnHopital(Hopital hopital) {
        for (Medecin medecin : hopital.getMedecins()) {
            System.out.println(medecin);
        }        
    }

    @Override
    public Hopital rechercheHopital(int id) {
        for (Hopital hopital : hopitaux) {
            if(hopital.getId()==id){
                return hopital;
            }
        }
        return null;
    }
    
}
