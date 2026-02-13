<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Answer $model */

$this->title = $model->id_answer;
$this->params['breadcrumbs'][] = ['label' => 'Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="answer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_answer' => $model->id_answer], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_answer' => $model->id_answer], [
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
            'id_answer',
            'test_solution_id',
            'question_id',
            'answer_choice_id',
            'point',
            'text_answer:ntext',
            'try',
        ],
    ]) ?>

</div>
