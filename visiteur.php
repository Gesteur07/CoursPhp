<?php
    include_once('visiteur.class.php');

    $visiteur1 = new Visiteur;

    $visiteur1->set_prenom('Moustapha');
    $visiteur1->set_nom('Hamadou');

   /*echo $visiteur1->get_prenom().'</br>';*/
   echo $visiteur1->nom;
   echo $visiteur1->get_prenom();

?>