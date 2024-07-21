<?php

require('./config.php');
$conn = connect();

//ajout d'un nouveau examen dans le panier d'examen 
if(!isset($_SESSION)){
    // comme la session n'existe pas on demarre une nouvelle session
    session_start();
 }

 // creationn de la variable de session qui va contenir le id du patient
 if(!isset($_SESSION['patient'])){
   $_SESSION['patient'] = array();
}

// ajout de l'id du patient 
if(isset($_POST['idPatient'])){ // si les id ont ete envoyes alors 

   $id1 = $_POST['idPatient'];
   var_dump($id1);

   // verifier grace a id sur le produit existe deja 

  

   $requette1 = mysqli_query($conn , "SELECT * FROM patient  where id_patient= $id1");
  //  var_dump($requette);
   if(empty(mysqli_fetch_assoc($requette1))){
     die("ce patient  n'existe pas");
   }
   if(isset($_SESSION['patient'][$id1] )){
       $_SESSION['patient'][$id1] ++; //ajout de la quanite
// var_dump($_SESSION['panier']);
       
   }
   else{
     // si non ajoute le produit 
     $_SESSION['patient'][$id1] =1;

     // echo("le produit a ete bien ajouter");
     // var_dump($_SESSION['panier']);
   }
}
























/// examen





 // creation d'une nouvelle variable de session dans laquelle on met un tableau vide 

 if(!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
 }

// recuperation du produit a ajputer dans le panier 
// $id = $_POST['id'];
// var_dump($id);
 if(isset($_POST['id'])){ // si les id ont ete envoyes alors 

    $id = $_POST['id'];
    var_dump($id);

    // verifier grace a id sur le produit existe deja 

   

    $requette = mysqli_query($conn , "SELECT * FROM examen  where id_examen= $id");
   //  var_dump($requette);
    if(empty(mysqli_fetch_assoc($requette))){
      die("cet examen  n'existe pas");
    }
    if(isset($_SESSION['panier'][$id] )){
        $_SESSION['panier'][$id] ++; //ajout de la quanite
// var_dump($_SESSION['panier']);
        
    }
    else{
      // si non ajoute le produit 
      $_SESSION['panier'][$id] =1;

      // echo("le produit a ete bien ajouter");
      // var_dump($_SESSION['panier']);
    }
    // unset($_SESSION['panier']);
    // var_dump($id);
 }


?>