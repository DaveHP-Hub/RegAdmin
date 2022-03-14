<?php
session_start();
include_once "../DBConnection/connection.php";
$emailPr = trim($_POST['email']);


if(empty($_POST['email']))
{
    echo 0;
}
else
{
    $email = $_POST['email']; 
    if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)) {
    
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
        echo 1; //"<script>location.href = 'registros.php';</script>";
    }
    else {
        echo 2; //"<script>location.href = 'index2.php';</script>";
        $_SESSION['validateUser'] = $email;
    
    }

} else 
            echo -1;
       


}

?>