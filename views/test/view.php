<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Test $model */

$this->title = $model->id_test;
$this->params['breadcrumbs'][] = ['label' => 'Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="test-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_test' => $model->id_test], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_test' => $model->id_test], [
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
            'id_test',
            'name_test',
            'user_id',
            'create_at',
            'category_id',
            'timer',
            'image',
            'anon',
            'auto_mark',
            'try',
        ],
    ]) ?>

</div>
