document.getElementById("mas-informacion").addEventListener("click", function() {
    var footerTitulos = document.getElementsByClassName("footer-titulo");
    
    for (var i = 0; i < footerTitulos.length; i++) {
      footerTitulos[i].classList.toggle("mostrar");
    }
  });
  