<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
    <link rel="stylesheet" href="../clase05/assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid">
    <div class="row justify-content-center mt-4">
        <div class="col-xl-5 col-lg-5 col-md-8 col-12">
            <div class="card border-primary">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Formulario Persona</h4>
                </div>

                <div class="card-body">
                 <?php if(isset($_SESSION["errors"])): ?>
                        <div class="alert alert-danger">
                            <ul>
                            <?php foreach($_SESSION["errors"] as $error):?>
                                <li><?=$error?></li>
                            <?php endforeach; ?>      
                            </ul>
                        </div>
                 <?php endif; unset($_SESSION["errors"]) ?>   
                <form action="logica.php?accion=datos_persona" method="post" id="form_persona">
                  <input type="text" name="nombres" class="form-control mb-2" placeholder="NOMBRES...">
                  <input type="text" name="apellidos" class="form-control mb-2" placeholder="APELLIDOS....">
                  <input type="text" name="email" class="form-control mb-2" placeholder="EMAIL....">
                  <input type="text" name="direccion" class="form-control mb-2" placeholder="DIRECCION....">
                </form>
                </div>

                <div class="card-footer">
                <button class="btn btn-primary" form="form_persona">Capturar datos <i class="fas fa-save"></i></button>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>