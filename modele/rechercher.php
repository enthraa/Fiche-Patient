<?php
/**
 * Created by PhpStorm.
 * User: pgu
 * Date: 12/01/2018
 * Time: 10:39
 */

function SearchPatient($para) {

    $bdd = getBdd();

    $sql = 'SELECT PatientSer,LastName, FirstName, PatientId FROM dbo.Patient WHERE PatientSer !=0  ';

    if  (isset($para['Nom']) && isset($para['Nom'])!="") {
       // $para['Nom'] = " '".$para['Nom']."%'";
        $sql .= " AND LastName LIKE '".$para['Nom']."%' ";
    }
    if  (isset($para['Prenom']) && isset($para['Prenom'])!="") {
        //$para['Prenom'] =" '".  $para['Prenom'] ."%'";
        $sql .= " AND FirstName LIKE  '".  $para['Prenom'] ."%' ";

    }
    if  (isset($para['idPatient']) && isset($para['idPatient'])!="") {
       // $para['idPatient'] =" '". $para['idPatient'] ."%'";
        $sql .= " AND PatientId LIKE '". $para['idPatient'] ."%' ";
    }
    else {
        $sql .= $sql +" ORDER BY LastName, FirstName, PatientId ASC ;";
    }

    $req = $bdd->prepare($sql);

    $req->execute();

    while ($patient = $req->fetch()) {
       echo "<a href='controleur/patient.php?id=".$patient['PatientSer']."' class=\"list-group-item list-group-item-action\">". $patient['PatientSer'].$patient['PatientId'] . " " . $patient['LastName'] . " " . $patient['FirstName']."</a><br/>";
    }
}

// Connection a la BDD
function getBdd()
{
    try {
        $serverName = "TBOX";
        $conn = new PDO( "sqlsrv:server=$serverName ; Database=variansystem", "reports", "reports");
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}