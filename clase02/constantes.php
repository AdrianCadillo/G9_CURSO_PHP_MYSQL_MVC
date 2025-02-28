<?php

/**
 * Creamos nuestras contantes
 */
 define("URL_BASE","http://curso_php_mysql.test/");

 const APP_TITLE = "CURSO";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h1>LA URL BASE ES : <?php echo URL_BASE ?></h1>
    <br>
    <h1>EL TITULO DE LA APLICACION ES : <?php echo constant("APP_TITLE") ?></h1>
 </body>
 </html>