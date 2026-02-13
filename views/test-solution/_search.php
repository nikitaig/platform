<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TestSolutionSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="test-solution-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_test_solution') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'test_id') ?>

    <?= $form->field($model, 'begin_at') ?>

    <?= $form->field($model, 'point') ?>

    <?php // echo $form->field($model, 'end_at') ?>

    <?php // echo $form->field($model, 'try') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
