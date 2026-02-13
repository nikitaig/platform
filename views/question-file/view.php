<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\QuestionFile $model */

$this->title = $model->id_question_file;
$this->params['breadcrumbs'][] = ['label' => 'Question Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="question-file-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_question_file' => $model->id_question_file], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_question_file' => $model->id_question_file], [
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
            'id_question_file',
            'question_id',
            'question_file',
        ],
    ]) ?>

</div>
