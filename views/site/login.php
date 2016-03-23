<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Iniciar Sesión';
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
<div class="site-login container">
    <h1 class="teal-text light"><?= Html::encode($this->title) ?></h1>

    <h5 class="teal-text thin">Por favor ingrese los siguientes datos para iniciar su sesión</h5>

     <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">User Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
           <div class="row">
               <div class="input-field col s6">
                  <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                  <label for="filled-in-box">Recordarme me la siguiente vez</label>
               </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Iniciar Sesión</a>
            </div>
          </div>
        </form>
  </div>

</div>
