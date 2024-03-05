<?php
  session_start();
  if(empty($_SESSION["ID_USU"])){
    header('Location: cerrar_sesion.php');
    die();
  }
  $nom_user = $_SESSION["NOMBRES_USU"]
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../controles/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../controles/css/estilo.css" />
</head>
<body>
    <div class="container card">
        <div class="row">    
            <nav class="navbar navbar-expand-lg " data-bs-theme="dark" style="background-color: #000099;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="panel.php">
                    <i class="fa fa-home"></i>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Equipo</a>
                            <ul class="dropdown-menu">
                              <li onclick="menu('equipo/nuevo.php')"><a class="dropdown-item" href="#">Nuevo</a></li>
                              <li onclick="menu('equipo/listadodeequipos.php')" ><a class="dropdown-item" href="#">Listado de Equipos</a></li>
                              <li onclick="menu('equipo/categorias.php')"><a class="dropdown-item" href="#">Categor&iacute;as</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mantenimientos</a>
                            <ul class="dropdown-menu">
                              <li onclick="menu('mantenimientos/planificador.php')"><a class="dropdown-item" href="#">Planificador</a></li>
                              <li onclick="menu('mantenimientos/correctivos.php')"><a class="dropdown-item" href="#">Correctivos</a></li>
                              <li onclick="menu('mantenimientos/instalaciones.php')"><a class="dropdown-item" href="#">Instalaciones</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Reportes</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">B&aacute;sico</a></li>
                              <li><a class="dropdown-item" href="#">General</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <button type="button" class="btn"><i class="fa fa-star"></i></button>
                        <button type="button" class="btn"><i class="fa fa-user-secret"></i></button>
                        <button class="btn"> <?php echo $nom_user;?></button>
                        <button class="btn btn-danger" type="button" onclick="salir()">Salir</button>                        
                    </ul>                    
                  </div>
                </div>
              </nav>
            </div>
        <div class="row">
            <div class="col">
              <div id="informacion_principal">
                <?php include("general.php"); ?>
              </div>
            </div>
        </div>
    </div>
    <script src="../controles/js/bootstrap.bundle.min.js"></script>
    <script src="../controles/js/jquery-3.7.1.js"></script>
    <script src="../controles/js/jquery-ui.js"></script>
    <script src="../controles/js/fullcalendar.js"></script>
    <script src="../controles/js/script.js"></script>
    
  </body>
</html>