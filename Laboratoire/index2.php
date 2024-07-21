<?php
require('config.php');
$conn = connect();
  $nom=$_POST['nom'];
  $mot_de_passe=$_POST['mot_de_passe'];
  echo "fin de la recuperation des variables";
  $req="SELECT nom,mot_de_passe FROM laborentain WHERE nom='$nom' AND mot_de_passe='$mot_de_passe'";
  $result=mysqli_query($conn,$req);
  if(mysqli_num_rows($result)==1){
    echo"execution de la requete";
      header("location:accueil.php");
      exit;// pour arrêter l'exécution du script immédiatement
  }
  else{
      echo "informations erronees veuillez rentrer les informations exacte";
  }
?>