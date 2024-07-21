<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Examens</title>

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
    <link rel="stylesheet" href="./vendor/fontawesome/css/all.min.css">
    <script src="./vendor/fontawesome/js/all.min.js"></script>
    <link rel="stylesheet" href="./datatables  library/dataTables/dataTables.dataTables.min.css">
    <script src="./datatables  library/dataTables/dataTables.min.js"></script>

    <link rel="stylesheet" href="./datatables  library/jQuery-TE_v.1.4.0/jquery-te-1.4.0.css">
    <script src="./datatables  library/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>

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

           

       $(function(){
        $('#maTable').DataTable();
        
$('#famille').select2({
            dropdownParent:"#myModal",
            width: 400,
            height: 30
        });
       });

       $(function(){
        $('#description').jqte();
       });




      });
    </script>
    
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
      <?php require('listeExamen.php');?>

      </div>
    </div>





  </div>




  <!-- The Modal numero 1-->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content bg-white">
  
        <!-- Modal Header -->
        <div class="modal-header text-center">
          <h3 class=" text-dark " style="margin-left:10%; color: rgb(2, 156, 177);"><strong class="text-center" >Nouveau examen</strong></h3>
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" class="form mx-3 " method="post" id="formm">

          <div class="row">
            <div class="col-sm-12"> 
               <div class="form-floating my-4">
              <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" style="border-radius: 70px; background-color: rgb(217, 217, 217);">
              <label for="nom">Nom</label>
            </div>
            <div class="col-sm-12"> 
               <div class="form-floating my-4">
              <input type="text" name="result" class="form-control" id="result" placeholder="Nom" style="border-radius: 70px; background-color: rgb(217, 217, 217);">
              <label for="resultat">resultat</label>
            </div>
         
         
  
            <div class="col-sm-12"> 
               <div class="form-floating my-4">
              <input type="text" name="norme" class="form-control" id="norme" placeholder="norme" style="border-radius: 70px; background-color: rgb(217, 217, 217);">
              <label for="norme">Norme</label>
            </div>
  
            <div class="col-sm-12"> 
               <div class="form-floating my-4">
              <input type="text" name="conclusion" class="form-control" id="conclusion" placeholder="Conclusion" style="border-radius: 70px; background-color: rgb(217, 217, 217);">
              <label for="conlusion">conclusion</label>
            </div>
            </div>

            <!-- <div class="col-sm-12">     -->
              <?php 
              require('config.php');
              $conn = connect();
              $req = mysqli_query($conn ,"SELECT id_famille , nom_famille FROM famille_examen");
              ?>
            <div class="form-floating my-4">

                     <select name="famille" id="famille" class="form-select" placeholder="Famille d'examen" >
            <?php  while($row = mysqli_fetch_assoc($req)){ ?>              
                <option value="<?= $row['id_famille']?>"><?= $row['nom_famille']?></option>
                <?php }?>
            </select>
                </div>
                
             <!-- </div> -->

             
            <div class="col-sm-12"> 
               <div class="form-floating my-4">
              <input type="text" name="unite" class="form-control" id="unite" placeholder="Unite" style="border-radius: 70px; background-color: rgb(217, 217, 217);">
              <label for="unite">Unite</label>
            </div>
            </div>
            <div class="col-sm-12"> 
               <div class="form-floating my-4">
              <input type="number" name="montant" class="form-control" id="montant" placeholder="montant" style="border-radius: 70px; background-color: rgb(217, 217, 217);">
              <label for="moontant">montant</label>
              </div>
            </div>

  

           
  
  </div>





      
          </div>
              <!-- <p class="mt-4 h3 text-center"> </p> -->
  
         
  
  
            <!-- <button class="  form-control text-center my-4 text-white" style="width: 70%; border-radius:60px ; margin-left: 15%; background-color: rgb(2, 156, 177);"> <a href="./client Module/Acceuil.php" class="text-decoration-none text-white">Creer un compte</a></button> -->
  
              <!-- <input type="submit " value="Creer"> -->

              <div class="row ">
                <div class="text-center my-4">
                  <button type="reset" class="btn btn-danger">Annuler</button>
                <button  type="button" class="btn btn-success" id="enregistrer">Enregistrer</button>
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
    $(document).ready(function () {
      $('#enregistrer').click(function () {
        var nom =$('#nom').val();
        var result = $('#result').val() ;
        var norme = $('#norme').val();
        var conclusion = $('#conclusion').val();
        var famille = $('#famille').val();
        var unite = $('#unite').val();
        var montant = $('#montant').val();

        // alert(nom +result+norme + conclusion+famille);
        $.ajax({
          type: "POST",
          url: "insert/insertExamen.php",
          data:{
            name : nom,
            result : result,
            norme : norme ,
            conclusion : conclusion ,
            famille : famille ,
            unite : unite ,
            montant :montant

          } ,
          // dataType: "dataType",
          success: function (response) {
            $('#resultat').html(response);
           $('#maTable').DataTable();

           $('#formm')[0].reset();

           swal({
          title:" Enregistrement reussi",
          icon: "success"

            // confirmButtonText 
          })
            
          }
        });
        
      });
      $.ajax({
          type: "POST",
          url: "insert/insertExamen.php",
         
          success: function (response) {
           $('#resultat').html(response);
           $('#maTable').DataTable();


            
          },
          error: function(xhr , status , error){
           alert(error+status+xhr);
          }
        });
    });
  </script>       
         
</body>
</html>