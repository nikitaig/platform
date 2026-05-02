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
        <span   for='text_question'>Текст вопроса</span>
        <textarea type="textarea" id="text_question" name="Question[text_question]" class="form-control mb-3" rows="4" required></textarea>
        <div class="check_box_box mb-3">
            <label class="switch">
                <input type="checkbox" value='1' name='Question[type_answer]'>
                <span class="slider"></span>
            </label>
            <p style="margin-bottom:0;">Несколько ответов</p>
        </div>  
        <div style="width:50%;">
            <span id="span_file-0"  for="question_file-0">Добавить файл</span>
            <input type="file" id="question_file-0" class="form-control" name="QuestionFile[0][question_file]">
        </div>
        <div class="boba mb-3"> <!-- Кнопка добавления нового поля для файла (через JavaScript) -->
            <button type="button" id="add-file" class="but_yellow">+ Добавить поле для файла</button>
        </div> 
        <?php for($i = 0; $i < 2; $i++):?>
                
                    <div class="check_box_box mb-3 w-100 " id="answer-block-<?php echo $i;?>">
                        <div style="width:50%;">
                            <span id="span_text-<?php echo $i;?>"  for="text_answer_choice-<?php echo $i;?>">Текст вопроса</span>
                            <input type="text" id="text_answer_choice-<?php echo $i;?>" class="form-control" name="AnswerChoice[<?php echo $i;?>][text_answer_choice]">
                        </div>
                        <div style="width:10%;">
                            <span id="span_point-<?php echo $i;?>"  for="point-<?php echo $i;?>">Цена вопроса</span>
                            <input type="text" id="point-<?php echo $i;?>" class="form-control" name="AnswerChoice[<?php echo $i;?>][point]">
                        </div>
                        <div class="boba">
                            <button type="button" id="remove-record-<?php echo $i;?>" class="but_yellow">Удалить</button>
                        </div> 
                    </div>  
                
        <?php endfor;?>
 

        
       <div class="boba mb-3"> <!-- Кнопка добавления новой записи (через JavaScript) -->
    <button type="button" id="add-record" class="but_yellow">+ Добавить вариант ответа</button>
    </div> 
        <div class="boba">
            <button type='submit' class='but_yellow'>Добавить</button>
        </div> 
    </form>
       


    </div>

</div>




<!-- JavaScript для динамического добавления записей -->
<script>
let recordCount = 2;
let realCount = 2;
let fileCount = 1;
for(let i = 0; i < 2; i++){
    document.getElementById('remove-record-' + i).addEventListener('click', function() {
                //console.log(lol);
        if( realCount > 1){
            var id_el = 'answer-block-' + i;
            document.getElementById('answer-block-' +  i).remove();    
            realCount--;
        }
    });
}

document.getElementById('add-record').addEventListener('click', function() {
    if( realCount < 10){
        const container = document.createElement('div');
        
        container.innerHTML = `
                        <div class="check_box_box mb-3 w-100 " id="answer-block-${recordCount}">
                            <div style="width:50%;">
                                <span id="span_text-${recordCount}" for="text_answer_choice-${recordCount}">Текст вопроса</span>
                                <input type="text" id="text_answer_choice-${recordCount}" class="form-control" name="AnswerChoice[${recordCount}][text_answer_choice]">
                            </div>
                            <div style="width:10%;">
                                <span id="span_point-${recordCount}" for="point-${recordCount}">Цена вопроса</span>
                                <input type="text" id="point-${recordCount}" class="form-control" name="AnswerChoice[${recordCount}][point]">
                            </div>
                            <div class="boba">
                                <button type="button" id="remove-record-${recordCount}" class="but_yellow">Удалить</button>
                            </div> 
                        </div>  
        `;
            var id_x = 'remove-record-' + recordCount;
            const addButton = document.getElementById('add-record');
            addButton.parentNode.insertBefore(container, addButton);
            let lol = recordCount;
            document.getElementById('remove-record-' + recordCount).addEventListener('click', function() {
                //console.log(lol);
                if( realCount > 1){
                    var id_el = 'answer-block-' + lol;
                    document.getElementById('answer-block-' +  lol).remove();    
                    realCount--;
                }
            });
        // Вставляем перед кнопкой добавления
   
        recordCount++;
        realCount++;
    }
});


document.getElementById('add-file').addEventListener('click', function() {
    if( fileCount < 3){
        const container = document.createElement('div');
        
        container.innerHTML = `
                <div style="width:50%;">
                    <span id="span_file-${fileCount}'"  for="question_file-${fileCount}">Добавить файл</span>
                    <input type="file" id="question_file-${fileCount}" class="form-control" name="QuestionFile[${fileCount}][question_file]">
                </div>
        `;
            const addButton = document.getElementById('add-file');
            addButton.parentNode.insertBefore(container, addButton);
        // Вставляем перед кнопкой добавления
   
        fileCount++;
    }
});

</script>
