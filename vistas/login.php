<?php
  session_start();
  if(!empty($_SESSION["ID_USU"])){
    header('Location: panel.php');
    die();
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: SistMeq ::.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../controles/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../controles/css/estilo.css" />
</head>
<body class="fondo">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h2>.: SISTMEQ :.</h2>
                        <h4>Sistema de Gesti&oacute;n e Historial de Mantenimiento de Equipos</h4>
                        <br>
                        <img width="35%" src="../controles/imagenes/imag_login.png" alt="Imagen de Login">
                    </div>
                    <br>
                    <form id="flogin" name="flogin" action="" method="GET">
                    <div class="d-grid gap-3 col-4 mx-auto"> 
                        <div class="mb-3">
                            <label for="user" class="form-label">Usuario <i class="fa fa-user"></i></label>
                            <input type="text" class="form-control" id="user" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label"> Contrase&ntilde;a <i class="fa fa-lock"></i></label>
                            <input type="password" class="form-control" id="pass" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Olvide mi contrase&ntilde;a</label>
                        </div>
                        <div class="d-grid gap-3 col-10 mx-auto">
                            <button type="submit" class="btn btn-danger btn-lg">Iniciar Sesi&oacute;n</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../controles/js/bootstrap.bundle.min.js"></script>
    <script src="../controles/js/jquery-3.7.1.js"></script>
    <script src="../controles/js/jquery-ui.js"></script>    
    <script src="../controles/js/script.js"></script>
    <script src="../controles/js/md5.js"></script>
</body>
</html>