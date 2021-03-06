<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <nav class="teal light" role="navigation">
    <div class="nav-wrapper container">
      <!--<img class="brand-logo" src="<?= Url::to('@web/img/cal.png') ?>" />-->
      <a id="logo-container" href="<?= Yii::$app->homeUrl ?>" class="brand-logo"><span class="thin">CAL</span></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?= Yii::$app->homeUrl ?>">INICIO</a></li>
        <li><a href="<?= Url::to('index.php?r=site/about')?>">¿QUIÉNES SOMOS?</a></li>
        <li><a href="<?= Url::to('index.php?r=site/contact') ?>">CONTACTO</a></li>
        
        <?= 
            Yii::$app->user->isGuest ? (
                '<li><a href='.Url::to("index.php?r=site/login").'>INICIAR SESIÓN</a></li>'
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'SALIR (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'waves-effect waves-teal btn-flat']
                )
                . Html::endForm()
                . '</li>'
            )
        ?>
      </ul>
      <ul id="nav-mobile" class="side-nav teal">
        <li><a href="<?= Yii::$app->homeUrl ?>">INICIO</a></li>
        <li><a href="<?= Url::to('index.php?r=site/about')?>">¿QUIÉNES SOMOS?</a></li>
        <li><a href="<?= Url::to('index.php?r=site/contact') ?>">CONTACTO</a></li>
        <?= 
            Yii::$app->user->isGuest ? (
                '<li><a href='.Url::to("index.php?r=site/login").'>INICIAR SESIÓN</a></li>'
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'SALIR (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'waves-effect waves-teal btn-flat']
                )
                . Html::endForm()
                . '</li>'
            )
        ?>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</header>

    <main class="">
        <?= Breadcrumbs::widget([
            //'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </main>

<footer class="page-footer teal thin">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h6 class="white-text">Centro de Ayuda Legal</h6>
          <p class="grey-text text-lighten-4 html-copyright">Av. Periférico de la Juventud 1234<br>
          Fraccionamiento C.P. 12345, Chihuahua<br>
          +52 (656) 123-4567</p>


        </div>
        <div class="col l3 s12">
          <h6 class="white-text">Servicios</h6>
          <ul>
            <li><a class="white-text" href="#!">Derecho Civil</a></li>
            <li><a class="white-text" href="#!">Derecho Penal</a></li>
            <li><a class="white-text" href="#!">Derecho Laboral</a></li>
            <li><a class="white-text" href="#!">Derecho Mercantil</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h6 class="white-text">Social</h6>
          <ul>
            <li><a class="white-text" href="#!">Twitter</a></li>
            <li><a class="white-text" href="#!">Facebook</a></li>
            <li><a class="white-text" href="#!">LinkedIn</a></li>
            <!--<li><a class="white-text" href="#!">Link 4</a></li>-->
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright html-copyright">
      <div class="container">
          <a class="grey-text text-lighten-4 right" href="#!">Copyright © 2016 centro-ayuda-legal.com - Todos los derechos reservados</a>
          Creado por <a class="brown-text text-lighten-3" href="http://crea-intel.herokuapp.com">Crea-Intel</a>
    </div>
  </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
