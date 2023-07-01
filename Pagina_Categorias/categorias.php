<?php


?>


<!DOCTYPE html>
<html lang="en-es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="../resourses/img/icons/MasterMusicStore-_1_.ico"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;600;700;800&family=Open+Sans:wght@300;700&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/6adb63d45f.js"
      crossorigin="anonymous"
    ></script>
    <title>Categorias - Infinix Music Store</title>
  </head>
  <body>
    <!--Inicio Cabecera de Página-->
    <header>
      <a href="../index.php"><div class="logo"></div></a> 
      </div>
      <div class="search">
        <form  action=" " metod= "get">
        <input id="Search-bar" type="text" name="Barra de busqueda"  placeholder=" Buscar en la tienda...">
        <button id="btn" type="submit"> 
          <i class="fa-solid fa-magnifying-glass fa-2xl"></i>
        </button>
        </form> 
        </div>
      <button class="User_Button">
        <a href="../login/InicioSesion.php">Acceder o Registrarse</a>
        <i class="fa-regular fa-circle-user fa-2xl"></i>
      </button>
      <nav role="navigation">
        <div id="menuToggle">
          <input type="checkbox" />

          <span></span>
          <span></span>
          <span></span>

          <ul id="menu">
            <a href="../index.php"><li>Inicio</li></a>
            <a href="../Pagina_Categorias/categorias.php"><li>Categorías</li></a>
            <a href="#"><li>Guitarras</li></a>
            <a href="#"><li>Bajos</li></a>
            <a href="#"><li>Teclados y Sintetizadores</li></a>
            <a href="#"><li>Baterías y percusión</li></a>
            <a href="#"><li>Grabación y Estudio</li></a>
            <a href="#"><li>Accesorios</li></a>
            <a href="#"><li>Software y Plug-ins</li></a>
            <a href="#"><li>Sonido e iluminación</li></a>
            <a href="../pagina_3/pagina_3.html" target="_blank"><li>visita nuestro blog</li></a>
          </ul>
        </div>
      </nav>
      <nav class="Inert_Buttons">
          <ul>
            <li><button id="gt"><a href="#">GUITARRAS</a></button></li>
            <li><button id="bp"><a href="#">BATERÍAS Y PERCUSION</a></button></li>
            <li><button id="ts"><a href="#">TECLADOS Y SINTETIZADORES</a></button></li>
            <li><button id="bj"><a href="#">BAJOS</a></button></li>
            <li> <button id="ge"><a href="#">GRABACIÓN Y ESTUDIO</a></button></li>
          </ul>
          <a href="#"><i id="shop-cart" class="fa-sharp fa-solid fa-cart-shopping"></i></a>
          <div class="Social_Media">
            <ul>
                <li><a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://web.whatsapp.com/" target="_blank"><i class="fa-brands fa-square-whatsapp"></i></a></li>
            </ul>
        </div>
    </header>

    <!--Fin Cabecera de Página-->

    <!--Inicio Cuerpo de Página-->

    <!-- sección categorías -->
    <div id="barra-categorias">
      <h2>Categorías</h2>
    </div>

    <section class="guitar">
        <div id="img-container-gr">
          <img src="../resourses/img/Guitarras.png" alt="Guitar" name="Guitar" /></div>
        <ul class="contenedor-lista">
          <li class="elemento-1"><a href="#">Guitarras Eléctricas</a></li>
          <li class="elemento-1"><a href="#">Guitarras Acústicas</a></li>
          <li class="elemento-1"><a href="#">Amplificadores de Guitarra</a></li>
          <li class="elemento-1"><a href="#">Pedales para Guitarra</a></li>
          <li class="elemento-1"><a href="#">Guitarras para Zurdos</a></li>
          <li class="elemento-1"><a href="#">Accesorios para Guitarra</a></li>
          <li class="elemento-1"><a href="#">Sistema Inalambrico para Guitarra</a></li>
          <li class="elemento-1"><a href="#">Paquetes de Guitarras</a></li>
          <li class="elemento-1"><a href="#">Cuerdas para Guitarra</a></li>
          <li class="elemento-1"><a href="#">Guitarras para Viaje</a></li>
          <li class="elemento-1"><a href="#">Libros sobre Guitarra</a></li>
          <li class="elemento-1"><a href="#">Pastillas para Guitarra</a></li>
        </ul>
    </section>

    <section class="bass">
        <div id="img-container-ba"><img src="../resourses/img/Bajos.png" alt="bass" name="bass" /></div>
      <ul class="contenedor-lista">
        <li class="elemento-1"><a href="#">Bajos Eléctricos</a></li>
        <li class="elemento-1"><a href="#">Bajos Acústicos</a></li>
        <li class="elemento-1"><a href="#">Amplificadores para Bajo</a></li>
        <li class="elemento-1"><a href="#">Pedales para Bajo</a></li>
        <li class="elemento-1"><a href="#">Bajos para Zurdos</a></li>
        <li class="elemento-1"><a href="#">Accesorios para Bajo</a></li>
        <li class="elemento-1"><a href="#">Sistema Inalambrico para Bajo</a></li>
        <li class="elemento-1"><a href="#">Paquetes de Bajos</a></li>
        <li class="elemento-1"><a href="#">Cuerdas para bajo</a></li>
        <li class="elemento-1"><a href="#">Bajos sin cabezal</a></li>
        <li class="elemento-1"><a href="#">Libros sobre Bajo</a></li>
        <li class="elemento-1"><a href="#">Pastillas para Bajo</a></li>
      </ul>
    </section>

    <section class="keys">
        <div id="img-container-ky"><img src="../resourses/img/teclados.png" alt="keys" name="keys" /></div>
      <ul class="contenedor-lista">
        <li class="elemento-1"><a href="#">Pianos</a></li>
        <li class="elemento-1"><a href="#">Sintetizadores</a></li>
        <li class="elemento-1"><a href="#">Sintetizadores Modulares</a></li>
        <li class="elemento-1"><a href="#">Organos Electricos</a></li>
        <li class="elemento-1"><a href="#">Teclados Portatiles</a></li>
        <li class="elemento-1"><a href="#">Estaciones de Trabajo</a></li>
        <li class="elemento-1"><a href="#">Controladores MIDI</a></li>
        <li class="elemento-1"><a href="#">Amplificadores de Teclado</a></li>
        <li class="elemento-1"><a href="#">Accesorios para Teclado</a></li>
        <li class="elemento-1"><a href="#">Libros para Piano y Teclado</a></li>
        <li class="elemento-1"><a href="#">Paquetes de Teclado y Sintetizador</a></li>
        <li class="elemento-1"><a href="#">Acordiones</a></li>
      </ul>
    </section>

    <section class="drums">
        <div id="img-container-dr"><img src="../resourses/img/Baterías.png" alt="drums" name="drums" /></div>
      <ul class="contenedor-lista">
        <li class="elemento-1"><a href="#">Baterías Acústicas</a></li>
        <li class="elemento-1"><a href="#">Baterías Electricas</a></li>
        <li class="elemento-1"><a href="#">Hardware de Batería</a></li>
        <li class="elemento-1"><a href="#">Micrófonos para Batería</a></li>
        <li class="elemento-1"><a href="#">Platillos</a></li>
        <li class="elemento-1"><a href="#">Baquetas y Escobillas</a></li>
        <li class="elemento-1"><a href="#">Parches para Batería</a></li>
        <li class="elemento-1"><a href="#">Percusión</a></li>
        <li class="elemento-1"><a href="#">Percusión para Orquesta</a></li>
        <li class="elemento-1"><a href="#">Estuches para Batería</a></li>
        <li class="elemento-1"><a href="#">Libros para Batería y Percusión</a></li>
        <li class="elemento-1"><a href="#">Paquetes de Batería y percusión</a></li>
      </ul>
    </section>

    <section class="recording">
        <div id="img-container-rg"><img
          src="../resourses/img/grabacion.png"
          alt="recording"
          name="recording"
        /></div>
      <ul class="contenedor-lista">
        <li class="elemento-1"><a href="#">Interfaces de Audio</a></li>
        <li class="elemento-1"><a href="#">Monitores de Estudio</a></li>
        <li class="elemento-1"><a href="#">Micrófonos</a></li>
        <li class="elemento-1"><a href="#">Preamplificadores de Estudio</a></li>
        <li class="elemento-1"><a href="#">Grabadoras Digitales</a></li>
        <li class="elemento-1"><a href="#">Auriculares y Amplificadores</a></li>
        <li class="elemento-1"><a href="#">Mixers Digitales</a></li>
        <li class="elemento-1"><a href="#">Mixers Analógicos</a></li>
        <li class="elemento-1"><a href="#">Equipo MIDI</a></li>
        <li class="elemento-1"><a href="#">Controladores</a></li>
        <li class="elemento-1"><a href="#">Convertidores Digitales</a></li>
        <li class="elemento-1"><a href="#">Efectos y Procesadores</a></li>
      </ul>
    </section>

    <section class="accsesories">
        <div id="img-container-accs"><img
          src="../resourses/img/Accesorios.png"
          alt="accsesories"
          name="accsesories"
        /></div>
      <ul class="contenedor-lista">
        <li class="elemento-1"><a href="#">Soportes</a></li>
        <li class="elemento-1"><a href="#">Sillas, Bancos y Taburetes</a></li>
        <li class="elemento-1"><a href="#">Auriculares</a></li>
        <li class="elemento-1"><a href="#">Protección del Oído</a></li>
        <li class="elemento-1"><a href="#">Enchufes Múltiples</a></li>
        <li class="elemento-1"><a href="#">Metronomos y afinadores</a></li>
        <li class="elemento-1"><a href="#">Batutas y Accesorios</a></li>
        <li class="elemento-1"><a href="#">Accesorios para Ordenador</a></li>
        <li class="elemento-1"><a href="#">Herramientas Multifunción</a></li>
        <li class="elemento-1"><a href="#">Linternas de Bolsillo LED</a></li>
        <li class="elemento-1"><a href="#">Cintas Adhesivas</a></li>
        <li class="elemento-1"><a href="#">Articulos de Regalo</a></li>
      </ul>
    </section>

    <section class="software">
        <div id="img-container-sw"><img
          src="../resourses/img/software.png"
          alt="Software"
          name="Software"
        /></div>
      <ul class="contenedor-lista">
        <li class="elemento-1"><a href="#">Secuenciadores Software</a></li>
        <li class="elemento-1"><a href="#">Mastering y Otros Editores</a></li>
        <li class="elemento-1"><a href="#">Plug-ins de Audio y Efectos</a></li>
        <li class="elemento-1"><a href="#">Librerías de Sonidos</a></li>
        <li class="elemento-1"><a href="#">Sofware de Notación</a></li>
        <li class="elemento-1"><a href="#">Software de Vídeo</a></li>
        <li class="elemento-1"><a href="#">Procesadores Virtuales </a></li>
        <li class="elemento-1"><a href="#">Software Educacional</a></li>
        <li class="elemento-1"><a href="#">Software DAW</a></li>
        <li class="elemento-1"><a href="#">Ordenadores</a></li>
        <li class="elemento-1"><a href="#">Otros Software Musicales</a></li>
      </ul>
    </section>

    <section class="sound">
        <div id="img-container-sd"><img src="../resourses/img/luces.png" alt="sound" name="sound" /></div>
      <ul class="contenedor-lista">
        <li class="elemento-3"><a href="#">Sistemas completos de PA</a></li>
        <li class="elemento-3"><a href="#">Sistemas inalámbricos</a></li>
        <li class="elemento-3"><a href="#">Monitorización In Ear</a></li>
        <li class="elemento-3"><a href="#">Herramientas de audio</a></li>
        <li class="elemento-3"><a href="#">Etapas de potencia</a></li>
        <li class="elemento-3"><a href="#">Control de altavoces / Crossovers</a></li>
        <li class="elemento-3"><a href="#">Iluminación de decoración</a></li>
        <li class="elemento-3"><a href="#">Cabezas móviles</a></li>
        <li class="elemento-3"><a href="#">Hardware</a></li>
        <li class="elemento-3"><a href="#">Proyectores</a></li>
        <li class="elemento-3"><a href="#">Sets de proyectores</a></li>
        <li class="elemento-3"><a href="#">Pirotecnia</a></li>
      </ul>
    </section>

    <!-- sección de Marcas -->

    <div class="decoracion-pr"><h2>Marcas Populares</h2></div>

    <div class="slider-container">
      <div class="slider">
            <div class="slide">
              <button>
             <a href="https://www.dwdrums.com/" target="_blank"><img src="../resourses/img/logos/Drum_worksh_logo.png" alt="DW"/></a> 
          </button>
            </div>
            <div class="slide">
              <button>
              <a href="http://mapexdrums.com/international/" target="_blank"><img src="../resourses/img/logos/mapex-logo-54863D0F4F-seeklogo.com.png" alt="MAPEX"/></a>
          </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://www.tama.com/asia/" target="_blank"><img src="../resourses/img/logos/tama-logo-0.png" alt="TAMA"/></a>
              </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://www.fender.com/es/start" target="_blank"><img src="../resourses/img/logos/fender-1-logo-black-and-white.png" alt="FENDER"/></a>
              </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://www.espguitars.com/" target="_blank"><img src="../resourses/img/logos/ESP_Logo.svg.png" alt="ESP"/></a>
              </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://www.yamaha.com/en/" target="_blank"><img src="../resourses/img/logos/Yamaha.png" alt="YAMAHA"/></a>
              </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://www.korg.com/es/" target="_blank"><img src="../resourses/img/logos/1280px-Korg_logo.svg.png" alt="KORG"/></a>
              </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://prsguitars.com/" target="_blank"><img src="../resourses/img/logos/Prs_guitars_logo.png" alt="PRS"/></a>
              </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://meinlcymbals.com/en/home" target="_blank"><img src="../resourses/img/logos/Meinl_cymbals_logo.png" alt="MEINL"/></a>
              </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://sabian.com/" target="_blank"><img src="../resourses/img/logos/sabian logo.png" alt="SABIAN"/></a>
              </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://www.lpmusic.com/" target="_blank"><img src="../resourses/img/logos/marcas-musical-cedar-16.png" alt="LP"/></a>
              </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://line6.com/" target="_blank"><img src="../resourses/img/logos/2560px-Line6_Logo.svg.png" alt="LINE-6"/></a>
              </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://www.schecterguitars.com/" target="_blank"><img src="../resourses/img/logos/schecter-logo.png" alt="Schecter-guitar"></a>
              </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://www.ibanez.com/na/" target="_blank"><img src="../resourses/img/logos/Ibanez_logo.svg.png" alt="Ibanez-guitar"></a>
              </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://orangeamps.com/es/" target="_blank"><img src="../resourses/img/logos/orange-amps-logo.png" alt="Orange-amp"></a>
              </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://remo.com/" target="_blank"><img src="../resourses/img/logos/remo-drumheads-logo.png" alt="Remo-heads"></a>
              </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://www.daddario.com/products/percussion/evans-drumheads/" target="_blank"><img src="../resourses/img/logos/evans-logo.png" alt="Evans-heads"></a>
              </button>
            </div>
            <div class="slide">
              <button>
                  <a href="https://pearldrum.com/global/" target="_blank"><img src="../resourses/img/logos/Pearl_drum_logo.png" alt="Pearl-Drums"></a>
              </button>
            </div>
           
      </div>
      <button class="prev-btn"><i class="fa-solid fa-chevron-left"></i></button> 
      <button class="next-btn"><i class="fa-solid fa-chevron-right"></i></button>
          </div>
        </div>

    <!--Fin Cuerpo de Página-->

    <!--Inicio de Pie de Página-->

    <footer>
      <button id="mas-informacion">Más información</button>
      <div class="footer-contain">   
          <div class="footer-titulo">
            <h3>Información de contacto</h3>
            <ul>
              <li>Dirección: 123 Calle Principal</li>
              <li>Teléfono: 555-123456</li>
              <li>Email: info@example.com</li>
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

    <!--Fin de Pie de Página-->


    <script type="text/Javascript" src="js/script.js"></script>

  </body>
</html>
