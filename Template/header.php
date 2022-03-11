<?php 

$email = $_SESSION['validateUser'];
?>
<!doctype html>
<html lang="en">

<head>
    <title>Bienvenido al sistema</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="Assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="Assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">


</head>

<style>
  



nav {
    background-color: black;

}

.dropdown-menu {
    box-shadow:
       inset 0 -3em 3em rgba(0,0,0,0.1),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
  
}


body {
  
  @font-face {
      font-family: Adelle Sans;
      src: url("Assets/fonts/ADELLE SANS/AdelleSans-Regular.otf");
      src: url("Assets/fonts/ADELLE SANS/AdelleSans-Bold.otf");
  }
}


.navbar .dropdown-menu a:hover {
    color: black !important;
    border: none;
    
    
}

.dropdown-item:active {
    background-color: white;
    color: black;
}


.darken-grey-text {
    color: white;
}


.navbar {
    background-color: #e6e6e6 !important;    
}

.img-thumbnail {
    border: none;
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



.nav-link {
color: black !important;
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



            <!--/.Navbar -->