<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '¿Quiénes Somos?';
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
<div class="site-about container">
    <h1 class="teal-text light"><?= Html::encode($this->title) ?></h1>

    <p>
    </p>

   
</div>
