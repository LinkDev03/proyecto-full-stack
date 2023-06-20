<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo_registro.css">
    <link rel="shortcut icon" href="img/MasterMusicStore-_1_.ico" type="image/x-icon">
    <title>Registrarse</title>
</head>
<body>
    <header>
        <div class="logo"><a href="../index.php"><img src="img/MasterMusicStore.png" alt="logo"></a></div>
    </header>

  <div class="registro">

  <?php if (isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php }?>
            <br>
            <?php if (isset($_GET['success'])) { ?>
                <p class="success"> <?php echo $_GET['success']; ?></p>
            <?php }?>
            <br>
    <form action="registro.php" method="POST">
      <div class="registrate"><h2>Registrate</h2></div>
      <input type="text" name="nombre" placeholder="Nombre"/>
      <input type="text" name="apellido" placeholder="Apellido"/>
      <input type="email" name="usuario"  id="element" placeholder="Correo Electronico"/>
      <input type="password" name="contraseña" id="element" placeholder="Introduce una Contraseña"/>
      <input type="password" name="Rcontraseña"  id="element" placeholder="Introduce Nuevamente la Contraseña"/>
      <button type="submit">Crear Cuenta</button>
      <P>ya tienes una cuenta? accede aquí</P>
    <button type="button" id="rr"><a href="InicioSesion.php">Acceder</a></button>
    </form>
  </div>


    <footer>
        <button id="mas-informacion">Más información</button>
        <div class="footer-contain">   
            <div class="footer-titulo">
              <h3>Información de contacto</h3>
              <ul>
                <li>Dirección: 123 Calle Principal</li>
                <li>Teléfono: 555-123456</li>
                <li>Email:<a href="">info@example.com</a></li>
                <li>Horario: Lunes a Viernes, 9am-5pm</li>
              </ul>
            </div>
            
            <div class="footer-titulo">
              <h3>Soporte</h3>
              <ul>
                <li><a href="">Preguntas frecuentes</a></li>
                <li><a href="">Programa de devoluciones</a></li>
                <li><a href="">Reportar un problema</a></li>
                <li><a href="">Contactar al soporte</a></li>
              </ul>
            </div>
            
            <div class="footer-titulo">
              <h3>Sobre nosotros</h3>
              <ul>
                <li><a href="">Nuestra historia</a></li>
                <li><a href="">Misión y visión</a></li>
                <li><a href="">Equipo de trabajo</a></li>
                <li><a href="">Patrocinios y Socios</a></li>
              </ul>
            </div>
            
            <div class="footer-titulo">
                <h3>Redes sociales</h3>
            <ul>
              <li><a href="https://www.facebook.com" target="_blank">vista nuestra fan page</a></li>
              <li><a href="https://www.youtube.com" target="_blank"> visita nuestro canal de Youtube</a></li>
              <li><a href="https://www.instagram.com" target="_blank">dale un vistazo a nuestro perfil de Instagram</a></li>
              <li><a href="https://web.whatsapp.com" target="_blank">contactanos por whatsapp</a></li>
            </ul>
            </div> 
            
        </div>
      <p id="final">Infinix Music Store &trade; 2023. Todos los derechos reservados &copy;. </p>
      </footer>
    
        <script type="text/Javascript" src="js/script.js"></script>

</body>
</html>