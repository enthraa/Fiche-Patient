
// RECHERCHE DYNAMIQUE
$(document).ready(function(){

    $("input").on("keyup input", function(){

        var inputNom = $("#Nom").val();
        var inputPrenom = $("#Prenom").val();
        var inputIdPatient = $("#idPatient").val();

        //var resultDropdown = $(this).siblings(".result");

        if(inputNom.length || inputPrenom.length  || inputIdPatient.length  ){
            $.get("controleur/rechercher.php", {qNom: inputNom,qPrenom: inputPrenom,qIdPatient: inputIdPatient}).done(function(data){
                // Display the returned data in browser
                $(".result").html(data);
            });
        }else {
            $(".result").empty();
        }
    });
})