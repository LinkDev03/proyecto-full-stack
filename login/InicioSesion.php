<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="img/MasterMusicStore-_1_.ico" type="image/x-icon">
    <title>Login</title>
</head>
<body>
<header>
    <div class="logo"><a href=""><img src="img/MasterMusicStore.png" alt="logo"></a></div>
</header>   

<div class="content">

     <?php
  if (isset($_GET['error'])) {
  ?>
  <p class="error">
    <?php 
    echo $_GET['error']
    ?>
  </p>
  <?php
  }
  ?>
    <form method="POST" action="iniciarSesion.php" >
    <div class="bienvenido"><h2>Hola de Nuevo!</h2></div>
    <input type="email" name="Usuario" placeholder="Correo o Usuario"/>
     <input type="password" name="Contraseña" placeholder="Contraseña"/>
    <button type="submit">Iniciar Sesion</button>
    <P>No tienes una cuenta? crea una aquí</P>
    <button id="cc"><a href="registrarse.php">Crear Cuenta</a></button>
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