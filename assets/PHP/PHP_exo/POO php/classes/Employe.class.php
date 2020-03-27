<?php

class Employe
{
    protected $e_Nom;
    protected $e_Prenom;
    protected $e_DateEmbauche;
    protected $e_Poste;
    protected $e_Salaire;
    protected $e_Service;



    public function __construct($e_Nom, $e_Prenom, $e_DateEmbauche, $e_Poste, $e_Salaire, $e_Service)
    {
        // Nom
        //  Prénom
        //  Date d’embauche dans l’entreprise
        //  Fonction (Poste) dans l’entreprise
        //  Salaire en K euros brut annuel
        //  Service dans lequel se situe l’employé (Comptabilité, Commercial,…)
        echo $e_Prenom . ' ' . $e_Nom . ' est arrivé le ' . $e_DateEmbauche . ' dans l\'entreprise à la fonction de ' . $e_Poste . ' au service ' . $e_Service . '. Il sera rémunéré à hauteur de ' . $e_Salaire . 'k euros brut annuel.<br>';
        $this->setNom($e_Nom);
        $this->setPrenom($e_Prenom);
        $this->setDateEmbauche($e_DateEmbauche);
        $this->setPoste($e_Poste);
        $this->setSalaire($e_Salaire);
        $this->setService($e_Service);
    }


    public function anciennetee()
    {
        $dateEmbauche = date_create($this->getDateEmbauche());
        $today = date_create(date("d-m-Y", time()));
        $dateDiff = date_diff($today, $dateEmbauche);
        echo $dateDiff->format('Cela fait %Y an(s) (%m mois et %d jours) que ' . $this->getPrenom() . ' ' . $this->getNom() . ' est dans l\'entreprise.<br>');
        return $dateDiff->format('%Y');
    }


    public function setNom($e_nom)
    {
        $this->nom = $e_nom;
    }
    public function setPrenom($e_prenom)
    {
        $this->prenom = $e_prenom;
    }
    public function setDateEmbauche($e_dateEmbauche)
    {
        $this->dateEmbauche = $e_dateEmbauche;
    }
    public function setPoste($e_Poste)
    {
        $this->Poste = $e_Poste;
    }
    public function setSalaire($e_salaire)
    {
        $this->salaire = $e_salaire;
    }
    public function setService($e_service)
    {
        $this->service = $e_service;
    }

    public function getNom()
    {return $this->nom;}
    public function getPrenom()
    {return $this->prenom;}
    public function getDateEmbauche()
    {return $this->dateEmbauche;}
    public function getPoste()
    {return $this->Poste;}
    public function getSalaire()
    {return $this->salaire;}
    public function getService()
    {return $this->service;}
}

// création employés (Pensez a la nommé exactement comme la class !!! sinon erreur)
$employe1 = new Employe('L\'ÉPONGE', 'Bob', '02-01-1997', 'hacker junior', 40, 'informatique');
$employe2 = new Employe('LE LOUCHE', 'Jean', '30-08-1990', 'hacker sénior', 85, 'informatique');
$employe3 = new Employe('BOQUET', 'William', '18-06-1944', 'Directeur', 125, 'Bureau');
$employe4 = new Employe('KINGUE', 'Claude', '06-08-1989', 'Vice-Directeur', 126, 'Commercial');
$employe5 = new Employe('MUHAMMAD', 'Salma', '24-03-2020', 'Secrétaire', 220, 'Secrétariat');

// public function anciennetee()
echo $employe1->anciennetee();
echo $employe2->anciennetee();
echo $employe3->anciennetee();
echo $employe4->anciennetee();
echo $employe5->anciennetee();
