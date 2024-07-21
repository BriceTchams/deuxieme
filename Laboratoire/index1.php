
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>

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





      });
    </script>
    <link rel="stylesheet" href="./vendor/fontawesome/css/all.min.css">
    <script src="./vendor/fontawesome/js/all.min.js"></script>
</head>
<body>
  <div class="container-fluid">

    <div class="row">
      <div class="col-sm-4  col-md-4 col-1">
     

      </div>
      <div class="col-sm-4 col-md-4 col-10">

      <div class="row">
        <div class="col-sm-12 col-12">
          <div class="card " style="margin-top:30%;">
              <form action="index2.php" method="post">
                <div class="card-header ">
                  <div class=" text-center">
                    <i class="fa-solid fa-user fa-2x "></i>
                   <p class="h4 my-2">Connexion</p>
                  </div>
                  
                  </div>
                <div class="card-body">
                <div class="form-floating mx-3 " >
                  <input type="text" name="nom" class="form-control" required id="login" placeholder="nom:" style="border-radius: 60px; background-color: rgb(217, 217, 217);">
                  <label for="login">nom</label>
              </div>
              <div class="form-floating mx-3 " style="margin-top: 30px; ">
                  <input type="text" name="mot_de_passe" class="form-control" required id="password" placeholder="mot de passe" style="border-radius: 60px; background-color: rgb(217, 217, 217);">
                  <label for="password">mot de passe</label>
              </div>

                </div>
                <div class="card-footer text-center mt-2">
                <button type = "reset" class="btn btn-danger mx-2 my-2">Annuler</button>
                <button type="submit" class="btn btn-success my-2">Confirmer</button>
                </div>
            </form>
          </div>
        </div>
      </div>
 <!-- <div class="col-sm-4 col-6 col-md-3"> -->
     

      </div>
      </div>
    </div>
  </div>
</body>
</html>
