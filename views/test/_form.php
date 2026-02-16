<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Category;

/** @var yii\web\View $this */
/** @var app\models\Test $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="enter_main">
    <h1 style='text-align:center;'>Новый тест</h1>
    <div class="enter">

<?php $form = ActiveForm::begin([
    'id' => 'my-form',
    'enableClientValidation' => false, // Отключаем клиентскую валидацию
    'validateOnSubmit' => false,
]); ?>
    <?= $form->field($model, 'name_test')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->identity->id_user])->label(false) ?>

        <?= $form->field($model, 'category_id')->dropDownList(
            ArrayHelper::map(Category::find()->all(),'id_category','category'), ['prompt' => 'Выберите категорию'])
        ?> 

    <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

    <label class="switch">
        <input type="checkbox" value='1' name='Test[anon]'>
        <span class="slider"></span>
    </label>

    <label class="switch">
        <input type="checkbox" value='1' name='Test[auto_mark]'>
        <span class="slider"></span>
    </label>

    <?= $form->field($model, 'try')->textInput() ?>

    <label class="switch">
        <input type="checkbox" value='1' name='Test[is_end]' id='is_end_check' onchange='toggleEndField(this)'>
        <span class="slider"></span>
    </label>

    
    <div id="end-container" style="<?= $model->is_timer ? '' : 'display: none;' ?>">
        <?= $form->field($model, 'end_at')->textInput([
            'maxlength' => true,
            'id' => 'end',
        ])->label('Дата окончания') ?>
    </div>


    <label class="switch">
        <input type="checkbox" value='1' name='Test[is_timer]' id='enable-extra-checkbox' onchange='toggleExtraField(this)'>
        <span class="slider"></span>
    </label>
    
    <div id="timer-container" style="<?= $model->is_timer ? '' : 'display: none;' ?>">
        <?= $form->field($model, 'timer')->textInput([
            'id' => 'timer',
        ])->label('Время выполнения') ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
</div>
<script>
function toggleExtraField(checkbox) {
    var container = document.getElementById('timer-container');
    var timer = document.getElementById('timer');
    
    if (checkbox.checked) {
        container.style.display = 'block';
    } else {
        container.style.display = 'none';
        timer.value = ''; // Очищаем поле при скрытии
    }
}
function toggleEndField(checkbox) {
    var container = document.getElementById('end-container');
    var end = document.getElementById('end');
    
    if (checkbox.checked) {
        container.style.display = 'block';
    } else {
        container.style.display = 'none';
        end.value = ''; // Очищаем поле при скрытии
    }
}
toggleExtraField('#enable-extra-checkbox');
toggleEndField('#is_end_check');
</script>