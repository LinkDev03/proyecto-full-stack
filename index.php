<!DOCTYPE html>
<html lang="en-es">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="resourses/img/icons/MasterMusicStore-_1_.ico" type="image/x-icon"/> 
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;600;700;800&family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6adb63d45f.js" crossorigin="anonymous"></script>
    <title>Infinix Music Store</title>
</head>
<body>

    <!--Inicio Cabecera de Página--> 
    
    <header>
        <a href="index.php"><div class="logo"><!--<img src="resourses/img/logos/MasterMusicStore.png" alt="logo" name="logo"/>--></div></a> 
        <div class="search">
        <form  action=" " metod= "get">
        <input id="Search-bar" type="text" name="Barra de busqueda"  placeholder=" Buscar en la tienda...">
        <button id="btn" type="submit"> 
          <i class="fa-solid fa-magnifying-glass fa-2xl"></i>
        </button>
        </form> 
        </div>
        

    <button type="button" class="User_Button"><a href="login/InicioSesion.php">Acceder o Registrarse</a>  
    <i class="fa-solid fa-circle-user"></i>
    </button>';
        <nav role="navigation"> 
            <div id="menuToggle">
            
            <input type="checkbox" />  
            
            <span></span>
            <span></span> 
            <span></span>

            <ul id="menu">
                <a href="index.php"><li>Inicio</li></a>
                <a href="Pagina_Categorias/categorias.php"><li>Categorías</li></a>
                <a href="#"><li>Guitarras</li></a>
                <a href="#"><li>Bajos</li></a>
                <a href="#"><li>Teclados y Sintetizadores</li></a>
                <a href="#"><li>Baterías y percusión</li></a>
                <a href="#"><li>Grabación y Estudio</li></a>
                <a href="#"><li>Accesorios</li></a>
                <a href="#"><li>Software y Plug-ins</li></a>
                <a href="#"><li>Sonido e iluminación</li></a>
                <a href="pagina_3/pagina_3.html" target="_blank"><li>visita nuestro blog</li></a>

            </ul>
            </div>
        </nav>
        <nav class="Inert_Buttons">
          <ul>
            <li><button id="gt"><a href="#">GUITARRAS</a></button></li>
            <li><button id="bp"><a href="#">BATERÍAS Y PERCUSION</a></button></li>
            <li><button id="ts"><a href="#">TECLADOS Y SINTETIZADORES</a></button></li>
            <li><button id="bj"><a href="#">BAJOS</a></button></li>
            <li><button id="ge"><a href="#">GRABACIÓN Y ESTUDIO</a></button></li>
          </ul>
        </nav>
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

    <!-- sección principal -->

    <main class="principal">
        <section class="sliders">
            <ul>
                <li id="slider-1">
                    <h2>RUGE CON LA </br> NUEVA SERIE DE </br> AMPLIFICADORES ORANGE </h2>
                    <button class="btn-sld"><a href="">Saber Más <i class="fa-solid fa-arrow-right"></i></a></button>
                    
                </li>
                <li id="slider-2">
                    <h2>CONOCE LA</br> NUEVA LINEA DE </br> GUITARRAS ESP </h2>
                    <button class="btn-sld"><a href="">Saber Más <i class="fa-solid fa-arrow-right"></i></a></button>
                </li>
                <li id="slider-3">
                    <h2>PRACTICA SIN HACER </br> MUCHO RUIDO CON LA NUEVA LINEA DE </br> PLATILLOS MEINL HCS PRACTICE</h2>
                    <button class="btn-sld"><a href="">Saber Más <i class="fa-solid fa-arrow-right"></i></a></button>
                </li>
            </ul>
        </section>
    </main>

    <!-- sección de categorías -->

    <div class="decoracion-1"><h2>Categorías</h2></div>

    <section class="S-Categorias">
      <ul>
        <li><div class="Guitarras">
            <div class="img-cont"><a href=""><img src="resourses/img/Guitarras.png" alt="Guitarras" name="Guitarras"></a></div>
            <p><a href=" ">Guitarras</a></p>
        </div>
       </li>
        <li><div class="Bajos">
            <div class="img-cont"><a href=""><img src="resourses/img/Bajos.png" alt="Bajos" name="Bajos"></a></div>
            <p><a href="">Bajos</a></p>
        </div>
        </li>
        <li><div class="Teclados">
            <div class="img-cont"><a href=""><img src="resourses/img/teclados.png" alt="Teclados" name="Teclados"></a></div>
            <p><a href=" ">Teclados y Sintetizadores</a></p>
        </div>
        </li>
        <li><div class="Baterias">
            <div class="img-cont"><a href=""><img src="resourses/img/Baterías.png" alt="Baterías" name="Baterías"></a></div>
            <p><a href=" ">Baterías y  percusión</a></p>
        </div>
        </li> 
        <button class="Boton-Categoria"><a href="Pagina_Categorias/categorias.php">Ver Más <div id="circle"><i class="fa-solid fa-chevron-right"></i></div></a></button>
        </ul>
    </section>
    
    <!-- sección de recomendados -->

    <div class="decoracion-2"><h2>Recomendados</h2></div>

    <div class="slider-1-container">
        <div class="slider-1">
          <div class="slide-1">
            <div class="img-1"><a href=""><img src="resourses/img/productos/producto-1.png" alt="ESP-LTD"></a></div>
            <p><a href="#">ESP LTD EC-1000 Duncan Electric Guitar Black Satin 
            </br>6.660.000</a></p>
          </div>
          <div class="slide-1">
            <div class="img-2"><a href=""><img src="resourses/img/productos/producto-2.png" alt="FENDER-TELE"></a></div>
                <p><a href="#">Fender American Professional II Telecaster Maple Fingerboard 
            </br>10.199.000</a></p>
          </div>
          <div class="slide-1">
            <div class="img-3"><a href=""><img src="resourses/img/productos/producto-3.png" alt="IBANEZ-RG"></a></div>
                <p><a href="#">Ibanez RG Series RG470AHM Blue Moon Burst
            </br>3.550.000</a></p>
          </div>
          <div class="slide-1">
            <div class="img-4"><a href=""><img src="resourses/img/productos/producto-4.png" alt="SLS-EVIL"></a> </div>
                <p><a href="#">Bajo Schecter SLS Evil Twin-5 - Satin Black 
            </br>6.900.000</a></p>
          </div>
          <div class="slide-1">
            <div class="img-5"><a href=""><img src="resourses/img/productos/producto-5.png" alt="PEARL-MASTER"></a> </div>
                <p><a href="#">Pearl Masters Maple 4-piezas Shell Pack - Bombay Gold Sparkle
            </br>13.410.000</a></p>
          </div>
          <div class="slide-1">
            <div class="img-6"><a href=""><img src="resourses/img/productos/producto-6.png" alt="DW-DESING"></a> </div>
                <p><a href="#">DW Design Series 4-piezas Shell Pack con Redoblante - Tobacco Burst
            </br>7.680.000</a></p>
          </div>
          <div class="slide-1">
            <p><div class="img-7"><a href=""><img src="resourses/img/productos/producto-8.png" alt="MEINL-CLASSICS"></a></div>
                <a href="#">Meinl Cymbals Classics Custom Bonus Set - 14/16/20 Gratis Crash 18"
            </br>  2.870.000</a></p>
          </div>
          <div class="slide-1">
            <div class="img-8"><a href=""><img src="resourses/img/productos/producto-7.png" alt="LINE-6"></a></div>
        <p><a href="#">Line 6 Helix Guitar Multi-effects Floor Processor
            </br>7.850.000</a></p>
          </div>
        </div>
        <button class="prev-btn-1"><i class="fa-solid fa-chevron-left"></i></button>
        <button class="next-btn-1"><i class="fa-solid fa-chevron-right"></i></button>
      </div>
      

    <!-- sección de Marcas -->
    <div class="container">
  <div class="content">
    <div class="decoracion-3">
      <h2>Marcas Populares</h2>
    </div>
    <div class="slider-container">
      <div class="slider">
              <div class="slide">
                <button>
               <a href="https://www.dwdrums.com/" target="_blank"><img src="resourses/img/logos/Drum_worksh_logo.png" alt="DW"/></a> 
            </button>
              </div>
              <div class="slide">
                <button>
                <a href="http://mapexdrums.com/international/" target="_blank"><img src="resourses/img/logos/mapex-logo-54863D0F4F-seeklogo.com.png" alt="MAPEX"/></a>
            </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://www.tama.com/asia/" target="_blank"><img src="resourses/img/logos/tama-logo-0.png" alt="TAMA"/></a>
                </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://www.fender.com/es/start" target="_blank"><img src="resourses/img/logos/fender-1-logo-black-and-white.png" alt="FENDER"/></a>
                </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://www.espguitars.com/" target="_blank"><img src="resourses/img/logos/ESP_Logo.svg.png" alt="ESP"/></a>
                </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://www.yamaha.com/en/" target="_blank"><img src="resourses/img/logos/Yamaha.png" alt="YAMAHA"/></a>
                </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://www.korg.com/es/" target="_blank"><img src="resourses/img/logos/1280px-Korg_logo.svg.png" alt="KORG"/></a>
                </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://prsguitars.com/" target="_blank"><img src="resourses/img/logos/Prs_guitars_logo.png" alt="PRS"/></a>
                </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://meinlcymbals.com/en/home" target="_blank"><img src="resourses/img/logos/Meinl_cymbals_logo.png" alt="MEINL"/></a>
                </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://sabian.com/" target="_blank"><img src="resourses/img/logos/sabian logo.png" alt="SABIAN"/></a>
                </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://www.lpmusic.com/" target="_blank"><img src="resourses/img/logos/marcas-musical-cedar-16.png" alt="LP"/></a>
                </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://line6.com/" target="_blank"><img src="resourses/img/logos/2560px-Line6_Logo.svg.png" alt="LINE-6"/></a>
                </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://www.schecterguitars.com/" target="_blank"><img src="resourses/img/logos/schecter-logo.png" alt="Schecter-guitar"></a>
                </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://www.ibanez.com/na/" target="_blank"><img src="resourses/img/logos/Ibanez_logo.svg.png" alt="Ibanez-guitar"></a>
                </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://orangeamps.com/es/" target="_blank"><img src="resourses/img/logos/orange-amps-logo.png" alt="Orange-amp"></a>
                </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://remo.com/" target="_blank"><img src="resourses/img/logos/remo-drumheads-logo.png" alt="Remo-heads"></a>
                </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://www.daddario.com/products/percussion/evans-drumheads/" target="_blank"><img src="resourses/img/logos/evans-logo.png" alt="Evans-heads"></a>
                </button>
              </div>
              <div class="slide">
                <button>
                    <a href="https://pearldrum.com/global/" target="_blank"><img src="resourses/img/logos/Pearl_drum_logo.png" alt="Pearl-Drums"></a>
                </button>
              </div>
        </div>
        <button class="prev-btn"><i class="fa-solid fa-chevron-left"></i></button> 
        <button class="next-btn"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div class="btn-container">
            <button id="boton-marcas"><a href="">Ver Todas</a></button>
          </div>
      </div>
<!-- sección de blog -->
<div class="side-container">
      <aside class="decoracion-4">
        <h2>Visita Nuestro Blog</h2>
      </aside>
      <aside class="side">
      <button><a href="pagina_3/pagina_3.html" target="_blank">Entra Aquí</a></button>
      </aside>
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
    <!--Fin de Pie de Página-->
    
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/DOM.js"></script>
    
    
</body>
</html>