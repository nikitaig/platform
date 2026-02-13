<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AnswerSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="answer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_answer') ?>

    <?= $form->field($model, 'test_solution_id') ?>

    <?= $form->field($model, 'question_id') ?>

    <?= $form->field($model, 'answer_choice_id') ?>

    <?= $form->field($model, 'point') ?>

    <?php // echo $form->field($model, 'text_answer') ?>

    <?php // echo $form->field($model, 'try') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
