<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="./datatables  library/jquery/jquery-3.6.0.js"></script>

        <!-- jquery -->
    <link rel="stylesheet" href="./datatables  library/jquery/jquery-ui.css">
    <script src="./datatables  library/jquery/jquery-ui.js"></script>
      
    <!-- select2 -->
    <link rel="stylesheet" href="./datatables  library/select2-4.1.0-rc.0/dist/css/select2.min.css">
    <script src="./datatables  library/select2-4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- sweet alert -->
    <script src="./datatables  library/sweet Alert/sweetAlertMin.js"></script>
    <script src="./autoComplete.js"></script>
    <link rel="stylesheet" href="./datatables  library/jquery-toast-plugin-master/dist/jquery.toast.min.css">
    <script src="./datatables  library/jquery-toast-plugin-master/dist/jquery.toast.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#toastBtn').click(function () { 
          $.toast({
            text:'renitialisation reussite ',
            showHideTransition: 'slide',
            icon: 'success',
            position: 'top-right'          })
          
        });

        $()
        $('#reset').click(function () { 
          // e.preventDefault();
          swal({
            buttons:{
              cancel:true,
              confirm:true
            },

            // confirmButtonText 
          })
          
        });
        $('#toastBtn1').click(function () { 
          // e.preventDefault();
          swal({
          title:" Enregistrement reussi",
          icon: "success"

            // confirmButtonText 
          })
          
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        $('#ipp').keyup(function () { 
          $('#toastBtn1').prop('disabled', false)

          
        });

        // $('#Adresse').keyup(function () { 
        //   $('#toastBtn1').prop('disabled', false)

          
        // });
        // var val1=$('#ipp').val();
        // var val2=$('#Adresse').val();
        // alert(val1.length)

        // if(val1.length!=0){
        //   $('#toastBtn').prop('disabled', false)


        // }
       $(function(){
        $('#maTable').DataTable();
       });




      });
    </script>
    <link rel="stylesheet" href="./vendor/fontawesome/css/all.min.css">
    <script src="./vendor/fontawesome/js/all.min.js"></script>
    <link rel="stylesheet" href="./datatables  library/dataTables/dataTables.dataTables.min.css">
    <script src="./datatables  library/dataTables/dataTables.min.js"></script>

</head>
<body>
  <div class="container-fluid">
    <?php require('navbar.php');?>

    <div class="row">
      <div class="col-sm-3 col-6 col-md-3">
      <div class="row">
                    <?php require('side.php');?>

      </div>

      </div>
      <div class="col-sm-9 col-md-9">
      <?php require('listePatient.php');?>

      </div>
    </div>





  </div>




  <!-- The Modal numero 1-->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content bg-white">
  
        <!-- Modal Header -->
        <div class="modal-header text-center">
          <h3 class=" text-dark " style="margin-left:25%; color: rgb(2, 156, 177);"><strong class="text-center" >Nouveau patient</strong></h3>
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" class="form mx-3 " method="post"  id="formm">

          <div class="row">
            <div class="col-sm-6">  <div class="form-floating mt-4">
              <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" style="border-radius: 70px; background-color: rgb(217, 217, 217);">
              <label for="floatingPassword">Nom</label>
            </div>
  

            <div class="form-floating mt-4">
                <input type="text" name="prenom" class="form-control" id="prenom" placeholder="prenom" style="border-radius: 70px; background-color: rgb(217, 217, 217);">
                <label for="prenom" required>prenom</label>
              </div>
          <!-- deuxieme input  -->
  
  
              <div class="form-floating " style="margin-top: 30px; ">
                  <input type="text" name="profession" class="form-control" id="prof" placeholder="Profession" style="border-radius: 60px; background-color: rgb(217, 217, 217);" required>
                  <label for="prof">Profession </label>
              </div>
              <div class="form-floating " style="margin-top: 30px; ">
                  <input type="text" name="service" class="form-control" id="service" placeholder="service" style="border-radius: 60px; background-color: rgb(217, 217, 217);" required>
                  <label for="service">Service</label>
              </div>
              <div class="form-floating " style="margin-top: 30px; ">
                  <input type="number" name="age" class="form-control" id="age" placeholder="age" style="border-radius: 60px; background-color: rgb(217, 217, 217);" required>
                  <label for="age"> Age</label>
              </div>
  </div>





            <div class="col-sm-6">
            
  

            <div class="form-floating mt-4">
                <!-- <input type="text" name="prenom" class="form-control" id="floatingPassword" placeholder="prenom" style="border-radius: 70px; background-color: rgb(217, 217, 217);"> -->
               
               <select name="sexe" id="sexe" class="form-select" style="border-radius: 70px; background-color: rgb(217, 217, 217);">
                <option value="masculin">Masculin</option>
                <option value="feminin">feminin</option>
               </select>
                <label for="sexe" required>sexe</label>
              </div>
          <!-- deuxieme input  -->
  
  
              <div class="form-floating " style="margin-top: 30px; ">
                  <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Adresse" style="border-radius: 60px; background-color: rgb(217, 217, 217);" required>
                  <label for="adresse"> adresse</label>
              </div>
              <div class="form-floating " style="margin-top: 30px; ">
                  <input type="prescripteur" name="prescripteur" class="form-control" id="prescripteur" placeholder="Date de naissance" style="border-radius: 60px; background-color: rgb(217, 217, 217);" required>
                  <label for="prescripteur"> prescripteur</label>
                  
              </div>
              <div class="form-floating " style="margin-top: 30px; ">
                  <input type="date" name="datepre" class="form-control" id="datepre" placeholder="Date de prélèvement" style="border-radius: 60px; background-color: rgb(217, 217, 217);" required>
                  <label for="datepre"> Date de prélèvement </label>
                  
              </div>
              <div class="form-floating " style="margin-top: 30px; ">
                  <input type="date" name="daterece" class="form-control" id="daterece" placeholder="Date de reception" style="border-radius: 60px; background-color: rgb(217, 217, 217);" required>
                  <label for="datepre"> Date de reception </label>
                  
              </div>
  </div>

          </div>
              <!-- <p class="mt-4 h3 text-center"> </p> -->
  
         
  
  
            <!-- <button class="  form-control text-center my-4 text-white" style="width: 70%; border-radius:60px ; margin-left: 15%; background-color: rgb(2, 156, 177);"> <a href="./client Module/Acceuil.php" class="text-decoration-none text-white">Creer un compte</a></button> -->
  
              <!-- <input type="submit " value="Creer"> -->

              <div class="row ">
                <div class="text-center my-4">
                  <button type="reset" class="btn btn-danger">Annuler</button>
                <button  type="button" class="btn btn-success" id="enregistrer" name="enregistrer" >Enregistrer</button>
                </div>
                
              </div>
              <!-- <button type="submit" class="btn mx-5 my-4 text-white bg-dark" style="width: 60%; " name ="soumettre"><h5>Enregistrer</h5></button> -->
      </form>      
    </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
        </div>
  
      </div>
    </div>
  </div>            
         
  <script>
  
    $(document).ready(function(){
      $('#enregistrer').click(function () { 
        var nom =  $('#nom').val();
        var prenom =  $('#prenom').val();   
        var prof =  $('#prof').val();   
        var adresse =  $('#adresse').val();   
        var prescripteur =  $('#prescripteur').val();   
        var sexe =  $('#sexe').val();   
        var age =  $('#age').val();   
        var service =  $('#service').val();   
        var  daterep=  $('#datepre').val();  
        var daterece = $('#daterece').val(); 
        //var enregistrer = $(this).val();
        
        //  alert(nom+  des + prof + adresse +prescripteur + sexe + age+ service + daterep +daterece)
   
        // alert(nom+des); 
        $.ajax({
          type: "POST",
          url: "insert/insertPatient.php",
          data: {
            name: nom,
           prenom : prenom,
            prof : prof , 
            adresse : adresse,
            prescripteur : prescripteur,
            sexe : sexe,
            age : age,
            service :service,
            datepre: daterep,
            daterece : daterece

          },
          success: function (response) {
           $('#resultat').html(response);
           $('#maTable').DataTable();


          //  alert(response.message);
           swal({
          title:" Enregistrement reussi",
          icon: "success"

            // confirmButtonText 
          })
          // reinitialisation des champs du formulaire apres l'envoie des donnees aux serveurs 

          $('#formm')[0].reset();



           
            
          },
          error: function(xhr , status , error){
            alert(error+status+xhr);
          }
        });
    
      });
      // affichage de la liste des Patients
      $.ajax({
          type: "POST",
          url: "insert/insertPatient.php",
         
          success: function (response) {
           $('#resultat').html(response);
           $('#maTable').DataTable();


        // alert(response.message);


           
            
          },
          error: function(xhr , status , error){
           alert(error+status+xhr);
          }
        });

      });
  </script>
</body>
</html>