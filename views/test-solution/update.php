<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TestSolution $model */

$this->title = 'Update Test Solution: ' . $model->id_test_solution;
$this->params['breadcrumbs'][] = ['label' => 'Test Solutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_test_solution, 'url' => ['view', 'id_test_solution' => $model->id_test_solution]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="test-solution-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
