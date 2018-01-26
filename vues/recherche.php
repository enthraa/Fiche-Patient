<?php
/**
 * Created by PhpStorm.
 * User: pgu
 * Date: 11/01/2018
 * Time: 09:24
 */
?>
<html>
    <head>
        <title>Orlam</title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Orlam</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="script/script.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <h1>Recherche</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" id="livesearch">
                    <div class="search-box">
                        Nom :  <input id="Nom" type="text" autocomplete="off" />
                        Prénom :  <input id="Prenom" type="text" autocomplete="off" />
                        Id :  <input id="idPatient" type="text" autocomplete="off"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="resultat" class="result"></div>
                </div>
            </div>
    </div>
    </body>
</html>