<?php
session_start();
$email = $_SESSION['validateUser'];
$id = $_SESSION['id'];
$idReg = $_GET['id'];
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
            color: white;
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

        table {
            border-radius: 1em;
            width: 100%;
        }

        table {
            border-collapse: separate;
            border-spacing: 4px;
            border: 2px solid gray;
        }

        th,
        td {
            border: 1px solid gray;
        }


        th,
        td {
            padding: 10px 15px;
        }

        thead,
        tfoot,
        th {
            background-color: #666666;
            color: white;

        }

        tr,
        td,
        th {
            border-radius: 1em;

        }


        label {
        font-weight: bold;
        }

        .cnn {
            color: white !important;
        }
    </style>



    <br> <br>
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div id="ll" class="col-md-12">

                <div id="card-Register-Admin" class="card card-outline-secondary" style="display: block;">
                    <div class="card-header ">
                    <div class="row">
							<div class="col-sm-9">
							<h5 class="mb-0 ">Información Necesaria</h5>
							</div>
							<div class="col-sm-3 float-right">
				
							<ul class="navbar-nav">
                     
                    <li class="nav-item dropdown" style="text-align:right;">
                        <a class="nav-link dropdown-toggle cnn" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user cnn"></i> &nbsp;<strong><?php echo $email ?></strong> </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item" href="Functions/logout.php">Cerrar Sesión</a>
                        </div>
                    </li>
            </ul>
							</div>
						</div>
                    </div>
                    <div class="card-body">

                        <h2>Registro Administrativo Encontrado</h2>
                        <p>A continuación se muestran el detalle completo del registro administrativo seleccionado</p>

                        <div class="row pr-4 pb-2 pl-4 float-left"><a id="back-RegAdmin-btn" href="registros.php" type="button" class="btn btn-dark"><i class="fas fa-arrow-alt-circle-left"></i><strong> &nbsp; Regresar</strong></a></div>
                        
                        <?php
                        include_once "DBConnection/connection.php";
                        $queryAll = $conn->query("SELECT * FROM RegistroAdministrativo WHERE idRegAdmin = '$idReg'");
                        if ($queryAll && $queryAll->num_rows > 0) {
                            $queryAll->fetch_all(MYSQLI_ASSOC);
                        }
                        foreach ($queryAll as $row) :

                        ?>
                        <?php


                        endforeach;

                        ?>


                        <table class="table table-bordered table-responsive">
                            <colgroup>
                                <col width="75%">
                                <col width="25%">
                            </colgroup>
                            <thead>
                                
                                <th>Pregunta</th>
                                <th>Otro (en caso de escoger otro(s))</th>
                            </thead>
                            <tbody>
                                        <input type="hidden" name="userId" id="userId" value="<?php echo $id ?>">
                                        <input type="hidden" name="idReg" id="idReg" value="<?php echo $idReg ?>">

                                <tr>
                                    
                                    <td>
                                        <label class="fieldlabels">1. Nombre del Registro Administrativo:</label>
                                        <textarea id="nameRA" disabled required name="nameRA" class="form-control" value=""><?php if ($row['nombreReg'] === "" || $row['nombreReg'] === null || $row['nombreReg'] === " ") echo "Sin especificar";
                                                                                                                                                                                else echo $row['nombreReg'] ?></textarea>

                                    </td>

                                </tr>
                                <tr>
                                   
                                    <td>
                                        <label class="fieldlabels">2. Objetivo del Registro Administrativo:</label>
                                        <textarea id="objetiveRA" disabled name="objetiveRA" class="form-control" value="" maxlength="500"><?php if ($row['objetivoReg'] === "" || $row['objetivoReg'] === null || $row['objetivoReg'] === " ") echo "Sin especificar";
                                                                                                                                                                                                else echo $row['objetivoReg'] ?></textarea>

                                    </td>
                                </tr>
                                <tr>
                                  
                                    <td>
                                        <label class="fieldlabels">3. El registro administrativo ¿cuenta con un fundamento jurídico-administrativo?</label>
                                        <select id="basisJA" name="basisJA" class="form-control custom-select" disabled>
                                            <option disabled="" value="-1" <?php if ($row['regJuridico'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['regJuridico'] == "1") {
                                                                    echo "selected";
                                                                } ?>>Si</option>
                                            <option value="0" <?php if ($row['regJuridico'] == "0") {
                                                                    echo "selected";
                                                                } ?>>No</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label class="fieldlabels">3.1. ¿Cuál?</label>
                                        <input type="text" disabled id="bAnswer" name="bAnswer" class="form-control mt-4" value="<?php if ($row['respJuri'] === "" || $row['respJuri'] === null || $row['respJuri'] === " ") echo "No aplica";
                                                                                                                                                        else echo $row['respJuri'] ?>">

                                    </td>
                                </tr>
                                <tr>
                                  
                                    <td>
                                        <label class="fieldlabels">4. ¿Qué tipo de información se recaba en el Registro Administrativo?</label>
                                        <select name="typeRA" id="typeRA" class="form-control custom-select" disabled>
                                            <option value=" " disabled="" <?php if ($row['tipoInfo'] == " ") echo "selected" ?>>Sin especificar</option>
                                            <option value="Estadística" <?php if ($row['tipoInfo'] == "Estadística") {
                                                                            echo "selected";
                                                                        } ?>>Estadística</option>
                                            <option value="Geográfica" <?php if ($row['tipoInfo'] == "Geográfica") {
                                                                            echo "selected";
                                                                        } ?>>Geográfica</option>
                                            <option value="Ambas" <?php if ($row['tipoInfo'] == "Ambas") {
                                                                            echo "selected";
                                                                        } ?>>Ambas</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                   
                                    <td>
                                        <label class="fieldlabels">5. ¿La información del registro se encuentra georreferenciada?</label>
                                        <select name="geoRA" id="geoRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" <?php if ($row['geoReg'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['geoReg'] == "1") {
                                                                    echo "selected";
                                                                } ?>>Si</option>
                                            <option value="0" <?php if ($row['geoReg'] == "0") {
                                                                    echo "selected";
                                                                } ?>>No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>
                                        <label class="fieldlabels">6. ¿De los siguientes rubros, señale qué tema se encuentra asociado con el objetivo del Registro Administrativo? </label>
                                        <select name="entryRA" id="entryRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" <?php if ($row['temaReg'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['temaReg'] == "1") {
                                                                    echo "selected";
                                                                } ?>>Agua</option>
                                            <option value="2" <?php if ($row['temaReg'] == "2") {
                                                                    echo "selected";
                                                                } ?>>Asentamientos humanos</option>
                                            <option value="3" <?php if ($row['temaReg'] == "3") {
                                                                    echo "selected";
                                                                } ?>>Biodiversidad</option>
                                            <option value="4" <?php if ($row['temaReg'] == "4") {
                                                                    echo "selected";
                                                                } ?>>Bosques</option>
                                            <option value="5" <?php if ($row['temaReg'] == "5") {
                                                                    echo "selected";
                                                                } ?>>Cambio climático</option>
                                            <option value="6" <?php if ($row['temaReg'] == "6") {
                                                                    echo "selected";
                                                                } ?>>Ciencia, Tecnología e Innovación</option>
                                            <option value="7" <?php if ($row['temaReg'] == "7") {
                                                                    echo "selected";
                                                                } ?>>Comercio Exterior</option>
                                            <option value="8" <?php if ($row['temaReg'] == "8") {
                                                                    echo "selected";
                                                                } ?>>Comercio y Servicios</option>
                                            <option value="9" <?php if ($row['temaReg'] == "9") {
                                                                    echo "selected";
                                                                } ?>>Competitividad</option>
                                            <option value="10" <?php if ($row['temaReg'] == "10") {
                                                                    echo "selected";
                                                                } ?>>Comunicaciones</option>
                                            <option value="11" <?php if ($row['temaReg'] == "11") {
                                                                    echo "selected";
                                                                } ?>>Corrupción</option>
                                            <option value="12" <?php if ($row['temaReg'] == "12") {
                                                                    echo "selected";
                                                                } ?>>Cultura Física y Deporte</option>
                                            <option value="13" <?php if ($row['temaReg'] == "13") {
                                                                    echo "selected";
                                                                } ?>>Cultura y entretenimiento</option>
                                            <option value="14" <?php if ($row['temaReg'] == "14") {
                                                                    echo "selected";
                                                                } ?>>Datos topográficos</option>
                                            <option value="15" <?php if ($row['temaReg'] == "15") {
                                                                    echo "selected";
                                                                } ?>>Desarrollo Social</option>
                                            <option value="16" <?php if ($row['temaReg'] == "16") {
                                                                    echo "selected";
                                                                } ?>>Dinámica de las Unidades Económicas</option>
                                            <option value="17" <?php if ($row['temaReg'] == "17") {
                                                                    echo "selected";
                                                                } ?>>Discapacidad</option>
                                            <option value="18" <?php if ($row['temaReg'] == "18") {
                                                                    echo "selected";
                                                                } ?>>Discriminación</option>
                                            <option value="19" <?php if ($row['temaReg'] == "19") {
                                                                    echo "selected";
                                                                } ?>>Educación</option>
                                            <option value="20" <?php if ($row['temaReg'] == "20") {
                                                                    echo "selected";
                                                                } ?>>Emisiones, Residuos sólidos y sustancias peligrosas</option>
                                            <option value="21" <?php if ($row['temaReg'] == "21") {
                                                                    echo "selected";
                                                                } ?>>Estadísticas de los Sectores Telecomunicaciones y Radiodifusión</option>
                                            <option value="22" <?php if ($row['temaReg'] == "22") {
                                                                    echo "selected";
                                                                } ?>>Finanzas Públicas</option>
                                            <option value="23" <?php if ($row['temaReg'] == "23") {
                                                                    echo "selected";
                                                                } ?>>Gobierno / Gobernanza</option>
                                            <option value="24" <?php if ($row['temaReg'] == "24") {
                                                                    echo "selected";
                                                                } ?>>Impartición de Justicia</option>
                                            <option value="25" <?php if ($row['temaReg'] == "25") {
                                                                    echo "selected";
                                                                } ?>>Información Catastral y Registral</option>
                                            <option value="26" <?php if ($row['temaReg'] == "26") {
                                                                    echo "selected";
                                                                } ?>>Información legislativa</option>
                                            <option value="27" <?php if ($row['temaReg'] == "27") {
                                                                    echo "selected";
                                                                } ?>>Juventud</option>
                                            <option value="28" <?php if ($row['temaReg'] == "28") {
                                                                    echo "selected";
                                                                } ?>>Límites , estatales y municipales</option>
                                            <option value="29" <?php if ($row['temaReg'] == "29") {
                                                                    echo "selected";
                                                                } ?>>Marcas, Patentes y Derechos de autor</option>
                                            <option value="30" <?php if ($row['temaReg'] == "30") {
                                                                    echo "selected";
                                                                } ?>>Migración</option>
                                            <option value="31" <?php if ($row['temaReg'] == "31") {
                                                                    echo "selected";
                                                                } ?>>Minería</option>
                                            <option value="32" <?php if ($row['temaReg'] == "32") {
                                                                    echo "selected";
                                                                } ?>>Movilidad</option>
                                            <option value="33" <?php if ($row['temaReg'] == "33") {
                                                                    echo "selected";
                                                                } ?>>Participación ciudadana y política</option>
                                            <option value="34" <?php if ($row['temaReg'] == "34") {
                                                                    echo "selected";
                                                                } ?>>Población y Dinámica Demográfica</option>
                                            <option value="35" <?php if ($row['temaReg'] == "35") {
                                                                    echo "selected";
                                                                } ?>>Pobreza</option>
                                            <option value="36" <?php if ($row['temaReg'] == "36") {
                                                                    echo "selected";
                                                                } ?>>Prevención del delito</option>
                                            <option value="37" <?php if ($row['temaReg'] == "37") {
                                                                    echo "selected";
                                                                } ?>>Procuración de Justicia</option>
                                            <option value="38" <?php if ($row['temaReg'] == "38") {
                                                                    echo "selected";
                                                                } ?>>Producto Interno Bruto</option>
                                            <option value="39" <?php if ($row['temaReg'] == "39") {
                                                                    echo "selected";
                                                                } ?>>Pueblos Indígenas</option>
                                            <option value="40" <?php if ($row['temaReg'] == "40") {
                                                                    echo "selected";
                                                                } ?>>Recursos naturales</option>
                                            <option value="41" <?php if ($row['temaReg'] == "41") {
                                                                    echo "selected";
                                                                } ?>>Religión</option>
                                            <option value="42" <?php if ($row['temaReg'] == "42") {
                                                                    echo "selected";
                                                                } ?>>Salud</option>
                                            <option value="43" <?php if ($row['temaReg'] == "43") {
                                                                    echo "selected";
                                                                } ?>>Sector Agroalimentario, Pesquero, silvícola y forestal</option>
                                            <option value="44" <?php if ($row['temaReg'] == "44") {
                                                                    echo "selected";
                                                                } ?>>Sector Transportes</option>
                                            <option value="45" <?php if ($row['temaReg'] == "45") {
                                                                    echo "selected";
                                                                } ?>>Sector Turismo</option>
                                            <option value="46" <?php if ($row['temaReg'] == "46") {
                                                                    echo "selected";
                                                                } ?>>Sectores Industriales</option>
                                            <option value="47" <?php if ($row['temaReg'] == "47") {
                                                                    echo "selected";
                                                                } ?>>Seguridad pública</option>
                                            <option value="48" <?php if ($row['temaReg'] == "48") {
                                                                    echo "selected";
                                                                } ?>>Sistema Penitenciario</option>
                                            <option value="49" <?php if ($row['temaReg'] == "49") {
                                                                    echo "selected";
                                                                } ?>>Suelo</option>
                                            <option value="50" <?php if ($row['temaReg'] == "50") {
                                                                    echo "selected";
                                                                } ?>>Transparencia y rendición de cuentas</option>
                                            <option value="51" <?php if ($row['temaReg'] == "51") {
                                                                    echo "selected";
                                                                } ?>>Uso del suelo, Vegetación y Recursos forestales</option>
                                            <option value="52" <?php if ($row['temaReg'] == "52") {
                                                                    echo "selected";
                                                                } ?>>Vivienda y hogares</option>
                                            <option value="53" <?php if ($row['temaReg'] == "53") {
                                                                    echo "selected";
                                                                } ?>>Otro</option>

                                        </select>
                                    </td>
                                    <td>
                                        <label class="fieldlabels">6.1. Especifique otro Rubro: </label>
                                        <input type="text" disabled id="entry_other" name="entry_other" class="form-control mt-4" value="<?php if ($row['otroTema'] === "" || $row['otroTema'] === null || $row['otroTema'] === " ") echo "No aplica";
                                                                                                                                                                    else echo $row['otroTema'] ?>">

                                    </td>
                                </tr>

                                <tr>
                                    
                                    <td>
                                        <label class="fieldlabels">7. ¿Cuáles son los campos y/o variables con las que cuenta el registro administrativo?</label>
                                        <textarea id="varRA" disabled name="varRA" class="form-control" value="" maxlength="500" placeholder="Variables del Registro Administrativo"><?php if ($row['variablesReg'] === "" || $row['variablesReg'] === null || $row['variablesReg'] === " ") echo "Sin especificar";
                                                                                                                                                                                        else echo $row['variablesReg'] ?></textarea>

                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>
                                        <label class="fieldlabels">8. ¿Cuál es la unidad de medida del Registro Administrativo?</label>
                                        <select name="unitRA" id="unitRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" <?php if ($row['unidadMedida'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['unidadMedida'] == "1") echo "selected" ?>>Viviendas</option>
                                            <option value="2" <?php if ($row['unidadMedida'] == "2") echo "selected" ?>>Hogares</option>
                                            <option value="3" <?php if ($row['unidadMedida'] == "3") echo "selected" ?>>Personas</option>
                                            <option value="4" <?php if ($row['unidadMedida'] == "4") echo "selected" ?>>Localidades</option>
                                            <option value="5" <?php if ($row['unidadMedida'] == "5") echo "selected" ?>>Pesos</option>
                                            <option value="6" <?php if ($row['unidadMedida'] == "6") echo "selected" ?>>Dólares</option>
                                            <option value="7" <?php if ($row['unidadMedida'] == "7") echo "selected" ?>>Índice</option>
                                            <option value="8" <?php if ($row['unidadMedida'] == "8") echo "selected" ?>>Visitas</option>
                                            <option value="9" <?php if ($row['unidadMedida'] == "9") echo "selected" ?>>Reportes</option>
                                            <option value="10" <?php if ($row['unidadMedida'] == "10") echo "selected" ?>>kilómetros</option>
                                            <option value="11" <?php if ($row['unidadMedida'] == "11") echo "selected" ?>>Actas</option>
                                            <option value="12" <?php if ($row['unidadMedida'] == "12") echo "selected" ?>>Otro</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label class="fieldlabels">8.1. Especifique otra Unidad de Medida: </label>
                                        <input type="text" disabled id="unit_other" name="unit_other" class="form-control mt-4" value="<?php if ($row['otroUnidad'] === "" || $row['otroUnidad'] === null || $row['otroUnidad'] === " ") echo "No aplica";
                                                                                                                                                                            else echo $row['otroUnidad'] ?>">

                                    </td>


                                </tr>

                                <tr>
                                   
                                    <td>
                                        <label class="fieldlabels">9. ¿El registro cuenta con datos personales?</label>
                                        <select name="regRA" id="regRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" <?php if ($row['datosPer'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['datosPer'] == "1") {
                                                                    echo "selected";
                                                                } ?>>Si</option>
                                            <option value="0" <?php if ($row['datosPer'] == "0") {
                                                                    echo "selected";
                                                                } ?>>No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>
                                        <label class="fieldlabels">10. Tipo de registro:</label>
                                        <select name="answer16" id="answer16" class="form-control custom-select" disabled>
                                            <option disabled="" value="-1" <?php if ($row['tipoDatosP'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['tipoDatosP'] == "1") echo "selected" ?>>De identidad (Nombre, origen étnico y racial, lengua materna, domicilio, teléfono, correo electrónico, firma,
contraseñas, RFC, CURP, fecha de nacimiento, edad, nacionalidad, estado civil, etc.)</option>
                                                <option value="2" <?php if ($row['tipoDatosP'] == "2") echo "selected" ?>>De trabajo (Institución o empresa donde trabajas, cargo, domicilio, correo electrónico institucional o
empresarial, teléfono del trabajo, etc.)</option>
                                                <option value="3" <?php if ($row['tipoDatosP'] == "3") echo "selected" ?>>De patrimonio (Sueldo o salario, impuestos, cualquier tipo de crédito, tarjetas de débito, cheques, inversiones,
Afore, etc.)</option>
                                                <option value="4" <?php if ($row['tipoDatosP'] == "4") echo "selected" ?>>De educación (Escuelas, calificaciones, títulos, cédulas, certificados, diplomas, etc.)</option>
                                                <option value="5" <?php if ($row['tipoDatosP'] == "5") echo "selected" ?>>De ideología (Religión, afiliación o preferencia política, sindical, participación en organizaciones civiles, etc.)</option>
                                                <option value="6" <?php if ($row['tipoDatosP'] == "6") echo "selected" ?>>De salud (Estado de salud, historial y estudios clínicos, enfermedades, tratamientos médicos,
medicamentos, alergias, embarazos, condición psicológica y/o psiquiátrica, etc.)</option>
                                                <option value="7" <?php if ($row['tipoDatosP'] == "7") echo "selected" ?>>De características físicas (Tipo de sangre, ADN, huella digital, registro de voz, imagen, registro dental, color de piel, iris, cabello, lunares, cicatrices y otras señas particulares, etc.)</option>
                                                <option value="8" <?php if ($row['tipoDatosP'] == "8") echo "selected" ?>>De intimidad ( Preferencias y hábitos sexuales, entre otros.)</option>
                                                <option value="9" <?php if ($row['tipoDatosP'] == "9") echo "selected" ?>>Otro</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label class="fieldlabels">10.1. Especifique otro Tipo de Registro: </label>
                                        <input type="text" disabled id="16_other" name="16_other" class="form-control" placeholder="Otro Tipo de Registro" value="<?php if ($row['otroDPer'] === "" || $row['otroDPer'] === null || $row['otroDPer'] === " ") echo "No aplica";
                                                                                                                                                                    else echo $row['otroDPer'] ?>">

                                    </td>
                                </tr>
                                <tr>
                                  
                                    <td>
                                        <label class="fieldlabels">11. ¿A que nivel obtiene la información del registro? Pueden elegir más de uno (máximo 4)</label>
                                        <select name="levelRA[]" id="levelRA" disabled class="form-control multi-select custom-select" style="outline-style: none; color:black" multiple data-max-options="4" value="">
                                            <?php

                                            $str = $row['nivelRegistro'];
                                            $resultOption = explode("|", $str);


                                            ?>
                                            <option value="1" <?php if (in_array("1", $resultOption)) echo "selected" ?>>Regional</option>
                                            <option value="2" <?php if (in_array("2", $resultOption)) echo "selected" ?>>Estatal</option>
                                            <option value="3" <?php if (in_array("3", $resultOption)) echo "selected" ?>>Municipal</option>
                                            <option value="4" <?php if (in_array("4", $resultOption)) echo "selected" ?>>Localidad</option>
                                            <option value="5" <?php if (in_array("5", $resultOption)) echo "selected" ?>>AGEB</option>
                                            <option value="6" <?php if (in_array("6", $resultOption)) echo "selected" ?>>Otro</option>


                                        </select>
                                    </td>
                                    <td>
                                        <label class="fieldlabels">11.1. Especifique otro Tipo de Nivel: </label>
                                        <input type="text" id="16_lev" disabled name="16_lev" class="form-control mt-4" placeholder="Especifique otro" value="<?php if ($row['otroNivel'] === "" || $row['otroNivel'] === null || $row['otroNivel'] === " ") echo "No aplica";
                                                                                                                                                                else echo $row['otroNivel'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <label class="fieldlabels">12. ¿A partir de que año se realiza la emisión del registro administrativo?</label>
                                        <input type="text" id="yearRA" disabled name="yearRA" class="form-control" placeholder="Año de emisión" value="<?php if ($row['anioEmision'] === "-1") echo "Sin especificar";
                                                                                                                                                        else echo $row['anioEmision'] ?>">

                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <label class="fieldlabels">13. ¿Con qué periodicidad se recauda la información de este registro administrativo?</label>
                                        <select name="periodRA" id="periodRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" selected="" <?php if ($row['periodicidad'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['periodicidad'] == "1") echo "selected" ?>>Anual</option>
                                            <option value="2" <?php if ($row['periodicidad'] == "2") echo "selected" ?>>Semestral</option>
                                            <option value="3" <?php if ($row['periodicidad'] == "3") echo "selected" ?>>Trimestral</option>
                                            <option value="4" <?php if ($row['periodicidad'] == "4") echo "selected" ?>>Bimestral</option>
                                            <option value="5" <?php if ($row['periodicidad'] == "5") echo "selected" ?>>Mensual</option>
                                            <option value="6" <?php if ($row['periodicidad'] == "6") echo "selected" ?>>Semanal</option>
                                            <option value="7" <?php if ($row['periodicidad'] == "7") echo "selected" ?>>Diaria</option>
                                            <option value="8" <?php if ($row['periodicidad'] == "8") echo "selected" ?>>Otro</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label class="fieldlabels">13.1. Especifique otro tipo de Periodicidad: </label>
                                        <input type="text" id="per_ot" name="per_ot" disabled class="form-control mt-4" placeholder="Especifique otro" value="<?php if ($row['otroPerio'] === " " || $row['otroPerio'] === null || $row['otroPerio'] === "") echo "No aplica";
                                                                                                                                                                else echo $row['otroPerio'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <label class="fieldlabels">14. ¿Cuál es la última temporalidad que se tiene disponible?</label>
                                        <input type="text" id="tempoRA" disabled name="tempoRA" class="form-control" placeholder="Ultima temporalidad" value="<?php if ($row['temporalidad'] === " " || $row['temporalidad'] === null || $row['temporalidad'] === "") echo "No aplica";
                                                                                                                                                                else echo $row['temporalidad'] ?>" maxlength="500">

                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <label class="fieldlabels">15. ¿La referencia temporal de la información registrada es coincidente con la periodicidad del levantamiento de la información?</label>
                                        <select name="refRA" id="refRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" <?php if ($row['refTempo'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['refTempo'] == "1") echo "selected" ?>>Si</option>
                                            <option value="0" <?php if ($row['refTempo'] == "0") echo "selected" ?>>No</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label class="fieldlabels">15.1. ¿A que temporalidad se refiere?</label>
                                        <input type="text" id="refTemp" disabled name="refTemp" class="form-control mt-4" placeholder="Especifique a que temporalidad se refiere" value="<?php if ($row['otroRefT'] === " " || $row['otroRefT'] === null || $row['otroRefT'] === "") echo "No aplica";
                                                                                                                                                                                            else echo $row['otroRefT'] ?>" maxlength="500">

                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <label class="fieldlabels">16. ¿La información capturada dispone de un formato o formulario para el levantamiento de la información?</label>
                                        <select name="infoRA" id="infoRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" <?php if ($row['formatoReg'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['formatoReg'] == "1") echo "selected" ?>>Si</option>
                                            <option value="0" <?php if ($row['formatoReg'] == "0") echo "selected" ?>>No</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label class="fieldlabels">16.1. ¿A través de que método se recolecta la información?</label>
                                        <input type="text" id="answerInfo" disabled name="answerInfo" class="form-control" placeholder="Especifique metodo de recolección de información" value="<?php if ($row['otroFormato'] === " " || $row['otroFormato'] === null || $row['otroFormato'] === "") echo "No aplica";
                                                                                                                                                                                                    else echo $row['otroFormato'] ?>" maxlength="500">

                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <label class="fieldlabels">17. ¿A través de que medio se integra la información del registro administrativo?</label>
                                        <select name="medRA" id="medRA" class="form-control custom-select" disabled>
                                            <option value=" " disabled="" <?php if ($row['tipoMedio'] == " ") echo "selected" ?>>Sin especificar</option>
                                            <option value="Medio Electrónico" <?php if ($row['tipoMedio'] == "Medio Electrónico") echo "selected" ?>>Medio Electrónico</option>
                                            <option value="Medio Físico" <?php if ($row['tipoMedio'] == "Medio Físico") echo "selected" ?>>Medio Físico</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label class="fieldlabels">17.1. ¿Cuál?</label>
                                        <input type="text" id="answerMed" disabled name="answerMed" class="form-control mt-4" placeholder="Especifique cuál" value="<?php if ($row['especiMedio'] === " " || $row['especiMedio'] === null || $row['especiMedio'] === "") echo "No aplica";
                                                                                                                                                                    else echo $row['especiMedio'] ?>" maxlength="500">

                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>
                                        <label class="fieldlabels">18. La información del registro administrativo ¿Forma parte de alguna metodología de recolección?</label>
                                        <select name="metRA" id="metRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" <?php if ($row['metodologiaRec'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['metodologiaRec'] == "1") echo "selected" ?>>Si</option>
                                            <option value="0" <?php if ($row['metodologiaRec'] == "0") echo "selected" ?>>No</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label class="fieldlabels">18.1. ¿De cuál?</label>
                                        <input type="text" id="answerMet" disabled name="answerMet" class="form-control mt-4" placeholder="Especifique cuál" value="<?php if ($row['metodoloiaEsp'] === " " || $row['metodoloiaEsp'] === null || $row['metodoloiaEsp'] === "") echo "No aplica";
                                                                                                                                                                    else echo $row['metodoloiaEsp'] ?>" maxlength="500">

                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>
                                        <label class="fieldlabels">19. La información generada ¿es publicada en algún portal oficial?</label>
                                        <select name="publiRA" id="publiRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" <?php if ($row['publicI'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['publicI'] == "1") echo "selected" ?>>Si</option>
                                            <option value="0" <?php if ($row['publicI'] == "0") echo "selected" ?>>No</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label id="rec_" class="fieldlabels"><?php if ($row['publicI'] === "1") {
                                                                                    echo $res__ = "Portales en los que se publica";
                                                                                } else if ($row['publicI'] === "0") {
                                                                                    echo $res__ = "Por qué no se publica";
                                                                                } ?></label>
                                        <input type="text" id="answerPubli" disabled name="answerPubli" class="form-control mt-4" placeholder="" value="<?php if ($row['publicOpc'] === " " || $row['publicOpc'] === null || $row['publicOpc'] === "") echo "No aplica";
                                                                                                                                                        else echo $row['publicOpc'] ?>" maxlength="500">


                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <label class="fieldlabels">20. La información generada ¿sirve de insumo para otra fuente de información?</label>
                                        <select name="inRA" id="inRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" <?php if ($row['fuenteSirve'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['fuenteSirve'] == "1") echo "selected" ?>>Si</option>
                                            <option value="0" <?php if ($row['fuenteSirve'] == "0") echo "selected" ?>>No</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label class="fieldlabels">20.1. ¿A cuál?</label>
                                        <input type="text" id="answerIn" disabled name="answerIn" class="form-control mt-4" value="<?php if ($row['insumoFuente'] === " " || $row['insumoFuente'] === null || $row['insumoFuente'] === "") echo "No aplica";
                                                                                                                                                                                                        else echo $row['insumoFuente'] ?>" maxlength="500">

                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>
                                        <label class="fieldlabels">21. ¿A que instrumento o documento sirve de insumo la información generada?</label>
                                        <input type="text" id="answerId" disabled name="answerId" class="form-control" value="<?php if ($row['docInsumo'] === " " || $row['docInsumo'] === null || $row['docInsumo'] === "") echo "Sin especificar";
                                                                                                                                                                                                            else echo $row['docInsumo'] ?>" maxlength="500">

                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <label class="fieldlabels">22. La información del registro administrativo ¿Es aprovechada para otros fines institucionales?</label>
                                        <select name="instiRA" id="instiRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" <?php if ($row['infoReg'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['infoReg'] == "1") echo "selected" ?>>Si</option>
                                            <option value="0" <?php if ($row['infoReg'] == "0") echo "selected" ?>>No</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label id="rec" class="fieldlabels"><?php if ($row['infoReg'] === "1") {
                                                                                echo $res__ = "22.1. ¿Para qué es aprovechada la información?";
                                                                            } else if ($row['infoReg'] === "0") {
                                                                                echo $res__ = "22.1. ¿Por qué no es aprovechada?";
                                                                            } ?></label>
                                        <input type="text" id="answerinsti" disabled name="answerinsti" class="form-control mt-4" placeholder="Especifique cuál" value="<?php if ($row['infoApro'] === " " || $row['infoApro'] === null || $row['infoApro'] === "") echo "No aplica";
                                                                                                                                                                        else echo $row['infoApro'] ?>" maxlength="500">

                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>
                                        <label class="fieldlabels">23. ¿Utiliza algún software para el procesamiento de datos de este registro administrativo?</label>
                                        <select name="softRA" id="softRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" <?php if ($row['utilSoft'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['utilSoft'] == "1") echo "selected" ?>>Si</option>
                                            <option value="0" <?php if ($row['utilSoft'] == "0") echo "selected" ?>>No</option>
                                        </select>
                                    </td>

                                    <td>
                                        <label class="fieldlabels">23.1. ¿Cuál o Cuáles?</label>
                                        <input type="text" id="answersoft" disabled name="answersoft" class="form-control mt-4" placeholder="Especifique cuál o cuáles" value="<?php if ($row['softwareI'] === " " || $row['softwareI'] === null || $row['softwareI'] === "") echo "No aplica";
                                                                                                                                                                                else echo $row['softwareI'] ?>" maxlength="500">

                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td><label class="fieldlabels">24. ¿La información se procesa en alguna base de datos?</label>
                                        <select name="proRA" id="proRA" class="form-control" disabled>
                                            <option value="-1" disabled="" <?php if ($row['InfoProce'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['InfoProce'] == "1") echo "selected" ?>>Si</option>
                                            <option value="0" <?php if ($row['InfoProce'] == "0") echo "selected" ?>>No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <label class="fieldlabels">25. ¿En que formato se procesa la información?</label>
                                        <select name="formatRA" id="formatRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" <?php if ($row['formatoInfo'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['formatoInfo'] == "1") echo "selected" ?>>XLSX</option>
                                            <option value="2" <?php if ($row['formatoInfo'] == "2") echo "selected" ?>>CSV</option>
                                            <option value="3" <?php if ($row['formatoInfo'] == "3") echo "selected" ?>>DBF</option>
                                            <option value="4" <?php if ($row['formatoInfo'] == "4") echo "selected" ?>>Shapefile</option>
                                            <option value="5" <?php if ($row['formatoInfo'] == "5") echo "selected" ?>>KML o KMZ</option>
                                            <option value="6" <?php if ($row['formatoInfo'] == "6") echo "selected" ?>>CAD</option>
                                            <option value="7" <?php if ($row['formatoInfo'] == "7") echo "selected" ?>>Otro</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label class="fieldlabels">25.1. Especifique otro tipo de Formato: </label>
                                        <input type="text" id="format_ot" disabled name="format_ot" class="form-control" value="<?php if ($row['otroFInfo'] === " " || $row['otroFInfo'] === null || $row['otroFInfo'] === "") echo "No aplica";
                                                                                                                                                                        else echo $row['otroFInfo'] ?>">

                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>
                                        <label class="fieldlabels">26. ¿Realiza análisis de los resultados generados por los registros administrativos que genera?</label>
                                        <select name="analyRA" id="analyRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" <?php if ($row['analisisReg'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['analisisReg'] == "1") echo "selected" ?>>Si</option>
                                            <option value="0" <?php if ($row['analisisReg'] == "0") echo "selected" ?>>No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td>
                                        <label class="fieldlabels">27. ¿De qué tipo?</label>
                                        <select name="analyType" id="analyType" class="form-control custom-select" disabled>
                                            <option disabled="" value="" <?php if ($row['tipoAna'] == " ") echo "selected" ?>>Sin especificar</option>
                                            <option value="Estadístico" <?php if ($row['tipoAna'] == "Estadístico") echo "selected" ?>>Estadístico</option>
                                            <option value="Geográfico" <?php if ($row['tipoAna'] == "Geográfico") echo "selected" ?>>Geográfico</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td><label class="fieldlabels">28. ¿Cuál es el objetivo del analisis?</label>
                                        <textarea id="obtAnaly" name="obtAnaly" disabled class="form-control" placeholder="Objetivo del análisis" value=""><?php if ($row['objetivoAna'] === " " || $row['objetivoAna'] === null || $row['objetivoAna'] === "") echo "Sin especificar";
                                                                                                                                                            else echo $row['objetivoAna'] ?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td><label class="fieldlabels">29.  ¿Con qué periodicidad realiza este proceso de análisis?</label>
                                        <select name="periodARA" id="periodARA" class="form-control custom-select" disabled>
                                            <option value="-1" <?php if ($row['periodicidadAna'] == "-1") echo "selected" ?> disabled="">Sin especificar</option>
                                            <option value="1" <?php if ($row['periodicidadAna'] == "1") echo "selected" ?>>Anual</option>
                                            <option value="2" <?php if ($row['periodicidadAna'] == "2") echo "selected" ?>>Semestral</option>
                                            <option value="3" <?php if ($row['periodicidadAna'] == "3") echo "selected" ?>>Trimestral</option>
                                            <option value="4" <?php if ($row['periodicidadAna'] == "4") echo "selected" ?>>Bimestral</option>
                                            <option value="5" <?php if ($row['periodicidadAna'] == "5") echo "selected" ?>>Mensual</option>
                                            <option value="6" <?php if ($row['periodicidadAna'] == "6") echo "selected" ?>>Semanal</option>
                                            <option value="7" <?php if ($row['periodicidadAna'] == "7") echo "selected" ?>>Diaria</option>
                                            <option value="8" <?php if ($row['periodicidadAna'] == "8") echo "selected" ?>>Otro</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label class="fieldlabels">29.1. Especifique otro tipo de Periodicidad: </label>
                                        <input type="text" id="perA_ot" disabled name="perA_ot" class="form-control" placeholder="Especifique otro" value="<?php if ($row['otraPerioA'] === " " || $row['otraPerioA'] === null || $row['otraPerioA'] === "") echo "No aplica";
                                                                                                                                                            else echo $row['otraPerioA'] ?>">
                                    </td>
                                </tr>

                                <tr>
                                   
                                    <td>
                                        <label class="fieldlabels">30. ¿Se documenta y/o publica el análisis de los resultados generados por el Registro Administrativo?</label>
                                        <select name="publiARA" id="publiARA" class="form-control custom-select" disabled>
                                            <option value="-1" <?php if ($row['docAnaalisis'] == "-1") echo "selected" ?> disabled="">Sin especificar</option>
                                            <option value="1" <?php if ($row['docAnaalisis'] == "1") echo "selected" ?>>Si</option>
                                            <option value="0" <?php if ($row['docAnaalisis'] == "0") echo "selected" ?>>No</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label id="port" class="fieldlabels"><?php if ($row['docAnaalisis'] === "1") {
                                                                                    echo $res__ = "30.1. Portales en los que se publica";
                                                                                } else if ($row['docAnaalisis'] === "0") {
                                                                                    echo $res__ = "30.1. Por qué no se publica";
                                                                                } ?></label>
                                        <input type="text" id="answerPubliA" disabled name="answerPubliA" class="form-control mt-4" placeholder="" value="<?php if ($row['respDocAna'] === " " || $row['respDocAna'] === null || $row['respDocAna'] === "") echo "No aplica";
                                                                                                                                                            else echo $row['respDocAna'] ?>" maxlength="500">

                                    </td>
                                </tr>

                                <tr>
                                    
                                    <td>
                                        <label class="fieldlabels">31. Señale en orden de importancia (siendo 1 el más importante), los principales problemas que afectan la difusión del registro administrativo o las razones por las cuales no se genera:</label>


                                        <select name="impRA[]" id="impRA" value="" class="form-control multi-select custom-select" style="outline-style: none; color:black" multiple data-selected-text-format="count">
                                            <?php

                                            $str = $row['difusionAna'];
                                            $resultOptionA = explode(",", $str);

                                            ?>
                                            <option disabled style="color:black" value="1" <?php if (in_array("1", $resultOptionA)) echo "selected" ?>>Falta de capacitación del personal</option>
                                            <option disabled style="color:black" value="2" <?php if (in_array("2", $resultOptionA)) echo "selected" ?>>Carencia de recurso humano</option>
                                            <option disabled style="color:black" value="3" <?php if (in_array("3", $resultOptionA)) echo "selected" ?>>Insuficiencia y/o deficiencia en el recurso tecnológico</option>
                                            <option disabled style="color:black" value="4" <?php if (in_array("4", $resultOptionA)) echo "selected" ?>>Deficiencia y/o carencia de canales de difusión</option>
                                            <option disabled style="color:black" value="5" <?php if (in_array("5", $resultOptionA)) echo "selected" ?>>Falta de oportunidad en la difusión de los resultados</option>
                                            <option disabled style="color:black" value="6" <?php if (in_array("6", $resultOptionA)) echo "selected" ?>>Falta de una política de difusión</option>
                                            <option disabled style="color:black" value="7" <?php if (in_array("7", $resultOptionA)) echo "selected" ?>>Falta de organización operacional</option>
                                            <option disabled style="color:black" value="8" <?php if (in_array("8", $resultOptionA)) echo "selected" ?>>Otro(s)</option>

                                        </select>
                                    </td>
                                    <td id="impOt">
                                        <label class="fieldlabels">31.1. Especifique otro problema: </label>
                                            <input type="text" id="otImp" disabled name="otImp" class="form-control mt-4" placeholder="" value="<?php if($row['otroDifusion'] === " " || $row['otroDifusion'] === null || $row['otroDifusion'] === "" || $row['otroDifusion'] != "8") echo "No aplica"; else echo $row['otroDifusion'] ?>" maxlength="500">

                                </td>
                                </tr>

                                <tr>
                                   
                                    <td><label class="fieldlabels">32. ¿Conoce las necesidades de información de los usuarios de instituciones públicas y privadas?</label>
                                        <select name="needsRA" id="needsRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" <?php if ($row['necesidadI'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['necesidadI'] == "1") echo "selected" ?>>Si</option>
                                            <option value="0" <?php if ($row['necesidadI'] == "0") echo "selected" ?>>No</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                   
                                    <td><label class="fieldlabels">33. ¿Conoce las necesidades de información no satisfechas de los usuarios?</label>
                                        <select name="needIRA" id="needIRA" class="form-control custom-select" disabled>
                                            <option value="-1" <?php if ($row['necesidadNS'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['necesidadNS'] == "1") echo "selected" ?>>Si</option>
                                            <option value="0" <?php if ($row['necesidadNS'] == "0") echo "selected" ?>>No</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    
                                    <td><label class="fieldlabels">34. ¿Estaría dispuesto a contribuir al fortalecimiento de las necesidades de información no satisfechas de los usuarios?</label>
                                        <select name="contrRA" id="contrRA" class="form-control custom-select" disabled>
                                            <option value="-1" disabled="" <?php if ($row['necesidadS'] == "-1") echo "selected" ?>>Sin especificar</option>
                                            <option value="1" <?php if ($row['necesidadS'] == "1") echo "selected" ?>>Si</option>
                                            <option value="0" <?php if ($row['necesidadS'] == "0") echo "selected" ?>>No</option>
                                        </select>
                                    </td>
                                </tr>

                            </tbody>
                        </table>


                        <div class="card-footer" style="margin-bottom: 2.5em;">
                            <div class="float-right">

                            </div>
                        </div>
                    </div>
                    <!--/card-->
                </div>
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
    <!--/row-->
    </div>
    <!--/container-->

    <script>
        window.onload = function() {
            $(document).ready(function() {
                $('.multi-select').selectpicker();
            });
        }
    </script>

<?php
    include "Template/footer.php";
} else {
    echo "<script>location.href='index.php';</script>";
    session_destroy();
}
?>