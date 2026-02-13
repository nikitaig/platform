<?php

use app\models\TestSolution;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TestSolutionSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Test Solutions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-solution-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Test Solution', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_test_solution',
            'user_id',
            'test_id',
            'begin_at',
            'point',
            //'end_at',
            //'try',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TestSolution $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_test_solution' => $model->id_test_solution]);
                 }
            ],
        ],
    ]); ?>


</div>
