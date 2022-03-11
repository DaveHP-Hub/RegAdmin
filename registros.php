<?php
session_start();
$email = $_SESSION['validateUser'];
$id = $_SESSION['id'];
$responseUser = $_SESSION['resp'];
$color = "white";
if (isset($_SESSION['validateUser'])) {
	include "Template/header.php";
?>
	<style>
		
		
		body {

			background-color: #e6e6e6;
			@font-face {
      font-family: Adelle Sans;
      src: url("Assets/fonts/ADELLE SANS/AdelleSans-Regular.otf");
      src: url("Assets/fonts/ADELLE SANS/AdelleSans-Bold.otf");
  }
		
		}



		.card-header {
			background: #666666;
			color: white !important;
			outline: none;
		}

		.card {
			box-shadow:
				inset 0 -3em 3em rgba(0, 0, 0, 0.1),
				0 0 0 2px rgb(255, 255, 255),
				0.3em 0.3em 1em rgba(0, 0, 0, 0.3);

		}

		button {
			box-shadow:
				inset 0 -3em 3em rgba(0, 0, 0, 0.1),
				0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
			cursor: pointer;

			outline: none !important;
			color: white;

		}

		.btn-link {
			color: white;
			outline: none;
		}

		.btn-link:hover {
			color: white;
			outline: none;
		}

		.btn-link:focus {
			outline: none;
		}

		.table {
			border-radius: 1em;
			width: 100%;
		}

		.expand {
			width: 100%;


		}

		.fas{
			@font-face {
      font-family: Adelle Sans;
      src: url("Assets/fonts/ADELLE SANS/AdelleSans-Regular.otf");
      src: url("Assets/fonts/ADELLE SANS/AdelleSans-Bold.otf");
		}
	}


	.cnn {
		color: white !important;
	
		
	}

	.nav-link {
		color: white;
	}
	</style>

	<br> <br>
	<div class="container-fluid">
		<input type="hidden" name="userRA" id="userRA" value="<?php echo $responseUser?>">
		<div class="row justify-content-center">
			<div id="ll" class="col-md-12">
				<div id="card-Register-Admin" class="card card-outline-secondary" style="display: block;">
					<div class="card-header ">
						<div class="row">
							<div class="col-sm-9">
							<h5 class="mb-0">Información Encontrada</h5>
							</div>
							<div class="col-sm-3 float-right" style="color: white;">
				
			<ul class="navbar-nav">
                    
                    <li class="nav-item dropdown" style="text-align:right;"> 
                        <a class="nav-link dropdown-toggle cnn" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user cnn"></i>&nbsp;<strong><?php echo $email ?></strong>  </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan" style="background-color: white; color:white;" aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item" href="Functions/logout.php">Cerrar Sesión</a>
                        </div>
                    </li>
            </ul>
							</div>
						</div>
						
					
					</div>
					<div class="card-body ">

						<h2 id="h2">Registros Administrativos Encontrados</h2>
						<p id="p">A continuación se muestran todos los registros administrativos de el usuario. <br></p>
						<div class="col-lg-12">
						<a id="add-RegAdmin-btn" href="agregarRegistro.php" type="button" class="btn btn-secondary" style="background-color: black;"><strong> Nuevo Registro Administrativo</strong> &nbsp;<i class="fas fa-file-alt"></i></a> <br> <br>

						</div>
						

						<div class="alert m-0" style="border: none;" role="alert" id="messageAlert">
						<img src="Assets/img/Gracias encuesta REgAdmon_1.jpg" class="img-thumbnail mx-auto d-block rounded" width="1000px" height="200px" alt="Responsive image">
</div>

<div id="table" class=" table table-responsive">
						<table id="table" class="table">
						
							<thead style="background-color: #666666; color: white">
								<tr>
									<th>Codigo</th>
									<th>Nombre</th>
									<th>Objetivo</th>
									<th>Realiza analisis de los resultados</th>
									<th>Fecha de Captura</th>
									<th>Fecha de Actualización</th>
									<th>Ver detalle</th>
									<th>Acción</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include_once "DBConnection/connection.php";
								$queryAll = $conn->query("SELECT * FROM RegistroAdministrativo WHERE FKUsuario = '$id'");
								if ($queryAll && $queryAll->num_rows > 0) {
									$queryAll->fetch_all(MYSQLI_ASSOC);
								}

								foreach ($queryAll as $row) :

								?>
								<input id="idRe" type="hidden" value="<?php echo $row['idRegAdmin']; ?>">
									<tr>
										<td><strong><?php echo $row['idRegAdmin']; ?></strong></td>
										<td><?php echo $row['nombreReg']; ?></td>
										<td><?php echo $row['objetivoReg']; ?></td>
										<td><?php if ($row['analisisReg'] === "1") echo $res = "Si";
											else if($row['analisisReg'] === "0") echo $res = "No";?></td>
										<td><?php echo $row['fechaRegistro']; ?></td>
										<td><?php echo $row['fechaUpdate']?></td>
										<td><a href='detalleRregistro.php?id=<?php echo $row['idRegAdmin']; ?>'><i class="fas fa-eye" style="color: black;">&nbsp; Ver registro completo</i></a></td>
										<td><a href="actualizarRegistro.php?id=<?php echo $row['idRegAdmin']?>"><i class="fas fa-edit" style="color: black;">&nbsp; Editar</i></a></td>

									</tr>
								<?php

								endforeach;

								?>
							</tbody>
						</table>
						</div>

					</div>
					<div class="card-footer" style="margin-bottom: 2.5em;">
						<div class="float-right">

						</div>
					</div>
				</div>
				<!--/card-->
			</div>
		</div>
	</div>
	<!--/container-->

	<script>
		var valId = $('#idRe').val();
		if(valId == null)
			document.getElementById("table").style.display = "none";
		else
		document.getElementById("table").style.display ="block";

		var RespUser = $('#userRA').val();
		if(RespUser == "0") {
		document.getElementById('add-RegAdmin-btn').style.display = "none";
		document.getElementById('messageAlert').style.display = "block";
		document.getElementById('h2').style.display = "none";
		document.getElementById('p').style.display = "none";
	}
		else {
		document.getElementById('add-RegAdmin-btn').style.display = "inline-block";
		document.getElementById('messageAlert').style.display = "none";
		document.getElementById('h2').style.display = "block";
		document.getElementById('p').style.display = "block";
	}
	</script>

<?php
	include "Template/footer.php";
} else {
	echo "<script>location.href='index.php';</script>";
	session_destroy();
}
?>