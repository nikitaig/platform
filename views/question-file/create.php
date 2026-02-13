<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\QuestionFile $model */

$this->title = 'Create Question File';
$this->params['breadcrumbs'][] = ['label' => 'Question Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-file-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
