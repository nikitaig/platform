<?php

use app\models\QuestionFile;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\QuestionFileSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Question Files';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-file-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Question File', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_question_file',
            'question_id',
            'question_file',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, QuestionFile $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_question_file' => $model->id_question_file]);
                 }
            ],
        ],
    ]); ?>


</div>
