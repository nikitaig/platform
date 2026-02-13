<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TestSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="test-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_test') ?>

    <?= $form->field($model, 'name_test') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'create_at') ?>

    <?= $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'timer') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'anon') ?>

    <?php // echo $form->field($model, 'auto_mark') ?>

    <?php // echo $form->field($model, 'try') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
