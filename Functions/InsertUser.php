<?php 
include_once "../DBConnection/connection.php";
session_start();

if(isset($_POST['answer01']) && !empty($_POST['adscripcion']) && !empty($_POST['email']) && !empty($_POST['telefono']) && isset($_POST['appointment'])  && isset($_POST['rAdmin'])) {
    if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST['email'])) {
       
            $email = $_POST['email'];
            $query = "Select email from usuario where email = '$email'";
            $resultado = $conn->query($query);
            //Guardamos el registro en la variable $fila
            $fila = $resultado->fetch_assoc();
            if($fila) {
                echo 3;
            }
            else {
                $sec= $_POST['answer01'];
                


    $ads = $_POST['adscripcion'];
    $appo = $_POST['appointment'];
   
    $tel = $_POST['telefono'];
    $ext = $_POST['ext'];
    $rAdmin = $_POST['rAdmin'];

    if(isset($_POST['municipality']))
    $muni = $_POST['municipality'];
else
    $muni = " ";

if(isset($_POST['institution']))
    $inst = $_POST['institution'];
else
    $inst = " ";
    

if($appo == "7") {
    $appo_ = $_POST['appointment_other'];
if($appo_ == "" || $appo_ == null || $appo_ == " ") {
    echo 4;
} else {
    $SentenceMySQL = "INSERT INTO Usuario(sector, areaAdscripcion, cargo, otroCargo, telefono, extension, email, respAdmin) 
    VALUES('$sec','$ads','$appo', '$appo_', '$tel','$ext', '$email', '$rAdmin')";
    echo mysqli_query($conn, $SentenceMySQL);
}  
} else {
    $appo_ = " ";
    $SentenceMySQL = "INSERT INTO Usuario(sector, areaAdscripcion, cargo, otroCargo, telefono, extension, email, respAdmin) 
    VALUES('$sec','$ads','$appo', '$appo_', '$tel','$ext', '$email', '$rAdmin')";
    echo mysqli_query($conn, $SentenceMySQL);
}

  

    $query = "Select idUsuario, email, respAdmin from usuario where email = '$email'";
    $resultado = $conn->query($query);
    //Guardamos el registro en la variable $fila
    $fila = $resultado->fetch_assoc();
    if($fila) {
        //El resultado de la consulta estarán entonces:
        $resulId = $fila['idUsuario'];
        $resulEmail = $fila['email'];
        $resulResp = $fila['respAdmin'];
        $_SESSION['validateUser'] = $resulEmail;
        $_SESSION['id'] = $resulId;
        $_SESSION['resp'] = $resulResp;

if($sec == "Municipal")  {
    
    $SentenceMySQLM = "INSERT INTO municipio(nombreMunicipio, FKUsuario) VALUES('$muni','$resulId')";
    mysqli_query($conn, $SentenceMySQLM);
}
else if($sec == "Estatal") {
    
    $SentenceMySQLD = "INSERT INTO dependencia(nombreDependencia, FKUsuario) VALUES('$inst','$resulId')";
    mysqli_query($conn, $SentenceMySQLD);
}
    

}
            
}



    

} else {
    echo 2;
}
}
 
else {
    echo 0;
}



?>