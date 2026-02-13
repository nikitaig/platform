<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TestSolution $model */

$this->title = $model->id_test_solution;
$this->params['breadcrumbs'][] = ['label' => 'Test Solutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="test-solution-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_test_solution' => $model->id_test_solution], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_test_solution' => $model->id_test_solution], [
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
            'id_test_solution',
            'user_id',
            'test_id',
            'begin_at',
            'point',
            'end_at',
            'try',
        ],
    ]) ?>

</div>
