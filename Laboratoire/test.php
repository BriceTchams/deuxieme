<?php

session_start();

require('config.php');

$conn = connect();
// unset($_SESSION['panier']);
if(isset($_SESSION['patient'])){
    $ids = array_keys($_SESSION['patient']);
var_dump($ids); 
}
if(isset($_SESSION['panier'])){
    $ids = array_keys($_SESSION['panier']);
var_dump($ids);
    // echo"bonjour";
    $resu= mysqli_query($conn , "SELECT distinct f.nom_famille ,f.id_famille  FROM examen c , famille_examen f WHERE  c.id_famille=f.id_famille and c.id_examen IN (".implode(',', $ids).")");

    // var_dump($resu);

    // parcours des familles
    foreach ($resu as $key) {
        // echo($key['nom_examen']);

        echo($key['nom_famille']);
        echo('<br>');

            $idf = $key['id_famille'];
            $resu1= mysqli_query($conn , "SELECT c.nom_examen FROM examen c , famille_examen f WHERE  f.id_famille =$idf and c.id_famille=f.id_famille and c.id_examen IN (".implode(',', $ids).")");


            // parcours des examens 
            foreach ($resu1 as $key) {
                echo ($key['nom_examen']);
            echo('<br>');



            }
            echo('<br>');
            echo('<br>');




    }

}



?>