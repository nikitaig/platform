<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\QuestionFile $model */

$this->title = 'Update Question File: ' . $model->id_question_file;
$this->params['breadcrumbs'][] = ['label' => 'Question Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_question_file, 'url' => ['view', 'id_question_file' => $model->id_question_file]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="question-file-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
