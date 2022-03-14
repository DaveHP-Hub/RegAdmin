
<?php
include_once "../DBConnection/connection.php";
    
    date_default_timezone_set('America/Mexico_City');
    $resulId = $_POST['userId'];
    $idRegister = $_POST['idReg'];

    if(isset($_POST['answer16'])) 
      $Answer16 = $_POST['answer16'];
    else 
      $Answer16 = "-1";
    
    
    $nameRA= $_POST['nameRA'];
    $objRA= $_POST['objetiveRA'];

    if(isset($_POST['basisJA']))
    $bJA = $_POST['basisJA'];
    else
    $bJA = "-1";

    $bAnswer= $_POST['bAnswer'];

    if(isset($_POST['typeRA']))
    $typeRA = $_POST['typeRA'];
    else
    $typeRA = " ";

    if(isset($_POST['geoRA']))
    $geoRA = $_POST['geoRA'];
    else
    $geoRA = "-1";

    if(isset($_POST['entryRA']))
    $entry = $_POST['entryRA'];
    else
     $entry = "-1";

    $entry_other = $_POST['entry_other'];
    $varRA = $_POST['varRA'];

    if(isset($_POST['unitRA']))
    $unitRA = $_POST['unitRA'];
    else
    $unitRA = "-1";
    $unit_other = $_POST['unit_other'];

    if(isset($_POST['regRA']))
    $regRA =  $_POST['regRA'];
    else
    $regRA = "-1";
    
    $other_16 = $_POST['16_other'];

    if(isset($_POST['levelRA'])) {
      $levelRA = $_POST['levelRA'];
      $array_levelRA = implode("|", $levelRA);
    } 
    else 
      $array_levelRA  = "-1";

    $lev16 = $_POST['16_lev'];

    if(isset($_POST['yearRA']))
    $yearRA = $_POST['yearRA'];
    else
    $yearRA = "-1";

    if(isset($_POST['periodRA']))
    $periodRA = $_POST['periodRA'];
    else
    $periodRA = "-1";

    $per_ot = $_POST['per_ot'];

    if(!empty($_POST['tempoRA']))
    $tempoRA = date('Y-m-d H:i:s', strtotime($_POST['tempoRA']));
    else
    $tempoRA = "0000-00-00";

    if(isset($_POST['refRA']))
    $refRA = $_POST['refRA'];
    else
    $refRA = "-1";

    $refTemp= $_POST['refTemp'];

    if(isset($_POST['infoRA']))
    $infoRA = $_POST['infoRA'];
    else
    $infoRA = "-1";

    $answerInfo = $_POST['answerInfo'];

    if(isset($_POST['medRA']))
    $medRA = $_POST['medRA'];
    else
    $medRA = " ";

    $answerMed = $_POST['answerMed'];

    if(isset($_POST['metRA']))
    $metRA = $_POST['metRA'];
    else
    $metRA = "-1";

    $answerMet = $_POST['answerMet'];

    if(isset($_POST['publiRA']))
    $publiRA = $_POST['publiRA'];
    else
    $publiRA = "-1";

    $answerPubli = $_POST['answerPubli'];

    if(isset($_POST['inRA']))
    $inRA = $_POST['inRA'];
    else
    $inRA = "-1";

    $answerIn = $_POST['answerIn'];
    $answerId = $_POST['answerId'];

    if(isset($_POST['instiRA']))
    $instiRA = $_POST['instiRA'];
    else
    $instiRA = "-1";

    $answerinsti = $_POST['answerinsti'];

    if(isset($_POST['softRA']))
    $softRA = $_POST['softRA'];
    else
    $softRA = "-1";

    $answersoft = $_POST['answersoft'];

    if(isset($_POST['proRA']))
    $proRA = $_POST['proRA'];
    else
    $proRA = "-1";

    if(isset($_POST['formatRA']))
    $formatRA = $_POST['formatRA'];
    else
    $formatRA = "-1";

    $format_ot = $_POST['format_ot'];

    if(isset($_POST['analyRA']))
    $analyRA = $_POST['analyRA'];
    else 
    $analyRA = "-1";

    if(isset($_POST['analyType']))
    $analyType = $_POST['analyType'];
    else
    $analyType = " ";

    $obtAnaly = $_POST['obtAnaly'];

    if(isset($_POST['periodARA']))
    $periodARA = $_POST['periodARA'];
    else
    $periodARA = "-1";
    $perA_ot = $_POST['perA_ot'];

    if(isset($_POST['publiARA']))
    $publiARA = $_POST['publiARA'];
    else 
    $publiARA = "-1";

    $answerPubliA = $_POST['answerPubliA'];

    if(isset($_POST['impRA'])) {
      $impRA = $_POST['auxImp_'];
      $array_impRA = implode(",",$impRA);
    }
    else
    $array_impRA = "-1";
    
    if(isset($_POST['needsRA']))
    $needsRA = $_POST['needsRA'];
    else
    $needsRA = "-1";

    if(isset($_POST['needIRA']))
    $needIRA = $_POST['needIRA'];
    else
    $needIRA = "-1";

    if(isset($_POST['contrRA']))
    $contrRA = $_POST['contrRA'];
    else
    $contrRA = "-1";
       
     
    $otImp = $_POST['otImp'];
    $dateUpdate = date('Y-m-d H:i:s');




    $sql = "UPDATE registroadministrativo SET nombreReg = '$nameRA', objetivoReg = '$objRA', regJuridico = '$bJA', respJuri = '$bAnswer', tipoInfo = '$typeRA', geoReg = '$geoRA', temaReg = '$entry', otroTema = '$entry_other', variablesReg = '$varRA', unidadMedida = '$unitRA', otroUnidad = '$unit_other', datosPer = '$regRA', tipoDatosP = '$Answer16', otroDPer = '$other_16', nivelRegistro = '$array_levelRA', otroNivel = '$lev16', anioEmision = '$yearRA', periodicidad = '$periodRA', otroPerio = '$per_ot', temporalidad = '$tempoRA', refTempo = '$refRA', otroRefT = '$refTemp', formatoReg = '$infoRA', otroFormato = '$answerInfo', tipoMedio = '$medRA', especiMedio = '$answerMed', metodologiaRec = '$metRA', metodoloiaEsp = '$answerMet', publicI = '$publiRA', publicOpc = '$answerPubli', fuenteSirve = '$inRA', insumoFuente = '$answerIn', docInsumo = '$answerId', infoReg = '$instiRA', infoApro = '$answerinsti', utilSoft = '$softRA', softwareI = '$answersoft', InfoProce = '$proRA', formatoInfo = '$formatRA', otroFInfo = '$format_ot', analisisReg = '$analyRA', tipoAna = '$analyType', objetivoAna = '$obtAnaly', periodicidadAna = '$periodARA', otraPerioA = '$perA_ot', docAnaalisis = '$publiARA', respDocAna = '$answerPubliA', difusionAna = '$array_impRA', otroDifusion = '$otImp', necesidadI = '$needsRA', necesidadNS = '$needIRA', necesidadS = '$contrRA', fechaUpdate = '$dateUpdate' WHERE idRegAdmin= $idRegister";
    if ($conn->query($sql) === true) {
        echo true;
    } else {
        echo "ERROR:  $sql. "
            . $conn->error;
    }
    $conn->close();

?>

