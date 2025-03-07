<?php
if (PHP_SESSION_ACTIVE !== session_status()) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
    <link rel="stylesheet" href="../css/output.css">
</head>

<body class="p-4 bg-blue-500">
    <div class="border border-spacing-4 px-3 py-4 bg-white w-[320px] mx-auto rounded-lg">
        <h1 class="font-extrabold text-3xl mb-4 text-center">Aplicación Salario</h1>

        <?php if (isset($_SESSION["response"])): ?>
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">Mensaje del sistema!!</span> <?php echo $_SESSION["response"]; ?>.
            </div>
        <?php endif;
        unset($_SESSION["response"]) ?>

        <form action="logica.php?accion=calcular-salario" method="post">
            <input type="text" class="border border-spacing-2 w-full p-2 rounded-md shadow-sm
            focus:outline-none focus:ring-2 focus:ring-blue-700 mb-2" name="nombre"
            value="<?php echo $_SESSION["nombre"] ?? ''; unset($_SESSION["nombre"]) ?>">
            <?php if (isset($_SESSION["error_nombre"])): ?>
              <p class="text-red-600"><?php echo $_SESSION["error_nombre"] ?></p>
            <?php endif;
            unset($_SESSION["error_nombre"]) ?>
            <select id="countries" name="cargo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
            mb-2">
                <option selected value="null">--- Seleccione ---- </option>
                <option value="Ing.de sistemas">Ing.de sistemas</option>
                <option value="Contador">Contador</option>
                <option value="Programador">Programador</option>
                <option value="Administrador">Administrador</option>
            </select>
            <?php if (isset($_SESSION["error_cargo"])): ?>
              <p class="text-red-600"><?php echo $_SESSION["error_cargo"] ?></p>
            <?php endif;
            unset($_SESSION["error_cargo"]) ?>
            <input type="text" name="salario" class="border border-spacing-2 w-full p-2 rounded-md shadow-sm
            focus:outline-none focus:ring-2 focus:ring-blue-700 mb-2" value="<?php echo $_SESSION["salario"] ?? ''; unset($_SESSION["salario"]) ?>">
            <?php if (isset($_SESSION["error_salario"])): ?>
              <p class="text-red-600"><?php echo $_SESSION["error_salario"] ?></p>
            <?php endif;
            unset($_SESSION["error_salario"]) ?>
            
            <button name="calcular" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mx-auto block">Calcular</button>
           
        </form>
    </div>
</body>

</html>