<?php

require('../config.php');
$conn = connect();?>
  

<?php 
if(isset($_POST['name']) && isset($_POST['description'])){
    $nom = $_POST['name'];
    $desc = $_POST['description'];

    $req = "INSERT INTO famille_Examen(nom_famille , description) values('$nom','$desc')";
    $resultat = mysqli_query($conn , $req);
    
    // if($resultat){
        $r =  "SELECT * FROM famille_examen";
        $resultat1 = mysqli_query($conn ,$r);

        // if($resultat1){
        }?>

       <?php $r2 =  "SELECT * FROM famille_examen";
        $resultat2 = mysqli_query($conn ,$r2); ?>
        
 <table id="maTable" class="table table-striped table-bordered">
                <thead>
                    <tr >
                        <th  class="text-center">Numero</th>
                        <th  class="text-center">Nom</th>
                        <th  class="text-center">Description</th>
                 
                        
                    </tr>
                </thead>
            <tbody>

            <?php while ( $key = mysqli_fetch_assoc($resultat2)) {
                # code...
            ?>
                <tr>
                    <td  class="text-center"><?= $key['id_famille']?></td>
                    <td  class="text-center"><?= $key['nom_famille']?></td>
                    <td  class="text-center"><?= $key['description']?></td>
                
                </tr>
                <?php }?>
            
               
            </tbody>

            </table> 













   