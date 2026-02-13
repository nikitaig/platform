<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\AnswerChoice $model */

$this->title = $model->id_answer_choice;
$this->params['breadcrumbs'][] = ['label' => 'Answer Choices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="answer-choice-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_answer_choice' => $model->id_answer_choice], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_answer_choice' => $model->id_answer_choice], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_answer_choice',
            'question_id',
            'text_answer_choice',
            'point',
        ],
    ]) ?>

</div>
