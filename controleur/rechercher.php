<?php

include('../Modele/rechercher.php');

$nom=strtoupper ($_REQUEST['qNom']);
$prenom=strtoupper ($_REQUEST['qPrenom']);
$id=$_REQUEST['qIdPatient'];

$para['Nom']=$nom;
$para['Prenom']=$prenom;
$para['idPatient']=$id;

echo SearchPatient($para);
