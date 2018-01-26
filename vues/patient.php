<?php
/**
 * Created by PhpStorm.
 * User: pgu
 * Date: 10/01/2018
 * Time: 17:44
 */
?>
<!DOCTYPE html>
<html>
<?php include("head.php") ?>
<body>
    <div class="container">
        <div class="row">
            <h1>Fiche Patient</h1><button type="button" class="btn btn-secondary">Secondary</button>
        </div>
        <div class="row">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a data-toggle="tab" href="#Consultation">Consultation</a></li>
                <li><a data-toggle="tab" href="#CompteRendufdt">Compte rendu de fin de traitement </a></li>
                <li><a data-toggle="tab" href="#Contourage">Contourage</a></li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div id="Consultation" class="tab-pane"></div>
                <div id="CompteRendufdt" class="tab-pane "><?php include '../controleur/CompteRendufdt.php';?></div>
                <div id="Contourage" class="tab-pane">...</div>
            </div>
        </div>
    </div>
</body>
</html>
