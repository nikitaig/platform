<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Test $model */

$this->title = 'Новый тест';
?>
<div class="test-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
