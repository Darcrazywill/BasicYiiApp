<?php
use yii\helpers\Html;
?>
<h1>We successfull get information:</h1>
<div>Name:<?=Html::encode($model->name)?></div>
<div>Mail:<?=Html::encode($model->email)?></div>
<div>Pet Name:<?=Html::encode($model->petName)?></div>