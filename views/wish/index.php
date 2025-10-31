<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Список желаний';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="wish-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="wish-form">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'wish')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton('Добавить желание', ['class' => 'btn btn-primary']) ?>  <!--юзаем бутстрап -->
        </div>

        <?php ActiveForm::end(); ?>
    </div>

    <?php if (!empty($wishes)): ?>
        <h2>Ваши желания:</h2>
        <ul>
            <?php foreach ($wishes as $wish): ?>
                <li><?= Html::encode($wish) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Список желаний пуст. Добавьте первое желание!</p>
    <?php endif; ?>
</div>