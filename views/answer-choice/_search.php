<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AnswerChoiceSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="answer-choice-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_answer_choice') ?>

    <?= $form->field($model, 'question_id') ?>

    <?= $form->field($model, 'text_answer_choice') ?>

    <?= $form->field($model, 'point') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
