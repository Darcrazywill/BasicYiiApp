<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Форма обратной связи';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="feedback-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if ($success): ?>
        <div class="alert alert-success">
            <h3>Спасибо, <?= Html::encode($submittedData['name']) ?>! Ваше сообщение отправлено.</h3>
            <p><strong>Email:</strong> <?= Html::encode($submittedData['email']) ?></p>
            <p><strong>Сообщение:</strong> <?= Html::encode($submittedData['message']) ?></p>
        </div>
    <?php endif; ?>

    <div class="feedback-form">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>

        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>