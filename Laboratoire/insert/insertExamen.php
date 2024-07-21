<?php

require('../config.php');
$conn = connect();?>
  

<?php 
if(isset($_POST['name']) && !empty($_POST['result']) ){
   extract($_POST);
    $req = "INSERT INTO examen(id_famille, nom_examen,resultat,norme, unite, conclusion, montant) values('$famille','$name','$result','$norme','$unite','$conclusion' , '$montant' )";
    $resultat = mysqli_query($conn , $req);
    
 
        }
?>

       <?php $r2 =  "SELECT * FROM examen e, famille_examen f where f.id_famille = e.id_famille and f.deleted='0'";
        $resultat2 = mysqli_query($conn ,$r2); ?>
        
 <table id="maTable" class="table table-striped table-bordered">
        <thead>
                            <tr>
                                <th>Numero</th>
                                <th>Nom</th>
                                <th>Famille</th>
                                <th>Resultat</th>
                                <th>Norme</th>
                                <th>Unité</th>

                                <th>Conclusion</th>
                                <th>Montant</th>
                           
                                
                            </tr>
                        </thead>
            <tbody>

            <?php while ( $key = mysqli_fetch_assoc($resultat2)) {
                # code...
            ?>
                <tr>
                <td> <?= $key['id_examen']?></td>

                    <td> <?= $key['nom_examen']?></td>
                    <td> <?= $key['nom_famille']?></td>

                    <td> <?= $key['resultat']?></td>
                    <td> <?= $key['norme']?></td>
                    <td> <?= $key['unite']?></td>
                    <td> <?= $key['conclusion']?></td>
                    <td> <?= $key['montant']?></td>


                  
                
                </tr>
                <?php }?>
            
               
            </tbody>

            </table> 













   