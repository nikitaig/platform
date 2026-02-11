<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <div class="header_1">
        <div class="fast_menu logo_menu">
            <img class="logo" src="/assets/images/1.png"/> 
        </div>
        <div class="fast_menu small_menu">    
                <svg id="menu" onclick="drop_menu()" fill="rgb(255, 191, 0)" height="60%" aspect-ratio="1/1" viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="Glyph" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M26,16c0,1.104-0.896,2-2,2H8c-1.104,0-2-0.896-2-2s0.896-2,2-2h16C25.104,14,26,14.896,26,16z" id="XMLID_314_"/>
                <path d="M26,8c0,1.104-0.896,2-2,2H8c-1.104,0-2-0.896-2-2s0.896-2,2-2h16C25.104,6,26,6.896,26,8z" id="XMLID_315_"/>
                <path d="M26,24c0,1.104-0.896,2-2,2H8c-1.104,0-2-0.896-2-2s0.896-2,2-2h16C25.104,22,26,22.896,26,24z" id="XMLID_316_"/></svg>
                         
<div class='main_menu hide_menushka' id="drop_menu">
<div class='menu_out' onclick='drop_menu()'> <svg width="2rem" height="2rem" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M20 20L4 4.00003M20 4L4.00002 20" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
</svg> </div>  
 <div class='menu_punks'>
    <a id='punk1' href='/' class='menu_punks_other'><p>Главная</p></a>
    <a id='punk2' href='/site/contact' class='menu_punks_other'><p>Все тесты</p></a>
    <a id='punk3' href='/site/about' class='menu_punks_other'><p>Подписки</p></a>
    <a id='punk4' href='/site/login' class='menu_punks_other'><p>Мои тесты</p></a>
    <a id='punk5' href='/user/index' class='menu_punks_other'><p>Найти друзей</p></a>
    <a id='punk6' href='/user/view?id_user=1' class='menu_punks_other'><p>Пользователи</p></a>
    <a id='punk7' href='/user/create' class='menu_punks_other'><p>Правила пользования сайтом</p></a>
    <a id='punk8' href='/user/view?id_user=1' class='menu_punks_other'><p>Мои решения</p></a>
    <a id='punk9' href='/user/update?id_user=1' class='menu_punks_other'><p>Создать тест</p></a>
    <!--
    <a id='punk6' href='/user/view?id_user=1' class='menu_punks_other'><p>Пользователи</p></a>-->
 </div>

</div>
    </div>
        
        </div>




</header>



<?php
//<header id="header">




    
    // NavBar::begin([
    //     'brandLabel' => Yii::$app->name,
    //     'brandUrl' => Yii::$app->homeUrl,
    //     'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
    // ]);
    // echo Nav::widget([
    //     'options' => ['class' => 'navbar-nav'],
    //     'items' => [
    //         ['label' => 'Home', 'url' => ['/site/index']],
    //         ['label' => 'About', 'url' => ['/site/about']],
    //         ['label' => 'Contact', 'url' => ['/site/contact']],
    //         Yii::$app->user->isGuest
    //             ? ['label' => 'Login', 'url' => ['/site/login']]
    //             : '<li class="nav-item">'
    //                 . Html::beginForm(['/site/logout'])
    //                 . Html::submitButton(
    //                     'Logout (' . Yii::$app->user->identity->username . ')',
    //                     ['class' => 'nav-link btn btn-link logout']
    //                 )
    //                 . Html::endForm()
    //                 . '</li>'
    //     ]
    // ]);
    // NavBar::end();
    
//</header>
?>
<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; My Company <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
<script>
const pathname = window.location.pathname;
for(let i = 1; i < 10; i++){
    let punk = document.getElementById('punk'+i);
    const hrefValue = punk.getAttribute('href');

   let bob =  hrefValue.split('?')[0];
    if(bob == pathname){        
        const block = document.createElement('div');
        block.className = 'mark_page';
        punk.classList.toggle("menu_punks_other");
        punk.classList.toggle("menu_punks_now");
        punk.appendChild(block);
    }
}
    function drop_menu(){
        let drop_menu = document.getElementById('drop_menu');
        drop_menu.classList.toggle("drop_menushka");
        drop_menu.classList.toggle("hide_menushka");
    }



</script>
</html>
<?php $this->endPage() ?>
