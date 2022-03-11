<?php 

session_start();
unset($_SESSION['validateUser']);
unset($_SESSION['id']);
unset($_GET['id']);
header("Location: ../index.php");

?>