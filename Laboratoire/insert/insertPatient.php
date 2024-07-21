<?php

require('../config.php');
$conn = connect();?>
  

<?php 
if(isset($_POST['name']) ){
   extract($_POST);
    $req = "INSERT INTO patient(nom,prenom , profession, date_reception , services, age, sexe , adresse, prescripteur, date_prelevement) values('$name','$prenom','$prof','$daterece','$service','$age', '$sexe', '$adresse' ,'$prescripteur' ,'$datepre'    )";
    $resultat = mysqli_query($conn , $req);
    
 
        }
        ?>

       <?php $r2 =  "SELECT * FROM patient where deleted='0'";
        $resultat2 = mysqli_query($conn ,$r2); ?>
        
 <table id="maTable" class="table table-striped table-bordered">
        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Profession</th>
                                <th>Date de reception</th>
                                <th>Service</th>
                                <th>Age</th>
                                <th>sexe</th>

                                <th>Adresse</th>
                                <th>Prescriteur</th>
                                <th>Date de prélèvement</th>
                                
                            </tr>
                        </thead>
            <tbody>

            <?php while ( $key = mysqli_fetch_assoc($resultat2)) {
                # code...
            ?>
                <tr>
                <td> <?= $key['id_patient']?></td>

                    <td> <?= $key['nom']?></td>
                    <td> <?= $key['prenom']?></td>
                    <td> <?= $key['profession']?></td>
                    <td> <?= $key['date_reception']?></td>
                    <td> <?= $key['services']?></td>
                    <td> <?= $key['age']?></td>
                    <td> <?= $key['sexe']?></td>
                    <td> <?= $key['adresse']?></td>
                    <td> <?= $key['prescripteur']?></td>
                    <td> <?= $key['date_prelevement']?></td>
                
                </tr>
                <?php }?>
            
               
            </tbody>

            </table> 













   