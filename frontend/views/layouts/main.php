<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/frontend/web/css/general.css">
    <link rel="stylesheet" href="/frontend/web/css/index.css">



    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>

    <title><?= Html::encode($this->title) ?></title>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Menu -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">

            <?= Html::a(Html::img('/frontend/web/uploads/img/pluseletter.svg') , ['/site/index'], ['class' => 'navbar-brand']) ?>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown active">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/frontend/web/uploads/img/hamburger.svg" alt="">Всі Шаблони
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li> <?= Html::a('Теми', ['site/categorie'], ['class' => 'dropdown-item']) ?></li>
                            <li> <?= Html::a('Сервіси розсилки', ['site/categorie'], ['class' => 'dropdown-item']) ?></li>
                            <li> <?= Html::a('Поштові клієнти', ['site/categorie'], ['class' => 'dropdown-item']) ?></li>
                            <li> <?= Html::a('Стати автором', ['site/signup'], ['class' => 'dropdown-item']) ?></li>
                            <li> <?= Html::a('Звязатися з нами', ['#'], ['class' => 'dropdown-item']) ?></li>
                            <li> <?= Html::a('Допомога', ['#'], ['class' => 'dropdown-item']) ?></li>
                            <li> <?= Html::a('База знань', ['#'], ['class' => 'dropdown-item']) ?></li>
                        </ul>
                    </li>
                </ul>

                <?php
                if (Yii::$app->user->isGuest) {
                    echo Html::a('<img src="/frontend/web/uploads/img/IconWwallet.svg" alt="">Стати продавцем', ['/site/signup'], ['class' => 'btn btn-menu', 'role' => 'button']) ;
                } else {

                    $menuItems[] = '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>';
                }
                ?>

                <a class="menu-icon" href="#">
                    <div class="cart-menu">
                        <img src="/frontend/web/uploads/img/shopping_cart_black.svg" alt="">
                        <div class="cart-items">1</div>
                    </div>
                </a>


                <div class="menu-icon log-out" href="#">

                    <a href="#">
                        <img src="/frontend/web/uploads/img/person_outline_black.svg" alt="">
                    </a>
                    <?php
                    if (Yii::$app->user->isGuest) {
                        echo Html::a('Вхід', ['/site/login']) ;}
                    ?>
                </div>
                <?php
                if (Yii::$app->user->isGuest) {
                } else {
                    echo Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Вийти (' . Yii::$app->user->identity->username . ')',
                            ['role' => 'button', 'class'=>'btn']
                        )
                        . Html::endForm();
                }
                ?>
            </div>
        </div>
    </nav>
</div>

<div>
    <?= $content ?>
</div>

<footer class="container mt130">
    <div class="row">
        <div class="col-lg-6 col-md-6 social-link">
            <a href="#">
                Facebook
            </a>
            <a href="#">
                Twiter
            </a>
            <a href="#">
                Instagram
            </a>
            <a href="#">
                Telegram
            </a>
        </div>
        <div class="col-lg-3 col-md-3 footer-link">
            <h5>
                Підтримка
                </h3>
                <a href="#">
                    База знань
                </a>
                <a href="#">
                    Допомога
                </a>
        </div>
        <div class="col-lg-3 col-md-3 footer-link">
            <h5>
                Для авторів
                </h3>
                <?= Html::a('Стати автором', ['site/signup']) ?>

                <a href="#">
                    Звязатися з нами
                </a>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
