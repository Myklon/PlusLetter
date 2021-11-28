<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;


$this->title = 'Категории';
?>
<link rel="stylesheet" href="/frontend/web/css/categorie.css">
<!-- Карточки товаров  -->
<div class="container mt170">
    <h2>
        Всі шаблони
    </h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Головна</a></li>
            <li class="breadcrumb-item active" aria-current="page">Всі шаблони</li>
        </ol>
    </nav>

    <div class="row gy-4 mt40">


        <div class="col-lg-3 col-md-12">
            <h4>Ціна</h4>
            <form class="form-price-search">
                <input type="text" placeholder="$ 15"  class="form-control form-price-search-1" aria-label="Dollar amount (with dot and two decimal places)">
                <input type="text" placeholder="$ 150"  class="form-control form-price-search-2" aria-label="Dollar amount (with dot and two decimal places)">
                <button type="submit" class="btn btn-price-search">
                    <img src="/frontend/web/uploads/img/icon/pricesearch.svg" alt="">
                </button>
            </form>


            <div class="accordion-item">
                <h4 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h4>Теми</h4>
                    </button>
                </h4>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Бізнес, послуги
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Мода та краса
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                ІТ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Медицина
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Освіта
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Розваги, ігри, казіно
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Спорт
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Туризм
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Ресторани
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Дизайн
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Праздники
                            </label>
                        </div>




                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h4 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h4>Сервіси розсилки</h4>
                    </button>
                </h4>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                eSputnik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                SendSay
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                SendSay
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Unisender
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                MailChimp
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Sendinblue
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                SendPulse
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                GetResponse
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Pipedrive
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Сonvertkit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Сonstantcontact
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Mandrill
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                BenchMark
                            </label>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h4 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h4>Адаптивність</h4>
                    </button>
                </h4>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Так
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Ні
                            </label>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h4 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <h4>Поштові клієнти</h4>
                    </button>
                </h4>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Gmail
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Apple Mail
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                AOL Mail
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Ukr.net
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Yahoo
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Mozilla Thunderbird
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Mail.ru
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Yandex Mail
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Outlook
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Outlook Web
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Outlook 2007
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Outlook 2010
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Outlook 2019
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Gmail for Apple
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Gmail App for Android
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Gmail Web
                            </label>
                        </div>


                    </div>
                </div>
            </div>

        </div>



        <div class="col-lg-9 col-md-12">
            <div class="row gy-4">



                <div class="col-lg-4 col-md-6">

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

                <div class="col-lg-4 col-md-6">

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

                <div class="col-lg-4 col-md-6">

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


                <div class="col-lg-4 col-md-6">

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

                <div class="col-lg-4 col-md-6">

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

                <div class="col-lg-4 col-md-6">

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




    </div>
</div>





<div class="container mt60">
    <div class="row">
        <div class="col-lg-3 col-md-6"></div>


        <div class="col-lg-9">


            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link-end-next" href="#" aria-label="Previous">
                            <span aria-hidden="true"><img src="/frontend/web/uploads/img/icon/endPage.svg" alt=""></span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link page-link-active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link-end-next" href="#" aria-label="Next">
                            <span aria-hidden="true"><img src="/frontend/web/uploads/img/icon/nextPage.svg" alt=""></span>
                        </a>
                    </li>
                </ul>
            </nav>


        </div>
    </div>

</div>