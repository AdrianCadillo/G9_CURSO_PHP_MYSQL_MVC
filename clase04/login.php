<?php
if (PHP_SESSION_ACTIVE !== session_status()) {
    session_start();
}

if(isset($_SESSION["user"]) || isset($_COOKIE["user"])){
    header("location:dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/output.css">
</head>

<body class="p-4 bg-blue-500">
    <div class="border border-spacing-4 px-3 py-4 bg-white w-[320px] mx-auto rounded-lg">
        <h1 class="font-extrabold text-3xl mb-4 text-center">Login</h1>

        <form action="logica.php?accion=sign-in" method="post">
            <input type="text" class="border border-spacing-2 w-full p-2 rounded-md shadow-sm
            focus:outline-none focus:ring-2 focus:ring-blue-700 mb-2
            placeholder:text-purple-600 placeholder:font-semibold" name="email"
            value="" placeholder="email....">
            <input type="password" class="border border-spacing-2 w-full p-2 rounded-md shadow-sm
            focus:outline-none focus:ring-2 focus:ring-blue-700 mb-2 placeholder:text-purple-600 placeholder:font-semibold" name="password"
            value="" placeholder="password....">

            <label for="remember">Recordar mi sesion 
                <input type="checkbox" name="remember" id="remember">
            </label>
             
            <button name="calcular" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mx-auto block">Calcular</button>
           
        </form>
    </div>
</body>

</html>