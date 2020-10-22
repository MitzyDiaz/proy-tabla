<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" href="images/ico/favicon.ico" sizes="32x32" />
    <!--Fonts and icons-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="css/loaderStyle.css" rel="stylesheet">
    <!-- Style Datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">  
    <link href="assets/css/black-dashboard.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/datepicker.css">

    <title>Proyecto</title>
    <style>
    label.error {
        margin-bottom: 15px !important;
        color: bisque !important;
    }
    table.dataTable tbody tr {
    background-color: transparent;
    }
    .dataTables_length{
        display: none;
    }
    .dataTables_wrapper .dataTables_filter {
    width: 100%;
    }
    .dataTables_wrapper .dataTables_filter label {
    float: left !important;
    text-align: left !important;
    width: 100%;
    }
    .dataTables_wrapper .dataTables_filter input {
    height: 2rem;
    width: 100%;
    font-size: 10px;
    }
    .dataTables_wrapper .dataTables_info{
    color: #e14eca;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    color: white !important;
    border: 1px solid #e2d3d3;
    background: transparent;
    }
    .dataTables_scroll .dataTables_scrollBody::-webkit-scrollbar {
    width: 10px;
    }
    .dataTables_scroll .dataTables_scrollBody::-webkit-scrollbar-thumb {
    background: #e14eca; 
    border-radius: 10px;
    transition: 0.3s;
    }
    .dataTables_scroll .dataTables_scrollBody::-webkit-scrollbar-thumb:hover {
    opacity: 1
    }
    </style>
</head>
<body>

<div class="wrapper">
<div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <span class="simple-text logo-mini">
                        Bienvenido: <b><?php echo ($nombreUsuario); ?> </b>
                    </span>
                </div>
                <ul class="nav">
                    <li>
                        <a href="dashboard.php">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="usuarios.php">
                            <i class="tim-icons icon-single-02"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="tim-icons icon-atom"></i>
                            <p>Alta Proyectos</p>
                        </a>
                    </li>
                    <li  class="active ">
                        <a href="buscador.php">
                            <i class="tim-icons icon-puzzle-10"></i>
                            <p>Ver Proyectos</p>
                        </a>
                    </li>
                    <li>
                        <a href="./notifications.html">
                            <i class="tim-icons icon-bell-55"></i>
                            <p>Notificaciones</p>
                        </a>
                    </li>
                    <li>
                        <a href="./map.html">
                            <i class="tim-icons icon-pin"></i>
                            <p>OPC2</p>
                        </a>
                    </li>
                    <li>
                        <a href="./typography.html">
                            <i class="tim-icons icon-align-center"></i>
                            <p>OPC3</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
        <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <span class="navbar-brand" href="javascript:void(0)">Proyecto</span>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">

                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <img src="assets/img/anime3.png" alt="Profile Photo">
                                    </div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link"><a href="logout.php" class="nav-item dropdown-item">Log
                                            out</a></li>
                                </ul>
                            </li>
                            <li class="separator d-lg-none"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!--CONTENEDOR -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header">
                                        <h3 class="title" style="margin-bottom: 10px !important;">Listado de Proyectos
                                        </h3>
                                        <hr style="border-top: 1px solid #e14eca;">
                                </div>
                                <!--List Table-->
                                <div class='container'>
                                    <table id="tab_proyectos" width="100%" class='table'>
                                        <thead>
                                            <tr>
                                                <th scope='col' class='titulo'>ID</th>
                                                <th scope='col' class='titulo'>NOMBRE</th>
                                                <th scope='col' class='titulo'>EMPRESA</th>
                                                <th scope='col' class='titulo'>RESPONSABLE</th>
                                                <th scope='col' class='titulo'>DESCRIPCIÓN</th>
                                                <th scope='col' class='titulo'>FECHA INICIO</th>
                                                <th scope='col' class='titulo'>PRESUPUESTO</th>
                                                <th scope='col' class='titulo'>FECHA ALTA</th>
                                                <th scope='col' class='titulo'>USUARIO ALTA</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        include_once "conexion.php";
                                        $sentencia="SELECT * FROM PROYECTOS";
                                                $res=$cnx->query($sentencia);
                                                while($registro=$res->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php echo $registro['ID_USUARIO']?></td>
                                            <td><?php echo $registro['NOMBRE_PROYECTO']?></td>
                                            <td><?php echo $registro['EMPRESA_CLIENTE']?></td>
                                            <td><?php echo $registro['RESPONSABLE_PROYECTO']?></td>
                                            <td><?php echo $registro['DESCRIPCION_PROYECTO']?></td>
                                            <td><?php echo $registro['FECHA_INICIO']?></td>
                                            <td><?php echo $registro['PRESUPUESTO_PROYECTO']?></td>
                                            <td><?php echo $registro['FECHA_ALTA']?></td>
                                            <td><?php echo $registro['USUARIO_ALTA']?></td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </table>
                                </div>
                                <!-- End List Table-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script src="js/jquery-3.5.1.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/buscar.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
        $(document).ready(function() {
            $('#tab_proyectos').DataTable({
                "lengthMenu": [[10], [10]],
                "pagingType": "numbers",
                "ordering": false,
                scrollY: '44vh',
                scrollCollapse: true,
                autoFill: true,
                responsive: true,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ proyectos por pagina",
                    "zeroRecords": "No se encontro",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros",
                    "infoFiltered": "(Se filtraron de _MAX_ registros en total)"
                }
            });
            $("input.form-control").attr("placeholder", "Realiza la busqueda del proyecto");
        });

        
    </script> 
</body>
</html>