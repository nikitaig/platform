<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Question $model */

$this->title = 'Новый вопрос';
?>
<div class="question-create">

    <?= $this->render('_form', [
        'model' => $model,
        'id_test' => $id_test,
    ]) ?>

</div>
