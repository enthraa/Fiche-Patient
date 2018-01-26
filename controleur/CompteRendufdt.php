<?php
/**
 * Created by PhpStorm.
 * User: pgu
 * Date: 10/01/2018
 * Time: 12:25
 */

include('../modele/CompteRendufdt.php');

$idPatient=$id;

$data = getCourse($idPatient);

include('../vues/CompteRendufdt.php');

