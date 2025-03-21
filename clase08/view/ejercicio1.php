<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
     <div class="container mt-4">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>EJERCICIO 1</h2>
                    </div>

                    <div class="card-body">
                        <input type="text" class="form-control mb-2" placeholder="INGRESAR TEXTO...." id="texto">
                        <input type="text" class="form-control mb-2" placeholder="INGRESAR INICIO...." id="inicio">
                        <input type="text" class="form-control" placeholder="INGRESAR FINAL...." id="final">

                        <div class="alert alert-success" style="display: none;" id="alerta">

                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-success" id="enviar">Enviar</button>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Ejercicio 2</h1>
                    </div>
                    <form method="post" id="form_ejercicio2">
                    <div class="card-body">
                       <input type="text" class="form-control mb-2" placeholder="INGRESAR TEXTO...." name="texto_ejer2" id="texto_ejer2">
                       <div class="alert alert-success" style="display: none;" id="alerta_ejer2">
                    </div>

                    <div class="card-footer">
                    <button class="btn btn-success" id="enviar_ejer2">Enviar</button>
                    </div>
                    </form>
                </div>
            </div>
 
        </div>
     </div>
     <script src="../jquery.min.js"></script>

     <script>
        $(document).ready(function(){

            $('#enviar').click(function(){
                 $.ajax(
                    {
                        url:"../controller/EjercicioController.php?accion=ejercicio1",
                        method:"POST",
                        data:{
                           frase: $('#texto').val(),
                           inicio:$('#inicio').val(),
                           final:$('#final').val()
                        },
                        dataType:"json",
                        success:function(response){
                             $('#alerta').show(400);
                             $('#alerta').text(response.respuesta);
                        }
                    }
                 )
            });

            $('#enviar_ejer2').click(function(evento){
                evento.preventDefault();
               
                $.ajax(
                    {
                        url:"../controller/EjercicioController.php?accion=ejercicio2",
                        method:"POST",
                        data:$('#form_ejercicio2').serialize(),
                        dataType:"json",
                        success:function(response){
                             $('#alerta_ejer2').show(400);
                             $('#alerta_ejer2').text(response.respuesta);
                        }
                    }
                 )
            });
        });
     </script>
</body>
</html>