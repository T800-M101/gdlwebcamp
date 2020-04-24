<footer class="site-footer">
    <div class="contenedor clearfix">
      <div class="footer-informacion">
        <h3>Sobre<span>gdlwebcamp</span></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      </div>
      <div class="ultimos-tweets">
        <h3>últimos<span>tweets</span></h3>
        <ul>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. #Pellentesque@justo.com</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. #Pellentesque@justo.com</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. #Pellentesque@justo.com</li>

        </ul>
      </div>
      <div class="menu">
        <h3>Redes<span>sociales</span></h3>
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest-p"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
      </div>
    </div>
</footer>
<p class="copyright">Todos los derechos Reservados GDLWEBCAMP 2016.</p>

<script src="js/vendor/modernizr-3.6.0.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.lettering.js"></script>
<script src="js/jquery.waypoints.min.js"></script>



<?php
     $archivo = basename($_SERVER['PHP_SELF']);
       $pagina = str_replace('.php',"",$archivo);//1. Que  se va a remplazar, 2. Com que se remplaza, 3. La fuente
       if($pagina =='invitados' || $pagina =='index'){
         echo '<script src="js/jquery.colorbox-min.js"></script>';
         echo ' <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
         integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
         crossorigin=""></script>';
       }else if($pagina =='conferencia'){
         echo '<script src="js/lightbox.js"></script>';
       }

 ?>

<script src="js/main.js"></script>
<script src="js/map.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
