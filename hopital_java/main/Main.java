package poo.hopital1.main;

import java.util.Scanner;

import poo.hopital1.models.Generaliste;
import poo.hopital1.models.Hopital;
import poo.hopital1.models.Medecin;
import poo.hopital1.models.Service;
import poo.hopital1.models.Specialiste;

public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int choix, choix1, nombreAnnee, id;
        Service service = new Service();
        Hopital hopital;
        Medecin medecin;
        String nomH, nom, prenom, adresse, serv, specialite, dateRecrutement;
        do{
            System.out.println("1-Ajouter un Hopital");
            System.out.println("2-Ajouter un Medecin");
            System.out.println("3-Lister tous les Hopitaux");
            System.out.println("4-Lister les medecins d'un Hopital");
            System.out.println("5-Quitter");

            System.out.println("Choisir une option : ");
            choix =  sc.nextInt();
            sc.nextLine();
            switch (choix) {
                case 1:
                        System.out.println("Saisir le nom de l'hopital : ");
                        nom=sc.nextLine();
                        System.out.println("Saisir l'adresse de l'hopital : ");
                        adresse=sc.nextLine();
                        hopital = new Hopital();
                        hopital.setNom(nom);
                        hopital.setAdresse(adresse);
                        service.addHopital(hopital);
                    break;
                case 2:
                    do{
                        System.out.println("1-Generaliste");
                        System.out.println("2-Specialiste");
                        System.out.println("3-Retour");
                        System.out.println("Choisir une option : ");
                        choix1 =  sc.nextInt();
                        sc.nextLine();
                        switch (choix1) {
                            case 1:
                                System.out.println("Saisir le nom du Medecin : ");
                                nom = sc.nextLine();
                                System.out.println("Saisir prenom du Medecin : ");
                                prenom = sc.nextLine();
                                System.out.println("Saisir date de recrutement du Medecin : ");
                                dateRecrutement = sc.nextLine();
                                System.out.println("Saisir le service : ");
                                serv = sc.nextLine();
                                System.out.println("Saisir le nom de l'hopital : ");
                                nomH=sc.nextLine();
                                System.out.println("Saisir l'adresse de l'hopital : ");
                                adresse=sc.nextLine();
                                hopital = new Hopital();
                                hopital.setNom(nomH);
                                hopital.setAdresse(adresse);
                                medecin = new Generaliste();
                                ((Generaliste) medecin).setService(serv);
                                ((Generaliste) medecin).setNom(nom);
                                ((Generaliste) medecin).setPrenom(prenom);
                                ((Generaliste) medecin).setDateRecrutement(dateRecrutement);
                                medecin.setHopital(hopital);
                                break;
                        
                            case 2: 
                                System.out.println("Saisir le nom du Medecin : ");
                                nom = sc.nextLine();
                                System.out.println("Saisir prenom du Medecin : ");
                                prenom = sc.nextLine();
                                System.out.println("Saisir date de recrutement du Medecin : ");
                                dateRecrutement = sc.nextLine();
                                System.out.println("Saisir la specialite : ");
                                specialite = sc.nextLine();
                                System.out.println("Saisir le nombre d'annees : ");
                                nombreAnnee = sc.nextInt();
                                System.out.println("Saisir le nom de l'hopital : ");
                                nomH=sc.nextLine();
                                System.out.println("Saisir l'adresse de l'hopital : ");
                                adresse=sc.nextLine();
                                hopital = new Hopital();
                                hopital.setNom(nomH);
                                hopital.setAdresse(adresse);
                                medecin = new Specialiste();
                                ((Specialiste) medecin).setSpecialite(specialite);
                                ((Specialiste) medecin).setNombreAnnee(nombreAnnee);
                                ((Specialiste) medecin).setNom(nom);
                                ((Specialiste) medecin).setPrenom(prenom);
                                ((Specialiste) medecin).setDateRecrutement(dateRecrutement);
                                medecin.setHopital(hopital);
                            break;
                        }
                    }while(choix1 !=3 && choix1!=1 && choix!=2);
                break;
                case 3:
                        service.listerHopital();
                    break;
                case 4:
                        System.out.println("Saisir l'id de l'hopital : ");
                        id = sc.nextInt();
                        hopital = service.rechercheHopital(id);
                        if(hopital!=null){
                            service.listerMedecedinUnHopital(hopital);
                        }
                    break;
            }
        }while(choix != 5);
        sc.close();
    }
}
