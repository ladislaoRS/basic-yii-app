<?php

/* @var $this yii\web\View */
use app\assets\AppAsset;
use yii\helpers\Url;

$this->title = 'Centro de Ayuda Legal';
?>
<div class="site-index">
    <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header white-text center col s12 bold"></h1>
        <h1 class="header center col s12 thin"><span class="z-depth-5 title-index">Centro De Ayuda Legal</span></h1>
        <div class="row center">
          <h5 class="header col s12 bold">¡Busca la mejor asesoría con nosotros y déjanos pelear por ti!</h5>
        </div>
        <div class="row center">
          <a href="<?= Url::to('index.php?r=site/contact') ?>" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Envía tu caso para revisión</a>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="parallax/escritorio_1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Nuestro Objetivo</h5>

            <p class="light">Ejercer la profesión de abogado mediante la participación en juicios y defensas orientada a proporcionar a nuestros clientes una seguridad jurídica con una mejor estabilidad emocional, moral y económica, protegiendo su patrimonio, su familia y su libertad.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Nuestro Compromiso</h5>

            <p class="light">Tener una actitud de servicio a nuestros clientes con resultados favorables a sus intereses, realizando nuestro trabajo con compromiso y con la visión de tener resultados rápidos y sin obstáculos para la impartición de justicia, enfocándonos en cada momento por el bienestar y prosperidad de nuestros clientes.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Asesoramiento jurídico con alta responsabilidad </h5>

            <p class="light">Nuestra labor consiste en cada trabajo resolverlos con ética profesional y compromiso.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Consolidar la calidad de nuestro servicio en la mente, espíritu y corazón de nuestros clientes.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="parallax/escritorio_2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contáctanos</h4>
          <p class="left-align light">Cumplir y transcender día a día las expectativas de nuestros clientes con diligencia y justicia, obtenidas a través de la responsabilidad.
          Nuestro despacho tiene la misión de proteger los intereses de nuestros clientes, ayudándoles a la solución de problemas representándolos con dinámica  a una solución legal que se requiere en cada caso en concreto.
          </p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Justicia, honestidad, profesionalismo, confianza y transparencia</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="parallax/escritorio_3.jpg" alt="Unsplashed background img 3"></div>
  </div>
</div>
