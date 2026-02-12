<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="enter_main">
    <h1 style='text-align:center;'>Регистрация</h1>
    <div class="enter">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'avatar')->fileInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?>

        <div class="form-group boba">
            <?= Html::submitButton('Зарегистрироваться', ['class' => 'but_yellow']) ?>
        </div>
        <p style='font-size:0.9rem; margin-top:2rem;'>Уже есть аккаунт?</p>
        <a class='text_ref' href='/site/login'>Войти</a>
        <?php ActiveForm::end(); ?>

    </div>
</div>
