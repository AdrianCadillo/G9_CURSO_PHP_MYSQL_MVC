<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables de session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="row justify-content-center mt-3">
        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Datos de una persona</h2>
                </div>

                <div class="card-body">
                    <div class="alert alert-success">
                       <b>NOMBRE DE LA PERSONA : <?php echo  $_SESSION["nombre_persona"] ?? ''; unset($_SESSION["nombre_persona"])  ?></b>
                       <br>
                       <b>EDAD DE LA PERSONA : <?php echo $_SESSION["edad_persona"]?? '';unset($_SESSION["edad_persona"])  ?></b>
                    </div>
                    <form action="variables_de_session_logica.php" method="post" id="form_persona">
                        <div class="form-group">
                            <label for="nombres">Nombre de la persona</label>
                            <input type="text" id="nombres" name="nombres" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="edad">Edad de la persona</label>
                            <input type="text" id="edad" name="edad" class="form-control">
                        </div>
                    </form>
                </div>

                <div class="card-footer">
                    <button class="btn btn-primary" onclick="document.getElementById('form_persona').submit()">Enviar formulario</button>
                    <a href="destruirsesion.php">destruir variables de session</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>