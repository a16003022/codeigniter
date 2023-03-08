<div class="video_header">

  <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
  <!-- <div class="overlay"></div> -->

  <!-- The HTML5 video element that will create the background video on the header -->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?php echo base_url()?>/imagenes/video_header.mp4" type="video/mp4">
  </video>

  <!-- The header content -->
  <div class="container  h-100">
    <div class="d-flex h-100 text-center align-items-center ">
      <div class="w-100 text-white">
        <h1 class="display-3">Tec-Shirts</h1>
        <p class="lead mb-0">¡Registrate y obtén 15% de descuento en tu primera compra!</p>
        <form class="form col-lg-6 col-sm-12 center">
    <div class="input-group ">
      <input type="email" class="form-control" size="10" placeholder="Correo electrónico" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger btn-jumbotron">Suscribete</button>
      </div>
    </div>
  </form>
      </div>
    </div>
  </div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container nosotros ">
  <div class="row d-flex  align-items-center">
    <div class="col-lg-10 col-md-12">
      <h2>Sobre Nosotros</h2><br>
      <h4>Somos Tec-Shirts, una empresa ubicada en Mérida, Yucatán, dedicada a la producción y venta de ropa de alta calidad. Nos enorgullece ofrecer productos con un estilo fresco y moderno, hechos con materiales de la más alta calidad.<br> <br>Además de nuestra amplia gama de ropa, en Tec-Shirts también ofrecemos una línea de bolsas térmicas de alta calidad. Estas bolsas están diseñadas para mantener tus alimentos y bebidas a la temperatura perfecta, ya sea en el trabajo, en un picnic o en un viaje.

      <br><br>Nos esforzamos por utilizar materiales duraderos y respetuosos con el medio ambiente en la fabricación de nuestras bolsas térmicas, y por ofrecer una amplia variedad de tamaños y estilos para satisfacer las necesidades de todos nuestros clientes.</p>
      <br><button type="button" class="btn btn-dark"><a class="btn-contact" href="#contact">Contáctanos</a></button>
    </div>
    <div class="col-lg-2 imgdiv">
      <img class="nosotros_img" src="<?php echo base_url()?>/imagenes/sudadera.jpg"/>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey ">
  <div class="row">
    <!-- <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div> -->
    <div class="col-10 nosotros">
      <h2>Nuestros valores</h2><br>
      <h4><strong>MISIÓN:</strong>Nuestra misión es proporcionar a nuestros clientes ropa de alta calidad, con un enfoque en la moda y el estilo, mientras mantenemos una cultura de responsabilidad social y sostenibilidad. Nos esforzamos por crear productos que reflejen la diversidad y la inclusión, y por mantener una comunicación transparente y ética con todos nuestros stakeholders.</h4><br>
      <p><strong>VISIÓN:</strong> Nuestra visión es ser reconocidos como líderes en la industria de la moda, innovando constantemente en diseño y tecnología para ofrecer a nuestros clientes una experiencia de compra única y memorable. Aspiramos a ser una empresa respetada y admirada por nuestra dedicación a la sostenibilidad y el impacto positivo en la sociedad y el medio ambiente.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<!--<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>-->

<!-- Container (Portfolio Section) -->
<div id="productos" class="container-fluid text-center">
  <h2>Nuestros productos</h2><br>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img class="img-fluid" src="<?php echo base_url()?>/imagenes/playeras.jfif" alt="Playeras" style="max-width:60%;">
        <p><strong>Playeras</strong></p>
        <p>¡Consigue el estilo que buscas con nuestras playeras!</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url()?>/imagenes/sudadera2.jpg" alt="New York" style="max-width:60%;">
        <p><strong>Sudaderas</strong></p>
        <p>¡Brilla con estilo en cualquier ocasión con nuestras sudaderas!</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url()?>/imagenes/bolsa.jpg" alt="San Francisco" style="max-width:68%;">
        <p><strong>Bolsas térmicas</strong></p>
        <p>¡Mantén tus alimentos frescos y tus bebidas calientes donde quiera que vayas con nuestras bolsas térmicas!</p>
      </div>
    </div>
  </div><br>
  
  <h2>Comentarios de nuestros clientes</h2>
  <div id="myCarousel" class="carousel slide text-center" data-bs-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Esta empresa es la mejor. ¡Estoy tan feliz con el resultado!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"Una palabra... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"¿Podría ... Estar más contento con esta empresa?<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


<!-- Container (Pricing Section) -->

<div id="promos" class="container-fluid bg-grey">
  <div class="text-center">
    <h2><br>Paquetes</h2>
    <h4>Selecciona un paquete para ti</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Básico</h1>
        </div>
        <div class="panel-body">
        <h4>Incluye:</h4>
          <p><strong>2</strong> Playeras</p>
          <p><strong>1</strong> Sudadera</p>
          <br>
          <br>
        </div>
        <div class="panel-footer">
          <h3>$699</h3>
          <button class="btn btn-lg">Comprar</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Intermedio</h1>
        </div>
        <div class="panel-body">
          <h4>Incluye:</h4>
          <p><strong>1</strong> Playera</p>
          <p><strong>1</strong> Sudadera</p>
          <p><strong>1</strong> Bolsa térmica</p>
          <p><strong></strong> </p>
        </div>
        <div class="panel-footer">
          <h3>$999</h3>
          <button class="btn btn-lg">Comprar</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <h4>Incluye:</h4>
          <p><strong>2</strong> Playeras</p>
          <p><strong>1</strong> Sudaderas</p>
          <p><strong>3</strong> Bolsas térmicas</p>
        </div>
        <div class="panel-footer">
          <h3>$1699</h3>
          <button class="btn btn-lg">Comprar</button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid ">
  <h2 class="text-center cnt-txt">CONTACTO</h2>
  <div class="row">
    <div class="col-sm-5 mapouter">
      <div class="gmap_canvas">
        <iframe width="575" height="350" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d238369.6251760993!2d-89.69094874903467!3d21.011653670251686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1675963341248!5m2!1ses!2smx" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
      <p>Póngase en contacto con nosotros y nos pondremos en contacto con usted dentro de las 24 horas.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Mérida, Yucatán, México</p>
      <p><span class="glyphicon glyphicon-phone"></span> +52 9995875487</p>
      <p><span class="glyphicon glyphicon-envelope"></span> contacto@tecshirts.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Correo" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-dark pull-right" type="submit">Enviar</button>
        </div>
      </div>
      <!-- <div class="row me-auto">
      <div class="g-recaptcha brochure__form__captcha" data-sitekey="6Lfqa3okAAAAAFeDDk0pDfN9TZJ3DrL57bCICsxI"></div>

      </div> -->
    </div>
  </div>
</div>

<!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->