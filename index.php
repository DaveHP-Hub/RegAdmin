<?php 
session_start();
session_destroy();
?>

<!doctype html>
<html lang="es">
<head>
    <title>Bienvenido al sistema</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="Assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="Assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/Style001.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 
</head>

<body class="container-fluid">

    <main class="row">

        <section class="col-md-6" id="panel-left">
            <div class="container align-self-center">
                
                <div class="row">
                    <div class="col-12">
                    <img src="Assets/img/IMG_Encuesta RegAdmon1.png" class="rounded mx-auto d-block" width="100%" alt="...">
                    </div>
                </div>
                
            </div>
        </section>


        

        <section class="col-md-6" id="panel-right">
            <div class="container">
                <div class="row mb-5">
                    <h2 class="col-12 text-center">Iniciar Sesión</h2>
                </div>
                <div class="row">                    
                    <form id="validateUser" action="return false" method="POST" onsubmit="return false" class="col-12 col-md-8 offset-md-2">
                        <div class="form-group">
                            <label for="email" style="color:black"><strong style="font-size: 20px;">Ingresa tu correo electronico</strong></label> <br>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico" required>
                           <br> <div class='alert alert-danger' id='result' role='alert' style='display: none;'></div>
                        </div>
                        <div class="form-group">
                       </div>
                        <div class="form-group text-center pt-4">
                            <input onclick="validateUser(document.getElementById('email').value);" id="validate_" name="validate_" type="button" class="btn btn-secondary" value="Ingresar ahora">
                        </div>
                    </form>
                </div>

                
                <script>
                    function validateUser(email) {
                    $.ajax({
                        url: "Functions/ValidateUser.php",
                        type: "POST",
                        data: "email="+email+"",
                        success: function(resp) {
                           if(resp == 1) {
                               location.href = "registros.php";
                           }
                           else if(resp == 2) {
                            location.href = "index2.php";
                           }
                           else if(resp == 0) {
                               document.getElementById("result").style.display = "block";
                               $("#result").text("Error: campo obligatorio.");
                           }
                           else {
                               document.getElementById("result").style.display = "block";
                               $("#result").text("Error: ingresa un email valido.");
                           }
                           
                            
                        }

                    });
                }
                </script>
                <div class="row mt-5">
                    <div class="col-12 links text-center">
                        <div>
                            <p style="color: #666666; text-decoration:underline;">Es obligatorio ingresar un correo electronico. <br> <br> Se podrá reanudar el formulario si este no se completa en un primer intento. </p>
                        </div>
                        <div>
                        
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
    </main>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>
