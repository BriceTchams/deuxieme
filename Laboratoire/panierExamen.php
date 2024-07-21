
                
                
                <div class="row">
                    <div class="bg-dark text-white mt-3" style="border-radius:10px; height: 60px; width: 97%; margin-left:1%;">
                                            <h4 class="mt-3">Resultats </h4>

                    </div>
                </div>
                    <?php
                    require('config.php');
                    $conn = connect();


                    ?>
                    <div class="row mt-3">      
                        <div class="col-sm-3 col-6">
                            <?php
                            $dat = date('y-m-d');

                            ?>
                            <div class="d-flex bg-dark text-white " style="border-radius: 14px;"> 
                                <span class="h5 mt-1 mx-3"> Date</span>
                                <input type="text" name="" readOnly=readyOnly id="" value="<?= $dat?>" class="mt-1 mx-1" style="width:76%; border-radius:10px; height: 32px;">
                            </div>
                    

                        </div>
                        <div class="col-sm-4 col-6">
                        <?php 
                        // requette qui selectionne les clients d'un restaurant specique 
                        $sql="SELECT * from patient where deleted ='0'";
                        // $sql ="SELECT c.id_client , c.nom , c.prenom FROM restaurant r , client c WHERE 
                        // r.email= ''";
                        $answer = mysqli_query($conn , $sql);
                        // var_dump($answer);
                        ?>
                        <div class="d-flex bg-dark text-white " style="border-radius: 14px;"> 
                                <span class="h5  mx-3">Patient</span>
                                <select name="" id="patient" style="width:73%; border-radius:10px; height: 39px;"  data-tags="true" data-placeholder="patient" data-allow-clear="true">
                                <?php foreach ($answer as $key ) { ?>
                                    
                                    <option value="<?=$key['id_patient'] ?>"> <?= $key['nom']?></option>
                               <?php }?>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                        <?php 
                        // requette qui selectionne les clients d'un restaurant specique 
                        $sql1= "SELECT * FROM examen e, famille_examen f where f.id_famille = e.id_famille and f.deleted='0'  ";                      
                        $answer1 = mysqli_query($conn , $sql1);
                        // var_dump($answer);
                        ?>
                        <div class="d-flex bg-dark text-white " style="border-radius: 14px;"> 
                                <span class="h4  mx-3"> Examen</span>
                                <select name="examen" id="examen" class="" style="width:70%; border-radius:10px; height: 39px;"       data-tags="true" data-placeholder="examen" data-allow-clear="true">
                                <?php foreach ($answer1 as $key1 ) { ?>
                                    
                                    <option value="<?=$key1['id_examen'] ?>"> <?= $key1['nom_examen']?></option>
                               <?php }?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-1 col-1">
                            <!-- <div class="bg-dark text-white " style="border-radius: 14px;"> -->
                                    <button class="btn btn-dark mt-2 " id="addcart">OK</button>
                                    <!-- <a href="resultat.php?" class="btn btn-dark mt-2 ">OK</a> -->

                                <!-- <span class="h5 mt-3 mx-3"> Date</span>
                                <input type="date" name="" id="" class="my-2" style="width:76%; border-radius:10px; height: 39px;"> -->
                            <!-- </div> -->
                    

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                        <?php 
                //liste des produits 

                // recuperation des id des produits du paniers verifier si le panier existe d'abord
                if( isset($_SESSION['panier'])){
                    // unset($_SESSION['panier']);
                    // var_dump($_SESSION['panier']);
                   $ids = array_keys($_SESSION['panier']);
                // var_dump($ids); 
                }
                
                
                // il y'a aucune cle dans le panier
                if(empty($ids)){
                    echo("<marquee behavior='scroll' direction='left'><h4>votre panier d'examens est vide</h4>
                </marquee>");
                } else{
                    $produits = mysqli_query($conn , "SELECT * FROM examen WHERE id_examen IN (".implode(',', $ids).")");

                    // var_dump($produits);

                    // liste des examens du panier 
                // }
                ?>
                            <div class="table-responsive">
                                <table class="table mt-4 table-bordered">
                                    <thead >
                                        <tr class="text-center h5">    
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Resultat</th>
                                            <th>Norme</th>
                                            <th>  unite</th>
                                            <th>Conclusion</th>
                                            <!-- <th> Montant</th> -->
                                            <th>Actions</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                         <?php $nbre =0;
                                         while($row =mysqli_fetch_assoc($produits)){
                                            $nbre ++;
                                // $row1 =mysqli_num_rows($produits);
                                            // var_dump($row1);
                                            


                                        ?>
                                        <tr class="text-center h6">
                                            <td><?= $nbre?></td>
                                            <td><?= $row['nom_examen']?></td>
                                            <td><?= $row['resultat']?></td>
                                            <td><?=   $row['norme']?></td>
                                            <td><?=  $row['unite']?></td>
                                            <td><?=  $row['conclusion']?> </td>
                                            <!-- <td><?=  $row['montant']?> </td> -->

                                            <td>
                                        <a href="./resultat.php?id1=<?= $row['id_examen']?>" style="" class=""><i class="fa-solid fa-trash fa-1x text-danger" ></i>   </a>

                                               
                                            </td>
                                        </tr>

                                        <?php }?>
                                        

                                    </tbody>
                                </table>

                            </div>



                        </div>

                       
                    </div>
                    <div class="row">
                        <div class="col-sm-8">

                        </div>

                       


                       
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <!-- <button class="btn  mt-2"  id="confirm"></button> -->
                       
                       <a href="#" id="valide" class="page-link text-white bg-dark text-center" style="height:40px; border-radius:20px; width:99%;"> <h5>Enregistrer et Genérer le document </h5></a>
                        </div>
                        <div class="col-sm-3"></div>

                    </div>

                    <?php }?>



              
            

                


                </div>

              