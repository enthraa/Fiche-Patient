<?php
/**
 * Created by PhpStorm.
 * User: pgu
 * Date: 10/01/2018
 * Time: 12:25
 */

function getCourse($idPatient){

    $bdd = getBdd();

    $sql = "SELECT CourseId,StartDateTime,CompletedDateTime FROM [variansystem].[dbo].[Course] WHERE PatientSer =".$idPatient.";";

    $req = $bdd->prepare($sql);
    $data= $req->execute();

    return $data;
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