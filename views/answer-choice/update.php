<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AnswerChoice $model */

$this->title = 'Update Answer Choice: ' . $model->id_answer_choice;
$this->params['breadcrumbs'][] = ['label' => 'Answer Choices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_answer_choice, 'url' => ['view', 'id_answer_choice' => $model->id_answer_choice]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="answer-choice-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
