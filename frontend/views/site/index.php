<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

$this->title = 'Головна';
?>
<!-- Header -->
<div class="container mt130">
    <div class="header">
        <h1>
            Маркетплейс
            шаблонів html листів
        </h1>
    </div>

    <div class="sear">
        <form class="form-inline">
            <input class="form-control" type="search" placeholder="Наприклад AMP" aria-label="Search">
            <button class="btn btn-search" type="submit"><img src="/frontend/web/uploads/img/icon/BigIconSearch.svg" alt=""></button>
            <div class="btn-search-center">
                <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent11.png" alt=""></button>
                <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent16.png" alt=""></button>
                <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent3.png" alt=""></button>
                <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent39.png" alt=""></button>
                <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent44.png" alt=""></button>
                <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent5.svg" alt=""></button>
            </div>

        </form>
    </div>
</div>


<!-- Карточки товаров  -->
<div class="container mt170">
    <h2>
        Тренди
    </h2>
    <div class="row gy-4 mt40">
        <div class="col-lg-3 col-md-6">

            <div class="cardm">
                <?= Html::a('<img class="cardm-img" src="/frontend/web/uploads/img/productimg/imgt1.png" alt="">' , ['/site/product']) ?>
                <div class="cardm-body">
                    <?= Html::a('<h5 class="cardm-title mb20">Black3Sales Email-Template + Online Builder</h5>' , ['/site/product']) ?>
                    <div class="contp">
                        <div class="cardm-price">
                            <p class="cardm-tprice">
                                $26
                            </p>
                            <p class="cardm-col">
                                36 продажів
                            </p>
                        </div>
                        <div class="cardm-btn">
                            <?= Html::a('<img src="/frontend/web/uploads/img/icon/IconBue.svg" alt="">' , ['/site/product'], ['class' => 'btn btn-primary', 'role' => 'button']) ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-6">
            <div class="cardm">
                <?= Html::a('<img class="cardm-img" src="/frontend/web/uploads/img/productimg/imgt1.png" alt="">' , ['/site/product']) ?>
                <div class="cardm-body">
                    <?= Html::a('<h5 class="cardm-title mb20">Black3Sales Email-Template + Online Builder</h5>' , ['/site/product']) ?>
                    <div class="contp">
                        <div class="cardm-price">
                            <p class="cardm-tprice">
                                $26
                            </p>
                            <p class="cardm-col">
                                36 продажів
                            </p>
                        </div>
                        <div class="cardm-btn">
                            <?= Html::a('<img src="/frontend/web/uploads/img/icon/IconBue.svg" alt="">' , ['/site/product'], ['class' => 'btn btn-primary', 'role' => 'button']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="cardm">
                <?= Html::a('<img class="cardm-img" src="/frontend/web/uploads/img/productimg/imgt1.png" alt="">' , ['/site/product']) ?>
                <div class="cardm-body">
                    <?= Html::a('<h5 class="cardm-title mb20">Black3Sales Email-Template + Online Builder</h5>' , ['/site/product']) ?>
                    <div class="contp">
                        <div class="cardm-price">
                            <p class="cardm-tprice">
                                $26
                            </p>
                            <p class="cardm-col">
                                36 продажів
                            </p>
                        </div>
                        <div class="cardm-btn">
                            <?= Html::a('<img src="/frontend/web/uploads/img/icon/IconBue.svg" alt="">' , ['/site/product'], ['class' => 'btn btn-primary', 'role' => 'button']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="cardm">
                <?= Html::a('<img class="cardm-img" src="/frontend/web/uploads/img/productimg/imgt1.png" alt="">' , ['/site/product']) ?>
                <div class="cardm-body">
                    <?= Html::a('<h5 class="cardm-title mb20">Black3Sales Email-Template + Online Builder</h5>' , ['/site/product']) ?>
                    <div class="contp">
                        <div class="cardm-price">
                            <p class="cardm-tprice">
                                $26
                            </p>
                            <p class="cardm-col">
                                36 продажів
                            </p>
                        </div>
                        <div class="cardm-btn">
                            <?= Html::a('<img src="/frontend/web/uploads/img/icon/IconBue.svg" alt="">' , ['/site/product'], ['class' => 'btn btn-primary', 'role' => 'button']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Количество  -->
<div class="container mt100">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <h3 class="sumh3">864</h3>
            <p class="sump">Розробників</p>
            <h3 class="sumh3">2654</h3>
            <p class="sump">Шаблонів</p>
        </div>
        <div class="col-lg-6 col-md-6">
            <h3 class="sumh3">15 459</h3>
            <p class="sump">Покупців</p>
            <h3 class="sumh3">175 954$</h3>
            <p class="sump">Виплачено</p>
        </div>
    </div>
</div>


<!-- Карточки товаров  -->
<div class="container mt170">
    <h2>
        Новинки
    </h2>
    <div class="row gy-4 mt40">
        <div class="col-lg-3 col-md-6">
            <div class="cardm">
                <?= Html::a('<img class="cardm-img" src="/frontend/web/uploads/img/productimg/imgt1.png" alt="">' , ['/site/product']) ?>
                <div class="cardm-body">
                    <?= Html::a('<h5 class="cardm-title mb20">Black3Sales Email-Template + Online Builder</h5>' , ['/site/product']) ?>
                    <div class="contp">
                        <div class="cardm-price">
                            <p class="cardm-tprice">
                                $26
                            </p>
                            <p class="cardm-col">
                                36 продажів
                            </p>
                        </div>
                        <div class="cardm-btn">
                            <?= Html::a('<img src="/frontend/web/uploads/img/icon/IconBue.svg" alt="">' , ['/site/product'], ['class' => 'btn btn-primary', 'role' => 'button']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="cardm">
                <?= Html::a('<img class="cardm-img" src="/frontend/web/uploads/img/productimg/imgt1.png" alt="">' , ['/site/product']) ?>
                <div class="cardm-body">
                    <?= Html::a('<h5 class="cardm-title mb20">Black3Sales Email-Template + Online Builder</h5>' , ['/site/product']) ?>
                    <div class="contp">
                        <div class="cardm-price">
                            <p class="cardm-tprice">
                                $26
                            </p>
                            <p class="cardm-col">
                                36 продажів
                            </p>
                        </div>
                        <div class="cardm-btn">
                            <?= Html::a('<img src="/frontend/web/uploads/img/icon/IconBue.svg" alt="">' , ['/site/product'], ['class' => 'btn btn-primary', 'role' => 'button']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="cardm">
                <?= Html::a('<img class="cardm-img" src="/frontend/web/uploads/img/productimg/imgt1.png" alt="">' , ['/site/product']) ?>
                <div class="cardm-body">
                    <?= Html::a('<h5 class="cardm-title mb20">Black3Sales Email-Template + Online Builder</h5>' , ['/site/product']) ?>
                    <div class="contp">
                        <div class="cardm-price">
                            <p class="cardm-tprice">
                                $26
                            </p>
                            <p class="cardm-col">
                                36 продажів
                            </p>
                        </div>
                        <div class="cardm-btn">
                            <?= Html::a('<img src="/frontend/web/uploads/img/icon/IconBue.svg" alt="">' , ['/site/product'], ['class' => 'btn btn-primary', 'role' => 'button']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="cardm">
                <?= Html::a('<img class="cardm-img" src="/frontend/web/uploads/img/productimg/imgt1.png" alt="">' , ['/site/product']) ?>
                <div class="cardm-body">
                    <?= Html::a('<h5 class="cardm-title mb20">Black3Sales Email-Template + Online Builder</h5>' , ['/site/product']) ?>
                    <div class="contp">
                        <div class="cardm-price">
                            <p class="cardm-tprice">
                                $26
                            </p>
                            <p class="cardm-col">
                                36 продажів
                            </p>
                        </div>
                        <div class="cardm-btn">
                            <?= Html::a('<img src="/frontend/web/uploads/img/icon/IconBue.svg" alt="">' , ['/site/product'], ['class' => 'btn btn-primary', 'role' => 'button']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Слайдер  -->
<div class="container mt170">
    <h2>
        Категорії
    </h2>
    <div class="row mt40">
        <div class="col">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">

                        <div class="slider-box">
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent1.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent2.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent3.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent4.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent60.png" alt=""></button>
                            <button class="btn-catigorie " type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent6.png" alt=""></button>

                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent7.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent8.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent9.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent10.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent11.png" alt=""></button>

                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent12.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent13.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent14.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent15.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent16.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent17.png" alt=""></button>

                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent18.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent19.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent20.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent21.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent22.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent23.png" alt=""></button>

                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent24.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent25.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent26.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent27.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent28.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent29.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent58.png" alt=""></button>
                        </div>

                    </div>

                    <div class="carousel-item" data-bs-interval="4000">

                        <div class="slider-box">
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent30.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent31.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent32.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent33.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent34.png" alt=""></button>
                            <button class="btn-catigorie " type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent35.png" alt=""></button>

                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent36.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent37.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent38.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent39.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent40.png" alt=""></button>

                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent41.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent42.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent43.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent44.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent45.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent45.png" alt=""></button>

                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent46.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent47.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent48.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent49.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent50.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent51.png" alt=""></button>

                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent52.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent53.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent54.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent55.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent56.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent57.png" alt=""></button>
                            <button class="btn-catigorie" type="submit"><img src="/frontend/web/uploads/img/searchicon/logoBigscomponent59.png" alt=""></button>
                        </div>

                    </div>



                </div>
                <div class="slider-next-prev">
                    <button class="carousel-control-pre" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-nex" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </div>
        </div>
    </div>

</div>

