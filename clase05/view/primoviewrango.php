<?php 
if(PHP_SESSION_ACTIVE != session_status()){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación primo en un rango</title>
    <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- NAVBAR (MENU DE NAVEGACION)---> 
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="primoview.php">Primo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="num_suerte.php">Numero suerte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="primoviewrango.php">Numeros primos en un rango</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-5 col-md-8 col-12">
                <div class="card border-primary">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Primo en un rango</h4>
                    </div>

                    <div class="card-body">
                      <?php if(isset($_SESSION["respuesta"])): ?>
                            <div class="alert alert-success">
                                <?php echo $_SESSION["respuesta"] ?>
                            </div>
                        <?php endif; unset($_SESSION["respuesta"]) ?> 
                        <form action="../logica.php?accion=primo_rango" method="post" id="form_primo_rango">
                            <input type="text" name="numerouno" class="form-control mb-2" placeholder="NUMERO 1..."
                            value="<?php echo $_SESSION["numerouno"] ?? '';unset($_SESSION["numerouno"]) ?>">

                            <span class="text-danger"><?php echo $_SESSION["error_input_uno"] ?? '';unset($_SESSION["error_input_uno"]) ?></span>
                            <input type="text" name="numerodos" class="form-control" placeholder="NUMERO 2..."
                            value="<?php echo $_SESSION["numerodos"] ?? '';unset($_SESSION["numerodos"]) ?>">
                            <span class="text-danger"><?php echo $_SESSION["error_input_dos"] ?? '';unset($_SESSION["error_input_dos"]) ?></span>
                        </form>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary" onclick="document.getElementById('form_primo_rango').submit()">Evaluar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>