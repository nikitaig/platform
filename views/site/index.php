<?php

/** @var yii\web\View $this */

$this->title = 'Главная';
?>

<div class="enter_main">
    <div class='test_card_web'>


    <div class='test_card'>
            <img src='/assets/images/test_default.png' class='test_card_photo'/>
        
        <div class='test_card_content'>
            <div>
                <p id='card_title0' class='test_card_title'>Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? 
                    Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? 
                </p>
                <p id='card_author0' class='test_card_text'>Автор: Григорий  Лепс Лепс Лепс </p>

                <p class='test_card_text'>Без времени </p>
                <p class='test_card_text'>17 вопросов</p>
            </div>
            <div>
                <button class='but_yellow'>Пройти тест</button>
            </div>
        </div>
    </div>
    <div class='test_card'>
            <img src='/assets/images/гуси.png' class='test_card_photo'/>
        
        <div class='test_card_content'>
            <div>
                <p id='card_title1' class='test_card_title'>Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? 
                    Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? 
                </p>
                <p id='card_author1' class='test_card_text'>Автор: Григорий  Лепс Лепс Лепс </p>

                <p class='test_card_text'>Без времени </p>
                <p class='test_card_text'>17 вопросов</p>
            </div>
            <div>
                <button class='but_yellow'>Пройти тест</button>
            </div>
        </div>
    </div>

    <div class='test_card'>
            <img src='/assets/images/гуси.png' class='test_card_photo'/>
        
        <div class='test_card_content'>
            <div>
                <p id='card_title2' class='test_card_title'>Какой тыртофель? 
                </p>
                <p id='card_author2' class='test_card_text'>Автор: Григорий  Лепс Лепс Лепс </p>

                <p class='test_card_text'>Без времени </p>
                <p class='test_card_text'>17 вопросов</p>
            </div>
            <div>
                <button class='but_yellow'>Пройти тест</button>
            </div>
        </div>
    </div>

    <div class='test_card'>
            <img src='/assets/images/гусь.png' class='test_card_photo'/>
        <div class='test_card_content'>
            <div>
                <p id='card_title3' class='test_card_title'>Какой тыртофель? 
                </p>
                <p id='card_author3' class='test_card_text'>Автор: Григорий  Лепс Лепс Лепс </p>

                <p class='test_card_text'>Без времени </p>
                <p class='test_card_text'>17 вопросов</p>
            </div>
             <div>
                <button class='but_yellow'>Пройти тест</button>
            </div>
        </div>
    </div>

    <div class='test_card'>
            <img src='/assets/images/test_default.png' class='test_card_photo'/>     
        <div class='test_card_content'>
            <div>
                <p id='card_title4' class='test_card_title'>Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? 
                    Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? Какой ты картофель? 
                </p>
                <p id='card_author4' class='test_card_text'>Автор: Григорий ЛепсЛепс Лепс Лепс Лепс Лепс </p>

                <p class='test_card_text'>Без времени </p>
                <p class='test_card_text'>17 вопросов</p>
            </div>
            <div>
                <button class='but_yellow'>Пройти тест</button>
            </div>
        </div>
    </div>

            <script>
                for(let i = 0; i < 5; i++ ){
                    let text = document.getElementById('card_title'+i).textContent;
                    if(text.length > 55){
                        let text2 = text.slice(0,50) + '...';
                        document.getElementById('card_title'+i).textContent = text2;
                    }

                    let text_1 = document.getElementById('card_author'+i).textContent;
                    if(text_1.length > 27){
                        let text_12 = text_1.slice(0,27) + '...';
                        document.getElementById('card_author'+i).textContent = text_12;
                    }
                }

            </script>


</div>

</div>


