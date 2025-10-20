<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin();?>
<?= $form-> field($model, 'name')?>
<?= $form-> field($model, 'email')?>
<?= $form-> field($model, 'petName')?>
<?= Html::submitButton('send')?>
<?php ActiveForm::end();?>