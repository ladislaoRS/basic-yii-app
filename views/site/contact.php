<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contáctanos';
//$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<nav class="container white">
    <div class="nav-wrapper breadcrumb-padding">
      <div class="col s12">
        <a href="<?= Yii::$app->homeUrl?>" class=" breadcrumb teal-text text-lighten-3">Home</a>
        <a href="#!" class="breadcrumb teal-text text-lighten-1"><?= $this->title ?></a>
      </div>
    </div>
</nav>
  <br> <br>
<div class="site-contact container">
    <h1 class="teal-text light"><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <h5 class="teal-text thin">
            Envíenos su caso, nosotros nos encargaremos de notificarle donde se encuentre.
        </h5>
        <br><br>
        <div class="row">
            <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">account_circle</i>
                          <input id="icon_prefix" type="text" class="validate">
                          <label for="icon_prefix">Name</label>
                    </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s6">
                      <i class="material-icons prefix">subject</i>
                          <input id="icon_telephone" type="text" class="validate">
                          <label for="icon_telephone">Subject</label>
                        </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s6">
                      <i class="material-icons prefix">email</i>
                          <input id="icon_telephone" type="email" class="validate">
                          <label data-error="wrong" data-success="right" for="icon_telephone">Email</label>
                        </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s6">
                      <i class="material-icons prefix">mode_edit</i>
                          <textarea id="textarea1" class="materialize-textarea"></textarea>
                          <label for="icon_telephone">Body</label>
                        </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s6">
                       <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Envía tu caso para revisión</a>   
                      </div>
                  </div>
                </form>
         </div>
        </div>
    <!-- Map -->
    <div class"container">
        <h5 class="teal-text">Ubicanos en:</h5><br><br>
        <section id="contact" class="map">
            <iframe width="50%" height="50%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3004.787346969278!2d-106.12359754987004!3d28.63618539058133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea42d03f423869%3A0xcb16c557b335cfdf!2sAv.+de+la+Juventud+2200%2C+Haciendas+del+Valle+I+Etapa%2C+31217+Chihuahua%2C+Chih.!5e1!3m2!1sen!2smx!4v1458624661540" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <br />
        </section>
        <br><br>
    </div>

    <?php endif; ?>
</div>
