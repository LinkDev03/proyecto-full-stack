<?php

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
session_start();

if (!isset($_SESSION['Usuario']) || empty($_SESSION['Usuario'])) {
    header("Location: ../index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/MasterMusicStore-_1_.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Mi Cuenta - Infinix Music Store</title>
</head>
<body>
    <a href="../index.php"><img src="../resourses/img/logos/MasterMusicStore.png" alt="logo"></a>
    <header>
    <H1>Bienvenido De Vuelta!</H1>
    </header>
    <a href="CerrarSesion.php">Cerrar Sesion</a>


    <script type="" src="js/script.js"></script>
</body>
</html>