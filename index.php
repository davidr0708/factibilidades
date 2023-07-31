<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="shortcut icon" href="img/logo-mywebsite-urian-viera.svg"/>
    <title>Factibilidades | CAD</title>
    <link rel="stylesheet" type="text/css" href="css/cargando.css">
    <link rel="stylesheet" type="text/css" href="css/maquinawrite.css">
    <!-- DataTable-->
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css" rel="stylesheet" />
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

      <!--Font Awesome-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

  <?php
include('config.php');

?>

<div class="container mt-3">
  <button type="button" class="btn btn-success" onclick="location='registrar.php'">Añadir Registro <i class="fa-solid fa-plus" style="color: #ffffff;"></i></button>
    <h4 class="text-center">Factibilidades CAD</h4>
    <hr>
</div>

  <div class="container my-5">
                  <div class="row">
                    <table id="example" class="table table-striped">
                        <thead>
                          <tr style="font-size: 10px;">
                            <th scope="col">ITEM</th>
                            <th scope="col">CODIGO CAD</th>
                            <th scope="col">DEPARTAMENTO</th>
                            <th scope="col">NOMBRE CAD</th>
                            <th scope="col">OPCIÓN</th>
                            <th scope="col">DIRECCIÓN</th>
                            <th scope="col">BARRIO</th>
                            <th scope="col">LATITUD</th>
                            <th scope="col">LONGITUD</th>
                            <th scope="col">FECHA DE ENVIO</th>
                            <th scope="col">ESTADO</th>
                            <th scope="col">CANAL PRINCIPAL</th>
                            <th scope="col">CANAL BACKUP</th>
                            <th scope="col">ACCIÓN</th>
                          </tr>
                        </thead>
                        <?php
                        $sql = "SELECT * from factibilidades";
                        $result = mysqli_query($conexion, $sql);
                        while ($dataCliente = mysqli_fetch_array($result)) {
                        ?>
                          <tr style="font-size: 10px;">
                            <td><?php echo $dataCliente['id']; ?></td>
                            <td><?php echo $dataCliente['codigo_cad']; ?></td>
                            <td><?php echo $dataCliente['departamento']; ?></td>
                            <td><?php echo $dataCliente['nombre_cad']; ?></td>
                            <td><?php echo $dataCliente['opcion']; ?></td>
                            <td><?php echo $dataCliente['direccion']; ?></td>
                            <td><?php echo $dataCliente['barrio']; ?></td>
                            <td><?php echo $dataCliente['latitud']; ?></td>
                            <td><?php echo $dataCliente['longitud']; ?></td>
                            <td><?php echo $dataCliente['fecha']; ?></td>
                            <td><?php echo $dataCliente['estado']; ?></td>
                            <td><?php echo $dataCliente['canal_principal']; ?></td>
                            <td><?php echo $dataCliente['canal_backup']; ?></td>
                            <td> 
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $dataCliente['id']; ?>">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn<?php echo $dataCliente['id']; ?>">
                              <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                            </button>
                            </td>
                          </tr>
                            <!--Ventana Modal para Actualizar--->
                            <?php  include('ModalEditar.php'); ?>

                            <!--Ventana Modal para la Alerta de Eliminar--->
                            <?php include('ModalEliminar.php'); ?>
                        <?php } ?>
                        <tfoot>
                            <tr style="font-size: 11px;">
                            <th>ITEM</th>
                            <th>CODIGO CAD</th>
                            <th>DEPARTAMENTO</th>
                            <th>NOMBRE CAD</th>
                            <th>OPCIÓN</th>
                            <th>DIRECCIÓN</th>
                            <th>BARRIO</th>
                            <th>LATITUD</th>
                            <th>LONGITUD</th>
                            <th>FECHA DE ENVIO</th>
                            <th>ESTADO</th>
                            <th>CANAL PRINCIPAL</th>
                            <th>CANAL BACKUP</th>
                            <th>ACCIÓN</th>
                      </tr>
                      </tfoot>
                    </table>
                    
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



    <!-- DataTable-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

    <!--Bootstrap-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>


</body>
</html>