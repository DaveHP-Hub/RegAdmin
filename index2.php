<?php 
session_start();

if(isset($_SESSION['validateUser']))
$email =  $_SESSION['validateUser'];
else 
$email = " ";


session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="Assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 
    <title>Registro nuevo</title>

</head>

<style>
 
 
 body {
	margin: 0;
	background-color: white;
    @font-face {
      font-family: Adelle Sans;
      src: url("Assets/fonts/ADELLE SANS/AdelleSans-Regular.otf");
      src: url("Assets/fonts/ADELLE SANS/AdelleSans-Bold.otf");
  }
}
.card-header{
  background: #666666;
  color: white
}

nav {
    background-color: black;
    box-shadow:
       inset 0 -3em 3em rgba(0,0,0,0.1),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
}

.dropdown-menu {
    box-shadow:
       inset 0 -3em 3em rgba(0,0,0,0.1),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
  
}

.img-thumbnail {
    border: none;
}


.navbar .dropdown-menu a:hover {
    color: black !important;
    border: none;
    
    
}
.darken-grey-text {
    color: white;
}


.navbar {
    background-color: #e6e6e6;
}

.dropdown-item {
   text-decoration: none;
   
}

.dropdown-item:focus {
    outline: none;
}

button:focus {
    outline: none;
    outline-style: none;
}

@media (max-width: 600px) {
    #imgResp {
    width: 70px;
    
}
}
</style>


<body>
    

<nav class="navbar navbar-expand-lg navbar-dark">
<div class="row">
<div class="col-sm-12">
                    <img src="Assets/img/Encuesta RegAdmon-03.png" class="img-thumbnail" style="background-color: transparent; border: none;" width="250px" alt="Responsive image">

                    <img src="Assets/img/Encuesta RegAdmon-05.png" id="imgResp" class="img-thumbnail mt-4" style="background-color: transparent;" width="80px" alt="Responsive image">
             
</div>
</div>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                
                </div>
                <div class="row-fluid">
                    
                    <div class="col-sm-8 float-right">
                    <img src="Assets/img/Encuesta RegAdmon-04.png" class="img-thumbnail mt-4" style="background-color: transparent;" width="750px" alt="Responsive image">
                  
                    </div>
                </div>
</nav>

<div class="container-fluid">
<div class="row justify-content-center mt-3">
	<div class="col-md-12">
		<!-- form complex example -->
		<div class="card card-outline-secondary">
			<div class="card-header">
				<h4 class="mb-0">Registro de usuario nuevo</h4> <br>
                <h5 class="mb-0 ">Información General</h5>
			</div>
			<div class="card-body">
        <form id="frmRegUser" method="POST" >
		
				  <div class="row">
				  <div class="col-sm-12 pb-3">
				   <p class="p-2 mt-2" style="color: black; font-size: 20px">
                            Un registro administrativo se constituye por la serie de actividades y recursos orientados a la recopilación de datos sobre un hecho, evento, suceso o acción sujeto a regulación o control que recaba una oficina del sector público como parte de su función y que es de utilidad para la administración pública y la sociedad y tienen las siguientes características:
                        </p>
                        <p class="p-1 ml-4" style="color: black; font-weight: bold; font-size: 17px">
                            1.- Tienen un sustento jurídico, administrativo o programático <br>
                            2.- Recaban información en forma continua o periódica <br>
                            3.- Su recopilación es con el uso de formatos o integración de expedientes <br>
                            4.- Están contenidos en archivos impresos o electrónicos <br>
                            5.- Refieren información de utilidad a las instituciones para dar cumplimiento a actividades sustantivas
                        </p>

                        <p class="" style="color: black; font-size: 17px">
                            Ejemplo (Actas de nacimiento, cédulas de identificación, Sistemas de registro de información, Estados contables, programáticos y presupuestarios, padrones de beneficiarios, registros de visitantes, etc.)
                        </p> <br>
				   <label for="rAdmin">Con base en lo anterior, <strong>¿El área donde labora cuenta con registros administrativos?</strong></label> 
                        <select id="rAdmin" name="rAdmin" class="form-control custom-select">
                                        <option class="text-black" selected="" disabled="" value="" >Seleccione una opción</option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                        </select>
				   </div>
					<div class="col-sm-6 pb-3">
						<label for="answer01">Sector al que pertenece:</label> 
                        <select id="answer01" name="answer01" class="form-control custom-select">
                                        <option class="text-black" selected="" disabled="" value="" >Seleccione un sector</option>
                                        <option value="Estatal">Estatal</option>
                                        <option value="Municipal">Municipal</option>
                        </select>
					</div>
					<div class="col-sm-6 pb-3">
                        <div id="institutions" class="row" style="display: none;">
                                        <label class="fieldlabels">1. Institución:</label>
                                        <select name="institution" id="institution" class="form-control custom-select">
                                            <option class="text-black" selected="" disabled="" value="">Seleccionar Institución</option>

                                        </select>

                                    </div>

                                    <div id="municipalities" class="row" style="display: none;">
                                        <label class="fieldlabels">1. Municipio:</label>
                                        <select name="municipality" id="municipality" class="form-control custom-select">
                                            <option class="text-black" selected="" disabled="" value="">Seleccionar Municipio</option>

                                        </select>
                                    </div>
					</div>

					<div class="col-sm-6 pb-3">
					<label class="fieldlabels">2. Área de Adscripción:</label>
                                        <input type="text" id="adscripcion" name="adscripcion" class="form-control" placeholder="Área de Adscripción" value="">
</div>
					<div class="col-sm-6 pb-3" id="cnne">
				
                                        <label class="fieldlabels">3. Puesto:</label>
                                        <select id="appointment" name="appointment" class="form-control custom-select">
                                            <option class="text-black" selected="" disabled="" value="">Seleccionar puesto</option>

                                        </select>

                        
					</div>
					<div class="col-sm-3 pb-3" id="other_appointment" style="display: none;">
				
                                        <label class="fieldlabels">3.1. Especifique otro puesto:</label>
                                        <input type="text" id="appointment_other" name="appointment_other" class="form-control" placeholder="Otro Puesto">

                               
					</div>
					
                                   
					
					<div class="col-sm-6 pb-3">
					<label class="fieldlabels">5. Correo Electronico:</label>
                                        <input type="email" id="email" name="email" class="form-control" style="color: black;" placeholder="Correo Electronico" value="<?php echo $email?>">

					</div>
					<div class="col-sm-3 pb-3">
					<label class="fieldlabels">4. Telefono:</label>
                                            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono" value="" maxlength="10">
					</div>
					
					<div class="col-sm-3 pb-3">
					<label class="fieldlabels">Extensión:</label>
                                            <input type="text" id="ext" name="ext" class="form-control" placeholder="Extensión" value="" maxlength="5">
					
				   </div>


				</div>
        </form>
			</div>
			<div class="card-footer mb-3">
				<div class="float-right">
                    <a class="btn btn-secondary" href="index.php" style="width: 100px;" type="reset">Cancelar</a> 
					<button id="sendForm" class="btn btn-dark" style="width: 150px;" type="button">Registrar</button>
				</div>
			</div>
		</div><!--/card-->
	</div>
</div><!--/row-->
</div><!--/container-->
<br>
<br>
<br>


       <!--MODAL RESPONSE OK-->
       <div class="modal fade" id="myModalOk" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #666666; color:white;">
          
          <h4 class="modal-title">Registro Administrativo</h4>
        </div>
        <div class="modal-body">
          Registro exitoso. <br> <br>
        </div>
      </div>
      
    </div>
  </div>

  <!--MODAL RESPONSE ERROR-->
<div class="modal fade" id="myModalError" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #666666; color:white;">
          
          <h4 class="modal-title">Registro Administrativo</h4>
        </div>
        <div class="modal-body">
          Ocurrio un error, vuelve a intetarlo. 
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="myModalEmailExists" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #666666; color:white;">
          
          <h4 class="modal-title">Registro Administrativo</h4>
        </div>
        <div class="modal-body">
          El email indicado ya se encuentra registrado. 
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </div>
      
    </div>
  </div>


  <div class="modal fade" id="myModalNoValid" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #666666; color:white;">
          
          <h4 class="modal-title">Registro Administrativo</h4>
        </div>
        <div class="modal-body">
          Email no valido. 
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="myModalAppointmentO" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #666666; color:white;">
          
          <h4 class="modal-title">Registro Administrativo</h4>
        </div>
        <div class="modal-body">
          Especifica otro tipo de puesto.
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </div>
      
    </div>
  </div>

  


<script>
  const campoNumerico = document.getElementById('telefono');

campoNumerico.addEventListener('keydown', function(evento) {
  const teclaPresionada = evento.key;
  const teclaPresionadaEsUnNumero =
    Number.isInteger(parseInt(teclaPresionada));

  const sePresionoUnaTeclaNoAdmitida = 
    teclaPresionada != 'ArrowDown' &&
    teclaPresionada != 'ArrowUp' &&
    teclaPresionada != 'ArrowLeft' &&
    teclaPresionada != 'ArrowRight' &&
    teclaPresionada != 'Backspace' &&
    teclaPresionada != 'Delete' &&
    teclaPresionada != 'Enter' &&
    !teclaPresionadaEsUnNumero;
  const comienzaPorCero = 
    campoNumerico.value.length === 0 &&
    teclaPresionada == 0;

  if (sePresionoUnaTeclaNoAdmitida || comienzaPorCero) {
    evento.preventDefault(); 
  }

});

const campoNumerico_ = document.getElementById('ext');

campoNumerico_.addEventListener('keydown', function(evento) {
  const teclaPresionada = evento.key;
  const teclaPresionadaEsUnNumero =
    Number.isInteger(parseInt(teclaPresionada));

  const sePresionoUnaTeclaNoAdmitida = 
    teclaPresionada != 'ArrowDown' &&
    teclaPresionada != 'ArrowUp' &&
    teclaPresionada != 'ArrowLeft' &&
    teclaPresionada != 'ArrowRight' &&
    teclaPresionada != 'Backspace' &&
    teclaPresionada != 'Delete' &&
    teclaPresionada != 'Enter' &&
    !teclaPresionadaEsUnNumero;
  const comienzaPorCero = 
    campoNumerico_.value.length === 0 &&
    teclaPresionada == 0;

  if (sePresionoUnaTeclaNoAdmitida) {
    evento.preventDefault(); 
  }

});



			$(document).ready(function(){
				$("#sendForm").click(function(){
					var dataUser = $("#frmRegUser").serialize();
                    $.ajax({
						type: "POST",
						url: "Functions/InsertUser.php",
						data: dataUser,
						success: function(r) {
							if(r == 1) {
								$('#myModalOk').modal("show");
                               setTimeout(function(){
                                location.href = 'registros.php';
                                  }, 790);
							}
              else if(r == 0) {
                                $('#myModalError').modal("show");
                                
							} else if(r == 2) {
                    $('#myModalNoValid').modal("show");
						} else if(r==3) {
              $('#myModalEmailExists').modal("show");
            } else {
              
              $('#myModalAppointmentO').modal("show");
            }
            }
					});
				});
			});

		</script>
	 <script src="Assets/js/index.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>