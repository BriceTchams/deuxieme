<?php
require('./config.php');
$conn = connect();

$requette1 =mysqli_fetch_array(mysqli_query($conn ,"SELECT count(*) FROM patient " ));



$requette2 =mysqli_fetch_array(mysqli_query($conn ,"SELECT count(*) FROM famille_examen " ));

$requette3 =mysqli_fetch_array(mysqli_query($conn ,"SELECT count(*) FROM examen " ));


?>

<div class="col-sm-4 col-6 ">
                        
                        <div class="card my-4" style="box-shadow: 0px 0px 0px  0px;">
                            <div class="card-body text-center" style ="background-color:rgb(247, 241, 228);">
                            <i class="fa-solid fa-chess-knight fa-3x "style="color:var(--back); " ></i>
                            </div>
                            <div class="card-footer bg-white ">
                                <span>Patient(s)</span>  
                                <span class=" text-white  bg-dark badge float-end" style="border-radius: 100%;
                                 position: relative; ">
                                    <?= $requette1[0]?>
                            </span>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-sm-4 col-6">
                         <div class="card mt-4" style="box-shadow: 0px 0px 0px  0px;">
                             <div class="card-body text-center" style="background-color:rgb(226, 246, 250);">
                                <i class="fa-solid  fa-link fa-3x  "style="color:var(--back);"></i> 
                             </div>
                             <div class="card-footer bg-white ">
                                <span>Examen(s)</span>  
                                <span class=" text-white  bg-dark badge float-end" style="border-radius: 100%;
                                 position: relative; ">
                                  <?= $requette3[0]?>

                            </span>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-sm-4 col-6">
                        <div class="card mt-4" style="box-shadow: 0px 0px 0px  0px;">
                            <div class="card-body text-center" style=" background-color:rgb(247, 241, 228); ">
                                <i class="fa-solid fa-print fa-3x  "style="color:var(--back);"></i>
                            </div>
                            <div class="card-footer bg-white ">
                                <span>Familes Examen(s)</span>  
                                <span class=" text-white  bg-dark badge float-end" style="border-radius: 100%;
                                 position: relative; ">
                                     <?= $requette2[0]?>

                            </span>
                            </div>
                       </div>
                
                    </div>

                    <div class="col-sm-4 col-6">
                                <!-- <i class="fa-solid fa-key"></i>  -->
                                <div class="card mt-2" style="box-shadow: 0px 0px 0px  0px;">
                                    <div class="card-body text-center"  style="
                                    background-color:rgb(247, 241, 228);">
                                    <i class="fa-solid fa-download fa-3x   "style="color:var(--back);" ></i></div> 

                                    <div class="card-footer bg-white ">
                                        <span>Telechargement(s)</span>  
                                        <span class=" text-white  bg-dark badge float-end" style="border-radius: 100%;
                                         position: relative; ">
                                             2
                                    </span>
                                    </div>
                                </div>
                        </div>
                   
                   

                   
                  
                   
                </div>





                <!-- deuxieme ligne de la page --> 


                <!-- style="margin-top: 50px; margin-left: 20px; margin-right: 20px; -->

               