<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AnswerChoice $model */

$this->title = 'Create Answer Choice';
$this->params['breadcrumbs'][] = ['label' => 'Answer Choices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="answer-choice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
