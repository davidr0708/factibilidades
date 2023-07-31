<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="shortcut icon" href="img/logo-mywebsite-urian-viera.svg"/>
  <title>Registrar | CAD</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/cargando.css">
  <link rel="stylesheet" type="text/css" href="css/maquinawrite.css">
  <style> 
        table tr th{
            background:rgba(0, 0, 0, .6);
            color: azure;
        }
        tbody tr{
          font-size: 12px !important;

        }
        h3{
            color:crimson; 
            margin-top: 100px;
        }
        a:hover{
            cursor: pointer;
            color: #333 !important;
        }
      </style>
</head>
<body>
  
<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
        <div class="container">
            <img src="img/logo.png" style="width: 15%;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar3">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                <ul class="navbar-nav w-100 justify-content-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="asignaciones.php">Dashboard</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ms-auto w-100 justify-content-end">

                    <li class="nav-item">
                        <a class="nav-link" href="modelo/logout.php">Salir</a>
                    </li>
                </ul>
                <i class="fa-solid fa-right-from-bracket" style="color: #1ABC9C;"></i>
            </div>
        </div>
  </nav>



<div class="container mt-3 p-5">

<?php
include('config.php');

?>


  <h4 class="text-center">
    Registrar
  </h4>
  <hr>


<div class="row">
  <div class="body">
      <div class="row clearfix">
        <!--- Formulario para registrar Cliente --->
        <?php include('registrarCliente.php');  ?>
        </div>  
      </div>
  </div>
</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });

//Ocultar mensaje
    setTimeout(function () {
        $("#contenMsjs").fadeOut(1000);
    }, 3000);



    $('.btnBorrar').click(function(e){
        e.preventDefault();
        var id = $(this).attr("id");

        var dataString = 'id='+ id;
        url = "recib_Delete.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data)
                {
                  window.location.href="index.php";
                  $('#respuesta').html(data);
                }
            });
    return false;

    });


});
</script>

</body>
</html>