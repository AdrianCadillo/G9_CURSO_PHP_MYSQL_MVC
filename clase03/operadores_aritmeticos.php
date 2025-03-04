<?php 
$Numero_1 = $_POST["numero1"] ?? '';
$Numero_2 = $_POST["numero2"] ?? '';

if(isset($_POST['enviar'])){
    $Suma = $Numero_1 + $Numero_2;
    $Resta = $Numero_1 - $Numero_2;
    $Multiplicacion = $Numero_1 * $Numero_2;
    $Potencia = pow($Numero_1,$Numero_2);
    $RaizCuadradaPrimerNumero = sqrt($Numero_1);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Operadores Aritmeticos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
     <div class="container">
        <div class="row justify-content-center mt-2">
           <div class="col-xl-4 col-lg-4 col-md-6 col-12">
              <div class="card">
                 <div class="card-header">
                    <h3>Operadores aritmeticos</h3>
                 </div>

                 <div class="card-body">
                     <form action="" method="post">
                        <input type="text" name="numero1" class="form-control mb-2" 
                        placeholder="INGRESE NUMERO 1">
                        <input type="text" name="numero2" class="form-control mb-2" 
                        placeholder="INGRESE NUMERO 2">
                        <button class="btn btn-primary" name="enviar">Calcular</button>
                     </form>

                    <div class="row">
                        <div class="col-auto">
                             SUMA
                            <input type="text" class="form-control" value="<?php echo isset($Suma) ? $Suma : '' ?>" readonly>
                        </div>
                        <div class="col-auto">
                             RESTA
                            <input type="text" class="form-control" value="<?php echo $Resta ?? '' ?>" readonly>
                        </div>
                        <div class="col-auto">
                             MULTIPLICACION
                            <input type="text" class="form-control" value="<?php echo $Multiplicacion ?? '' ?>" readonly>
                        </div>

                        <div class="col-auto">
                             POTENCIA
                            <input type="text" class="form-control" value="<?php echo $Potencia ?? '' ?>" readonly>
                        </div>

                        <div class="col-auto">
                             RAIZ CUADRADA DEL PRIMER NUMERO
                            <input type="text" class="form-control" value="<?php echo $RaizCuadradaPrimerNumero ?? '' ?>" readonly>
                        </div>
                    </div>
                 </div>
 
              </div>
           </div> 
        </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>