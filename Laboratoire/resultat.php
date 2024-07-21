<?php
session_start();

if(isset($_GET['id1'])){
    $id= $_GET['id1'];
    unset($_SESSION['panier'][$id]);
}





?>
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
$('#famille').select2({
            dropdownParent:"#myModal"
        });
       $(function(){
        $('#maTable').DataTable();
        

       });

       $(function(){
        $('#description').jqte();
       });




      });
    </script>
    <link rel="stylesheet" href="./vendor/fontawesome/css/all.min.css">
    <script src="./vendor/fontawesome/js/all.min.js"></script>
    <link rel="stylesheet" href="./datatables  library/dataTables/dataTables.dataTables.min.css">
    <script src="./datatables  library/dataTables/dataTables.min.js"></script>

    <link rel="stylesheet" href="./datatables  library/jQuery-TE_v.1.4.0/jquery-te-1.4.0.css">
    <script src="./datatables  library/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>

    <link rel="stylesheet" href="./datatables  library/select2-4.1.0-rc.0/dist/css/select2.min.css">
    <script src="./datatables  library/select2-4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
            $('#examen').select2();
            $('#patient').select2();


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
      <?php require('panierExamen.php');?>


      </div>
    </div>





  </div>


  <script>
        $(document).ready(function () {

            $('#addcart').click(function () { 

               var examen =  $('#examen').val();
              //  var idPatient =  $('#patient').val();
              //  alert(examen);

               $.ajax({
                method: "POST",
                url: "addPanier.php",
                data: {id: examen

                },
                success: function (response) {

                    window.location.href="resultat.php";

                    // console.log("good");
                    // alert(reponse.message);
                    
                }
               });
                
            });

            
            $('#patient').select2();
            $('#examen').select2();
            $('#valide').click(function () { 
            // var examen =  $('#examen').val();
               var idPatient =  $('#patient').val();
              //  alert(examen);

               $.ajax({
                method: "POST",
                url: "addPanier.php",
                data: {
                  idPatient : idPatient

                },
                success: function (response) {

                    window.location.href="test1.php";

                    // console.log("good");
                    // alert(reponse.message);
                    
                }
               });
                
              
            });

            
        });
    </script>

   
</body>
</html>