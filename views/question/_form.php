<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Question $model */
/** @var yii\widgets\ActiveForm $form */
?>


<div class="enter_main">
    <div class="enter" style='width:90%'>
    <h2>Новый вопрос</h2>


    <form <?php echo "action='/question/create?id_test=$id_test'";?> method="POST">
<input type="hidden" <?php echo 'value=' . \Yii::$app->getSecurity()->generateRandomString(50);?> name='_csrf'>
        <span class="" for='text_question'>Текст вопроса</span>
        <textarea type="textarea" id="text_question" name="Question[text_question]" class="form-control mb-3" rows="4" required></textarea>
        <div class="check_box_box mb-3">
            <label class="switch">
                <input type="checkbox" value='1' name='Question[poly_answer]'>
                <span class="slider"></span>
            </label>
            <p style="margin-bottom:0;">Несколько ответов</p>
        </div>  

        <div class="check_box_box mb-3 w-100 ">
            <div style="width:50%;">
                <span class="" for='text_answer_choice-0'>Текст вопроса</span>
                <input type="text" id='text_answer_choice-0' class='form-control' name='AnswerChoice[0][text_answer_choice]'>
            </div>
            <div style="width:10%;">
                <span class="" for='point-0'>Текст вопроса</span>
                <input type="text" id='point-0' class='form-control' name='AnswerChoice[0][point]'>
            </div>
        </div>   


                <div class="check_box_box mb-3 w-100 ">
            <div style="width:50%;">
                <span class="" for='text_answer_choice-1'>Текст вопроса</span>
                <input type="text" id='text_answer_choice-1' class='form-control' name='AnswerChoice[1][text_answer_choice]'>
            </div>
            <div style="width:10%;">
                <span class="" for='point-1'>Текст вопроса</span>
                <input type="text" id='point-1' class='form-control' name='AnswerChoice[1][point]'>
            </div>
        </div>   


                <div class="check_box_box mb-3 w-100 ">
            <div style="width:50%;">
                <span class="" for='text_answer_choice-2'>Текст вопроса</span>
                <input type="text" id='text_answer_choice-2' class='form-control' name='AnswerChoice[2][text_answer_choice]'>
            </div>
            <div style="width:10%;">
                <span class="" for='point-2'>Текст вопроса</span>
                <input type="text" id='point-2' class='form-control' name='AnswerChoice[2][point]'>
            </div>
        </div>   
        <div class="boba">
            <button type='submit' class='but_yellow'>Добавить</button>
        </div> 
    </form>
       


    </div>

</div>
