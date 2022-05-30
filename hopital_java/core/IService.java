package poo.hopital1.core;

import poo.hopital1.models.Hopital;
import poo.hopital1.models.Medecin;

public interface IService {
    void addHopital(Hopital hopital);
    void addMedecin(Medecin medecin,Hopital hopital);
    void listerHopital();
    Hopital rechercheHopital(int id);
    void listerMedecedinUnHopital(Hopital hopital);
}
