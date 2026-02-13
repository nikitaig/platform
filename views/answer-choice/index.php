<?php

use app\models\AnswerChoice;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AnswerChoiceSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Answer Choices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="answer-choice-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Answer Choice', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_answer_choice',
            'question_id',
            'text_answer_choice',
            'point',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AnswerChoice $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_answer_choice' => $model->id_answer_choice]);
                 }
            ],
        ],
    ]); ?>


</div>
