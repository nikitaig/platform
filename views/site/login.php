<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Вход';
?>
<div class="site-login">



<div class="enter_main" style=''>
    <h1 style='text-align:center;'><?= Html::encode($this->title) ?></h1>
    <div class="enter">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            
        <div class="form-group boba">
                    <?= Html::submitButton('Войти', ['class' => 'but_yellow', 'name' => 'login-button']) ?>
            </div>
        <p style='font-size:0.9rem; margin-top:2rem;'>Нет аккаунта?</p>
        <a class='text_ref' href='/user/create'>Зарегистрироваться</a>

            <?php ActiveForm::end(); ?>



        </div>
    </div>



</div>
