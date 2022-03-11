<?php
session_start();
if ($_SESSION['validateUser']) {
    $email = $_SESSION['validateUser'];
    $idU = $_SESSION['id'];
    include "Template/header.php";

?>
    <style>
        body {
            margin: 0;
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
        }

        label {
            font-weight: bold;
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

        .cnn {
            color: white !important;
        }
    </style>
    <br>
    <div class="container-fluid mb-4">
        <div class="row justify-content-center mt-3">
            <div id="ll" class="col-md-12">
                <div id="card-Register-Admin" class="card card-outline-secondary">
                    <div class="card-header">
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

                        <div class="row pr-4 pb-2 pl-4 float-left"><a id="back-RegAdmin-btn" href="registros.php" type="button" class="btn btn-dark"><i class="fas fa-arrow-alt-circle-left"></i><strong> &nbsp; Regresar</strong></a></div>

                        <form id="frmRegAdmin" method="POST">
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
                                            <input type="hidden" name="userId" id="userId" value="<?php echo $idU ?>">
                                    <tr id="status1">
                                        
                                        <td>
                                            <label class="fieldlabels">1. Nombre del Registro Administrativo:</label>
                                            <textarea id="nameRA" required name="nameRA" class="form-control" placeholder="Nombre del Registro Administrativo" value=""></textarea>

                                        </td>

                                    </tr>
                                    <tr id="status2" >
                                        
                                        <td>
                                            <label class="fieldlabels">2. Objetivo del Registro Administrativo:</label>
                                            <textarea id="objetiveRA" name="objetiveRA" class="form-control" placeholder="Objetivo del Registro Administrativo" value="" maxlength="500"></textarea>
                                        </td>
                                    </tr>
                                    <tr id="status3" >
                                    
                                        <td>
                                            <label class="fieldlabels">3. El registro administrativo ¿cuenta con un fundamento jurídico-administrativo?</label>
                                            <select id="basisJA" name="basisJA" class="form-control custom-select">
                                                <option selected="selected" disabled="" value="-1">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                        <td id="answerB" style="display: none;">
                                            <label class="fieldlabels">3.1. ¿Cuál? (especificar)</label>
                                            <input type="text" id="bAnswer" name="bAnswer" class="form-control" placeholder="¿Cuál?" value="" required>
                                            <div class="valid-feedback">
      Looks good!
    </div>
                                        </td>
                                    </tr>
                                    <tr id="status4">
                                        
                                        <td><label class="fieldlabels">4. ¿Qué tipo de información se recaba en el Registro Administrativo?</label>
                                            <select name="typeRA" id="typeRA" class="form-control custom-select">
                                                <option value="-1" disabled="" selected>Selecciona una opción</option>
                                                <option value="Estadística">Estadística</option>
                                                <option value="Geográfica">Geográfica</option>
                                                <option value="Ambas">Ambas</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr id="status5" >
                                        
                                        <td><label class="fieldlabels">5. ¿La información del registro se encuentra georreferenciada?</label>
                                            <select name="geoRA" id="geoRA" class="form-control custom-select">
                                                <option value="" disabled="" selected="">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr id="status6">
                                        
                                        <td>
                                            <label class="fieldlabels">6. ¿De los siguientes rubros, señale qué tema se encuentra asociado con el objetivo del Registro Administrativo? </label>
                                            <select name="entryRA" id="entryRA" class="form-control custom-select">
                                                <option value="" disabled="" selected="">Selecciona un rubro</option>
                                                <option value="1">Agua</option>
                                                <option value="2">Asentamientos humanos</option>
                                                <option value="3">Biodiversidad</option>
                                                <option value="4">Bosques</option>
                                                <option value="5">Cambio climático</option>
                                                <option value="6">Ciencia, Tecnología e Innovación</option>
                                                <option value="7">Comercio Exterior</option>
                                                <option value="8">Comercio y Servicios</option>
                                                <option value="9">Competitividad</option>
                                                <option value="10">Comunicaciones</option>
                                                <option value="11">Corrupción</option>
                                                <option value="12">Cultura Física y Deporte</option>
                                                <option value="13">Cultura y entretenimiento</option>
                                                <option value="14">Datos topográficos</option>
                                                <option value="15">Desarrollo Social</option>
                                                <option value="16">Dinámica de las Unidades Económicas</option>
                                                <option value="17">Discapacidad</option>
                                                <option value="18">Discriminación</option>
                                                <option value="19">Educación</option>
                                                <option value="20">Emisiones, Residuos sólidos y sustancias peligrosas</option>
                                                <option value="21">Estadísticas de los Sectores Telecomunicaciones y Radiodifusión</option>
                                                <option value="22">Finanzas Públicas</option>
                                                <option value="23">Gobierno / Gobernanza</option>
                                                <option value="24">Impartición de Justicia</option>
                                                <option value="25">Información Catastral y Registral</option>
                                                <option value="26">Información legislativa</option>
                                                <option value="27">Juventud</option>
                                                <option value="28">Límites , estatales y municipales</option>
                                                <option value="29">Marcas, Patentes y Derechos de autor</option>
                                                <option value="30">Migración</option>
                                                <option value="31">Minería</option>
                                                <option value="32">Movilidad</option>
                                                <option value="33">Participación ciudadana y política</option>
                                                <option value="34">Población y Dinámica Demográfica</option>
                                                <option value="35">Pobreza</option>
                                                <option value="36">Prevención del delito</option>
                                                <option value="37">Procuración de Justicia</option>
                                                <option value="38">Producto Interno Bruto</option>
                                                <option value="39">Pueblos Indígenas</option>
                                                <option value="40">Recursos naturales</option>
                                                <option value="41">Religión</option>
                                                <option value="42">Salud</option>
                                                <option value="43">Sector Agroalimentario, Pesquero, silvícola y forestal</option>
                                                <option value="44">Sector Transportes</option>
                                                <option value="45">Sector Turismo</option>
                                                <option value="46">Sectores Industriales</option>
                                                <option value="47">Seguridad pública</option>
                                                <option value="48">Sistema Penitenciario</option>
                                                <option value="49">Suelo</option>
                                                <option value="50">Transparencia y rendición de cuentas</option>
                                                <option value="51">Uso del suelo, Vegetación y Recursos forestales</option>
                                                <option value="52">Vivienda y hogares</option>
                                                <option value="53">Otro</option>

                                            </select>
                                        </td>
                                        <td id="other_entry" style="display: none;">
                                            <label class="fieldlabels">6.1. Especifique otro Rubro: </label>
                                            <input type="text" id="entry_other" name="entry_other" class="form-control mt-4" placeholder="Otro Rubro" value="">

                                        </td>
                                    </tr>

                                    <tr id="status7">
                                    
                                        <td>
                                            <label class="fieldlabels">7. ¿Cuáles son los campos y/o variables con las que cuenta el registro administrativo?</label>
                                            <textarea id="varRA" name="varRA" class="form-control" value="" maxlength="500" placeholder="Variables del Registro Administrativo"></textarea>

                                        </td>
                                    </tr>
                                    <tr id="status8">
                                        
                                        <td> <label class="fieldlabels">8. ¿Cuál es la unidad de medida del Registro Administrativo?</label>
                                            <select name="unitRA" id="unitRA" class="form-control custom-select">
                                                <option value="" disabled="" selected="">Selecciona una medida</option>
                                                <option value="1">Viviendas</option>
                                                <option value="2">Hogares</option>
                                                <option value="3">Personas</option>
                                                <option value="4">Localidades</option>
                                                <option value="5">Pesos</option>
                                                <option value="6">Dólares</option>
                                                <option value="7">Índice</option>
                                                <option value="8">Visitas</option>
                                                <option value="9">Reportes</option>
                                                <option value="10">kilómetros</option>
                                                <option value="11">Actas</option>
                                                <option value="12">Otro</option>

                                            </select>
                                        </td>
                                        <td id="other_unit" style="display: none;">
                                            <label class="fieldlabels">8.1 Especifique otra Unidad de Medida: </label>
                                            <input type="text" id="unit_other" name="unit_other" class="form-control" placeholder="Otra Unidad de Medida" value="">

                                        </td>
                                    </tr>

                                    <tr id="status9">
                                        
                                        <td><label class="fieldlabels">9. ¿El registro cuenta con datos personales?</label>
                                            <select name="regRA" id="regRA" class="form-control custom-select">
                                                <option value="" disabled="" selected="">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr id="answers16" style="display: none;">
                                        
                                        <td><label class="fieldlabels">10. Tipo de registro:</label>
                                            <select name="answer16" id="answer16" class="form-control custom-select">
                                                <option selected="" disabled="" value="">Selecciona el tipo de registro</option>
                                                <option value="1">De identidad (Nombre, origen étnico y racial, lengua materna, domicilio, teléfono, correo electrónico, firma,
contraseñas, RFC, CURP, fecha de nacimiento, edad, nacionalidad, estado civil, etc.)</option>
                                                <option value="2">De trabajo (Institución o empresa donde trabajas, cargo, domicilio, correo electrónico institucional o
empresarial, teléfono del trabajo, etc.)</option>
                                                <option value="3">De patrimonio (Sueldo o salario, impuestos, cualquier tipo de crédito, tarjetas de débito, cheques, inversiones,
Afore, etc.)</option>
                                                <option value="4">De educación (Escuelas, calificaciones, títulos, cédulas, certificados, diplomas, etc.)</option>
                                                <option value="5">De ideología (Religión, afiliación o preferencia política, sindical, participación en organizaciones civiles, etc.)</option>
                                                <option value="6">De salud (Estado de salud, historial y estudios clínicos, enfermedades, tratamientos médicos,
medicamentos, alergias, embarazos, condición psicológica y/o psiquiátrica, etc.)</option>
                                                <option value="7">De características físicas (Tipo de sangre, ADN, huella digital, registro de voz, imagen, registro dental, color de piel, iris, cabello, lunares, cicatrices y otras señas particulares, etc.)</option>
                                                <option value="8">De intimidad ( Preferencias y hábitos sexuales, entre otros.)</option>
                                                <option value="9">Otro</option>
                                            </select>
                                        </td>
                                        <td id="other_16" style="display: none;">
                                            <label class="fieldlabels">10.1 Especifique otro Tipo de Registro: </label>
                                            <input type="text" id="16_other" name="16_other" class="form-control" placeholder="Otro Tipo de Registro" value="">
                                        </td>
                                    </tr>
                                    <tr id="status10">
                                       
                                        <td><label class="fieldlabels">11. ¿A que nivel obtiene la información del registro? Pueden elegir más de uno (máximo 4)</label>
                                            <select name="levelRA[]" id="levelRA" class="form-control multi-select custom-select" style="outline-style: none; color:black" multiple data-max-options="4" title="Seleccione 1 maximo 4">
                                                <option value="1">Regional</option>
                                                <option value="2">Estatal</option>
                                                <option value="3">Municipal</option>
                                                <option value="4">Localidad</option>
                                                <option value="5">AGEB</option>
                                                <option value="6">Otro</option>
                                            </select>
                                        </td>
                                        <td id="other_lev" style="display: none;">
                                            <label class="fieldlabels">11.1. Especifique otro Tipo de Nivel: </label>
                                            <input type="text" id="16_lev" name="16_lev" class="form-control mt-4" placeholder="Especifique otro" value="">
                                        </td>
                                    </tr>
                                    <tr id="status11">
                                        
                                        <td><label class="fieldlabels">12. ¿A partir de que año se realiza la emisión del registro administrativo?</label>
                                        <select name="yearRA" id="yearRA" class="form-control custom-select" >
                                                <option value="" selected disabled>Selecciona un año</option>
                                                
                                            </select>
                                    </td>
                                    </tr>
                                    <tr id="status12">
                                        
                                        <td><label class="fieldlabels">13. ¿Con qué periodicidad se recauda la información de este registro administrativo?</label>
                                            <select name="periodRA" id="periodRA" class="form-control custom-select">
                                                <option value=" " disabled="" selected="">Selecciona una periodicidad</option>
                                                <option value="1">Anual</option>
                                                <option value="2">Semestral</option>
                                                <option value="3">Trimestral</option>
                                                <option value="4">Bimestral</option>
                                                <option value="5">Mensual</option>
                                                <option value="6">Semanal</option>
                                                <option value="7">Diaria</option>
                                                <option value="8">Otro</option>
                                            </select>
                                        </td>
                                        <td id="other_per" style="display: none;">
                                            <label class="fieldlabels">13.1 Especifique otro tipo de Periodicidad: </label>
                                            <input type="text" id="per_ot" name="per_ot" class="form-control" placeholder="Especifique otro" value="">
                                        </td>
                                    </tr>
                                    <tr id="status13">
                                        
                                        <td><label class="fieldlabels">14. ¿Cuál es la última temporalidad que se tiene disponible?</label>
                                            <input type="date" id="tempoRA" name="tempoRA" class="form-control mt-4" onkeydown="event.preventDefault()" placeholder="Ultima temporalidad" value="" maxlength="500">
                                        </td>
                                    </tr>
                                    <tr id="status14">
                                        
                                        <td> <label class="fieldlabels">15. ¿La referencia temporal de la información registrada es coincidente con la periodicidad del levantamiento de la información?</label>
                                            <select name="refRA" id="refRA" class="form-control custom-select">
                                                <option value="" disabled="" selected="">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                        <td id="refanswer" style="display: none;"><label class="fieldlabels">15.1 ¿A qué temporalidad se refiere?</label>
                                            <input type="text" id="refTemp" name="refTemp" class="form-control mt-4" placeholder="Especifique a que temporalidad se refiere" value="" maxlength="500">
                                        </td>
                                    </tr>
                                    <tr id="status15">
                                        
                                        <td><label class="fieldlabels">16. ¿La información capturada dispone de un formato o formulario para el levantamiento de la información?</label>
                                            <select name="infoRA" id="infoRA" class="form-control custom-select">
                                                <option value="" disabled="" selected="">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                        <td id="infoAnswer" style="display: none;"> <label class="fieldlabels">16.1 ¿A través de que método se recolecta la información?</label>
                                            <input type="text" id="answerInfo" name="answerInfo" class="form-control" placeholder="Especifique metodo de recolección de información" value="" maxlength="500">
                                        </td>
                                    </tr>
                                    <tr id="status16">
                                       
                                        <td> <label class="fieldlabels">17. ¿A través de que medio se integra la información del registro administrativo?</label>
                                            <select name="medRA" id="medRA" class="form-control custom-select">
                                                <option value="" disabled="" selected="">Selecciona una opción</option>
                                                <option value="Medio Electrónico">Medio Electrónico</option>
                                                <option value="Medio Físico">Medio Físico</option>
                                            </select>
                                        </td>
                                        <td id="medAnswer" style="display: none;">
                                            <label class="fieldlabels">17.1. ¿Cuál?</label>
                                            <input type="text" id="answerMed" name="answerMed" class="form-control" placeholder="Especifique cuál" value="" maxlength="500">

                                        </td>
                                    </tr>
                                    <tr id="status17" >
                                        
                                        <td> <label class="fieldlabels">18. La información del registro administrativo ¿Forma parte de alguna metodología de recolección?</label>
                                            <select name="metRA" id="metRA" class="form-control custom-select">
                                                <option value="" disabled="" selected="">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                        <td id="metAnswer" style="display: none;">
                                            <label class="fieldlabels">18.1. ¿De cuál?</label>
                                            <input type="text" id="answerMet" name="answerMet" class="form-control mt-4" placeholder="Especifique cuál" value="" maxlength="500">

                                        </td>
                                    </tr>
                                    <tr id="status18" >
                                       
                                        <td><label class="fieldlabels">19. La información generada ¿es publicada en algún portal oficial?</label>
                                            <select name="publiRA" id="publiRA" class="form-control custom-select">
                                                <option value="" disabled="" selected="">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                        <td id="publiAnswer" style="display: none;">
                                            <label id="rec_" class="fieldlabels"></label>
                                            <input type="text" id="answerPubli" name="answerPubli" class="form-control" placeholder="" value="" maxlength="500">

                                        </td>
                                    </tr>
                                    <tr id="status19">
                                        
                                        <td> <label class="fieldlabels">20. La información generada ¿sirve de insumo para otra fuente de información?</label>
                                            <select name="inRA" id="inRA" class="form-control custom-select">
                                                <option value="" disabled="" selected="">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                        <td id="inAnswer" style="display: none;">
                                            <label class="fieldlabels">20.1. ¿A cuál?</label>
                                            <input type="text" id="answerIn" name="answerIn" class="form-control" placeholder="Especificar: INEGI, Dependencia federal, estatal, etc." value="" maxlength="500">
                                        </td>
                                    </tr>
                                    <tr id="IdAnswer" style="display: none;">
                                        
                                        <td><label class="fieldlabels">21. ¿A que instrumento o documento sirve de insumo la información generada?</label>
                                            <input type="text" id="answerId" name="answerId" class="form-control" placeholder="Instrumento o doc. que sirve de insumo la información generada" value="" maxlength="500">
                                        </td>
                                    </tr>
                                    <tr id="status20">
                                        
                                        <td> <label class="fieldlabels">22. La información del registro administrativo ¿Es aprovechada para otros fines institucionales?</label>
                                            <select name="instiRA" id="instiRA" class="form-control custom-select">
                                                <option value="" disabled="" selected="">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                        <td id="instiAnswer" style="display: none;">
                                            <label id="rec" class="fieldlabels"></label>
                                            <input type="text" id="answerinsti" name="answerinsti" class="form-control mt-4" placeholder="Especifique cuál" value="" maxlength="500">
                                        </td>
                                    </tr>
                                    <tr id="status21">
                                    
                                        <td>
                                            <label class="fieldlabels">23. ¿Utiliza algún software para el procesamiento de datos de este registro administrativo?</label>
                                            <select name="softRA" id="softRA" class="form-control custom-select">
                                                <option value="" disabled="" selected="">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>

                                        </td>

                                        <td id="softAnswer" style="display: none;">
                                            <label class="fieldlabels">23.1. ¿Cuál o Cuáles?</label>
                                            <input type="text" id="answersoft" name="answersoft" class="form-control mt-4" placeholder="Especifique cuál o cuáles" value="" maxlength="500">
                                        </td>
                                    </tr>
                                    <tr id="status22">
                                        
                                        <td><label class="fieldlabels">24. ¿La información se procesa en alguna base de datos?</label>
                                            <select name="proRA" id="proRA" class="form-control">
                                                <option value="" disabled="" selected="">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr id="status23">
                                       
                                        <td> <label class="fieldlabels">25. ¿En que formato se procesa la información?</label>
                                            <select name="formatRA" id="formatRA" class="form-control custom-select">
                                                <option value="" disabled="" selected="">Selecciona un tipo de Formato</option>
                                                <option value="1">XLSX</option>
                                                <option value="2">CSV</option>
                                                <option value="3">DBF</option>
                                                <option value="4">Shapefile</option>
                                                <option value="5">KML o KMZ</option>
                                                <option value="6">CAD</option>
                                                <option value="7">Otro</option>
                                            </select>
                                        </td>
                                        <td id="other_format" style="display: none;">
                                            <label class="fieldlabels">25.1. Especifique otro tipo de Formato: </label>
                                            <input type="text" id="format_ot" name="format_ot" class="form-control" placeholder="Especifique otro formato" value="">

                                        </td>
                                    </tr>
                                    <tr id="status24">
                                        
                                        <td> <label class="fieldlabels">26. ¿Realiza análisis de los resultados generados por los registros administrativos que genera?</label>
                                            <select name="analyRA" id="analyRA" class="form-control custom-select">
                                                <option value="" disabled="" selected="">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr id="negative1" style="display: none;">
                                       
                                        <td><label class="fieldlabels">27. ¿De qué tipo?</label>
                                            <select name="analyType" id="analyType" class="form-control custom-select">
                                                <option value="" disabled="" selected="">Selecciona de qué tipo</option>
                                                <option value="Estadístico">Estadístico</option>
                                                <option value="Geográfico">Geográfico</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr id="negative2" style="display: none;">
                                       
                                        <td><label class="fieldlabels">28. ¿Cuál es el objetivo del analisis?</label>
                                            <textarea id="obtAnaly" name="obtAnaly" class="form-control" placeholder="Objetivo del análisis" value=" "></textarea>
                                        </td>
                                    </tr>
                                    <tr id="negative3" style="display: none;">
                                        
                                        <td><label class="fieldlabels">29. ¿Con qué periodicidad realiza este proceso de análisis?</label>
                                            <select name="periodARA" id="periodARA" class="form-control">
                                                <option value="" disabled="" selected="">Selecciona una periodicidad</option>
                                                <option value="1">Anual</option>
                                                <option value="2">Semestral</option>
                                                <option value="3">Trimestral</option>
                                                <option value="4">Bimestral</option>
                                                <option value="5">Mensual</option>
                                                <option value="6">Semanal</option>
                                                <option value="7">Diaria</option>
                                                <option value="8">Otro</option>

                                            </select>
                                        </td>
                                        <td id="other_perA" style="display: none;">
                                            <label class="fieldlabels">29.1. Especifique otro tipo de Periodicidad: </label>
                                            <input type="text" id="perA_ot" name="perA_ot" class="form-control" placeholder="Especifique otro" value=" ">
                                        </td>
                                    </tr>

                                    <tr id="negative4" style="display: none;">
                                        
                                        <td><label class="fieldlabels">30. ¿Se documenta y/o publica el análisis de los resultados generados por el Registro Administrativo?</label>
                                            <select name="publiARA" id="publiARA" class="form-control">
                                                <option value=" " disabled="" selected="">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                        <td id="publiAnswerA" style="display: none;">
                                            <label id="port" class="fieldlabels"></label>
                                            <input type="text" id="answerPubliA" name="answerPubliA" class="form-control mt-4" placeholder="" value=" " maxlength="500">

                                        </td>
                                    </tr>

                                    <tr id="negative5" style="display: none;">
                                        
                                        <td>
                                            <label class="fieldlabels">31. Señale en orden de importancia (siendo 1 el más importante), los principales problemas que afectan la difusión del registro administrativo o las razones por las cuales no se genera:</label>
                                            <select name="impRA[]" id="impRA" class="form-control multi-select custom-select" style="outline-style: none; color:black" multiple title="Seleccione en orden de importancia" data-selected-text-format="count">
                                                <option value="1">Falta de capacitación del personal</option>
                                                <option value="2">Carencia de recurso humano</option>
                                                <option value="3">Insuficiencia y/o deficiencia en el recurso tecnológico</option>
                                                <option value="4">Deficiencia y/o carencia de canales de difusión</option>
                                                <option value="5">Falta de oportunidad en la difusión de los resultados</option>
                                                <option value="6">Falta de una política de difusión</option>
                                                <option value="7">Falta de organización operacional</option>
                                                <option value="8">Otro(s)</option>
                                            </select>
                                            <input type="hidden" id="auxImp" name="auxImp[]">
                                        </td>
                                        <td id="impOt" style="display: none;">
                                        
                                        <label class="fieldlabels">31.1. Especifique otro problema: </label>
                                            <input type="text" id="otImp" name="otImp" class="form-control mt-4" placeholder="" value=" " maxlength="500">

                                        </td>
                                    </tr>

                                    <tr id="negative6" style="display: none;">
                                        <td><label class="fieldlabels">32. ¿Conoce las necesidades de información de los usuarios de instituciones públicas y privadas?</label>
                                            <select name="needsRA" id="needsRA" class="form-control">
                                                <option value=" " disabled="" selected="">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr id="negative7" style="display: none;">
                                        
                                        <td><label class="fieldlabels">33. ¿Conoce las necesidades de información no satisfechas de los usuarios?</label>
                                            <select name="needIRA" id="needIRA" class="form-control">
                                                <option value=" " disabled="" selected="">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr id="negative8" style="display: none;">
                                        <td><label class="fieldlabels">34. ¿Estaría dispuesto a contribuir al fortalecimiento de las necesidades de información no satisfechas de los usuarios?</label>
                                            <select name="contrRA" id="contrRA" class="form-control">
                                                <option value=" " disabled="" selected="">Selecciona una opción</option>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </form>
                        <div class="card-footer" style="margin-bottom: 2.5em;">
                            <div class="float-right">
                                <a class="btn btn-secondary" style="width: 87px;" type="reset" href="registros.php">Cancelar</a>
                                <input id="sendData" class="btn btn-dark" style="width: 150px;" type="submit" value="Guardar Cambios" >
                            </div>
                        </div>

                    </div>
                    <!--/card-->
                </div>
            </div>
            <!--/row-->
        
        </div>
        <!--/container-->
</div>


<!--MODAL RESPONSE OK-->
<div class="modal fade" id="myModalOk" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #666666; color:white;">
          
          <h4 class="modal-title">Registro Administrativo</h4>
        </div>
        <div class="modal-body">
          Cambios guardados satisfactoriamente. <br> <br>
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
          Ocurrio un error, vuelve a intetarlo más tarde. <br> <br>
        </div>
      </div>
      
    </div>
  </div>


        <script>

var myChoices = [];
$('#impRA').on('changed.bs.select', function(e, clickedIndex, isSelected, previousValue) {
    var str;
    var selected = document.getElementById("impRA").options[clickedIndex].value;
    if (myChoices.indexOf(selected) == -1) {
        myChoices.push(selected);
        
        

    } else {
        myChoices.splice(myChoices.indexOf(selected), 1);

    }
    
    document.getElementById("auxImp").value = myChoices;

});
            $(document).ready(function() {
                $("#sendData").click(function() {
                    var dataReg = $("#frmRegAdmin").serialize();
                    $.ajax({
                        type: "POST",
                        url: "Functions/InsertRegister.php",
                        data: dataReg,
                        success: function(r) {
                            if (r == 1) {
                                
                               $('#myModalOk').modal("show");
                               setTimeout(function(){
                                location.href = 'registros.php';
                                  }, 790);
                                
                            } else {
                                $('#myModalError').modal("show");
                                setTimeout(function(){
                                location.href = 'registros.php';
                                  }, 790);

                            }


                        }
                    });
                });
            });
        </script>
        <script src="Assets/js/RegAdminIndex.js"></script>
    <?php include
        "Template/footer.php";
} else {
    echo "<script>location.href='index.php';</script>";
    session_destroy();
}

    ?>