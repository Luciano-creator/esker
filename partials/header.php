<header>

  <!-- TOPBAR -->
  <div class="topbar">
    <div class="social-media">
      <ul class="">
        <li class="">
          <a class="" href="#"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li class="">
          <a class="" href="#"><i class="fab fa-instagram"></i></a>
        </li>
        <li class="">
          <a class="" href="#"><i class="fab fa-linkedin-in"></i></a>
        </li>
      </ul>
    </div>
    <div class="top-bar-right">
      <div class="carrito">
        <a href="#">
          <i class="fas fa-shopping-cart"></i>
          <span class="total">$ <span class="acumulado">0,00</span></span>
          <span class="contador">0</span>
        </a>
      </div>

      <div class="buscador">
        <a class="" href="#">
          <i class="fas fa-search"></i>
        </a>
      </div>

      <div class="usuario">
        <ul>
          <li>
            <a href="login.php">
              <span>Login</span>
            </a>
          </li>
          <li>
            <span class="divisor"> / </span>
          </li>
          <li>
            <a href="registro.php">
              <span>Registrarse</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <!-- NAV PRINCIPAL -->
  <nav id="menu-pcipal">
    <div class="logo">
      <a class="top-logo" href="index.php">
        <img src="logos/logo-esker.png" alt="Logo Esker Outdoors" width="185" height="153">
      </a>
    </div>

    <div class="nav-left">
      <ul>
        <li>
          <a href="index.php">
            <span>Home</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span>Productos</span>
          </a>
        </li>

<<<<<<< HEAD:partials/header.php
      </ul>
    </div>
    <div class="nav-right">
      <ul>
        <li>
          <a href="#">
            <span>Preguntas Frecuentes</span>
          </a>
        </li>
        <li>
          <a href="contacto.php">
            <span>Contacto</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
=======
        <form class="login-form" action="index.html" method="post">
          <fieldset>
            <input type="text" name="nombre" value="">
          </fieldset>
          <fieldset>
            <input type="text" name="Email" value="">
          </fieldset>
          <fieldset>
            <input type="checkbox" name="remember" value="recordar">
            <span>Recordar Usuario</span>
          </fieldset>
          <input type="submit" name="Enviar" value="Enviar">
          <p class="olvidopass"> <a href="#">Olvidé mi contraseña</a></p>
        </form>

    </div>
  </div>
</div>
<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="newsletter">
      <p>Suscribite a nuestro newsletter y recibí nuestras novedades</p>
      <form class="form-inline">
        <fieldset class="form-group">
          <input type="text" class="form-control" id="nombre" placeholder="Nombre y Apellido" name="nombre">

        </fieldset>
        <fieldset class="form-group">
          <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </fieldset>
        <button type="submit" class="btn btn-primary">Suscribirme</button>
      </form>
    </div>
    <div class="ubicacion">
      <div class="contacto">
        <div class="iconos-footer">
          <p>VENI A VISITAR NUESTRO SHOWROOM EN ALMAGRO</p>
          <p>De Lunes a Viernes de 12:30 a 18:30 hs </p>
          <div class="direccion">
            <i class="fas fa-map-marker-alt"></i>
            <h6>DÓNDE ESTAMOS</h6>
            <small>Córdoba 5140 - CABA - Argentina</small>
          </div>
          <div class="escribinos">
            <i class="far fa-envelope"></i>
            <h6>ESCRIBINOS</h6>
            <a href="mailto:ventas@eskeroutdoor.com.ar">ventas@eskeroutdoor.com.ar</a>
          </div>
          <div class="llamar">
            <i class="fas fa-phone-alt"></i>
            <h6>LLAMANOS</h6>
            <small>011 2136-7255</small>
          </div>
        </div>
        <div class="mapa">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.5360617539936!2d-58.43798508423319!3d-34.59060386431255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca5b8d32a105%3A0xd34931046391ef4a!2sesker%20outdoor%20-%20La%20vida%20comienza%20all%C3%A1%20afuera*21!5e0!3m2!1ses-419!2sar!4v1575463644979!5m2!1ses-419!2sar"
            width="560" height="390" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        </div>
        <div class="sm-footer">
          <ul class="">
            <li class="">
              <a class="" href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="">
              <a class="" href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="">
              <a class="" href="#"><i class="fab fa-linkedin-in"></i></a>
            </li>
          </ul>
        </div>

      </div>
    </div>
    <div class="legales">
      <small>Esker Outdoors © 2019 - Todos los derechos reservados</small>
    </div>
  </div>

</footer>

<!-- FIN DEL FOOTER -->

<!--  SCRIPTS  -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
>>>>>>> master:login.html

</header>
