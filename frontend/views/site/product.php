<?php

/* @var $this yii\web\View */



$this->title = 'Продукт';

?>
<link rel="stylesheet" href="/frontend/web/css/product.css">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="btn-close-m" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <nav>
                    <div class="tabs-center-content">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <!-- Иконки переключения -->
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.7502 2.5H4.25024C2.87524 2.5 1.75024 3.625 1.75024 5V20C1.75024 21.375 2.87524 22.5 4.25024 22.5H13.0002V25H10.5002V27.5H20.5002V25H18.0002V22.5H26.7502C28.1252 22.5 29.2502 21.375 29.2502 20V5C29.2502 3.625 28.1252 2.5 26.7502 2.5ZM26.7502 20H4.25024V5H26.7502V20Z"/>
                                </svg>

                            </button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.7498 1.2625L9.24976 1.25C7.87476 1.25 6.74976 2.375 6.74976 3.75V26.25C6.74976 27.625 7.87476 28.75 9.24976 28.75H21.7498C23.1248 28.75 24.2498 27.625 24.2498 26.25V3.75C24.2498 2.375 23.1248 1.2625 21.7498 1.2625ZM21.7498 23.75H9.24976V6.25H21.7498V23.75Z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </nav>
                <!-- демо пк и телефон -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="demo-img demo-pc">
                            <img src="/frontend/web/uploads/img/productdemo/pc.jpg" alt="">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="demo-img demo-phone">
                            <img src="/frontend/web/uploads/img/productdemo/phone.jpg" alt="">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<!-- описание  -->
<div class="container mt130">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Головна</a></li>
            <li class="breadcrumb-item"><a href="#">Дизайн</a></li>
            <li class="breadcrumb-item active" aria-current="page">Шаблон</li>
        </ol>
    </nav>

    <div class="row gy-4 mt40">
        <div class="col-lg-12 column-reverse">
            <div class="row gy-4">



                <div class="col-lg-6 col-md-12">

                    <div class="product-preview">
                        <div id="product-preview-hover">
                            <div class="demo">

                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="/frontend/web/uploads/img/productpreview/demo.svg" alt="">
                                </a>

                            </div>
                        </div>

                        <div id="product-preview-img">
                            <img src="/frontend/web/uploads/img/productpreview/preview01.jpg" alt="">
                        </div>
                    </div>


                    <div class="description-img">
                        <img src="/frontend/web/uploads/img/productdescription/image1.jpg" alt="">
                        <img src="/frontend/web/uploads/img/productdescription/image2.jpg" alt="">
                    </div>

                    <div class="description-text">
                        <p>
                            Шаблони електронної комерції, які допоможуть вам створити цифровий магазин зі всіма необхідними сторінками, чіткою структурою та привабливим дизайном. Від найголовнішої сторінки та каталогу з усіма продуктами до форм входу та сторінок стану помилок. Кожна сторінка та окремий елемент мають код HTML та CSS. Просто вставте свій контент та швидко отримайте магазин мрії.
                        </p>
                    </div>

                </div>



                <div class="col-lg-6 col-md-12">


                    <h3>
                        Alpha Email-Template + Online Builder
                    </h3>

                    <div class="product-information">
                        <div class="product-license">
                            <h4>Інформація</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Одноразове використання
                                </label>
                                <div class="license-price">
                                    $32
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Підтримка 12 місяців
                                </label>
                                <div class="license-price">
                                    $89
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-buy" href="#" role="button">
                            <img src="/frontend/web/uploads/img/icon/IconBue.svg" alt="">Купити
                        </a>
                        <a class="btn btn-demo" href="#" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Переглянути демо
                        </a>

                        <h4>Інформація</h4>
                        <p>54 продажів</p>
                        <h4>Адаптивність на мобільних пристроях </h4>
                        <p>Так</p>
                        <h4>Сервіси розсилки</h4>
                        <p>MailChimp,  Unisender, SendSay, eSputnik, Pipedrive, GetResponse</p>
                        <h4>Сумісність поштових систем</h4>
                        <p>Gmail,  Apple Mail, Mozilla Thunderbird, Outlook Web, Outlook 2010, Outlook 360, AOL Mail, Ukr.net, Yahoo</p>
                        <h4>Пов'язані теми</h4>
                        <p>ІТ,  Бізнес, послуги,  Дизайн,  Освіта</p>
                    </div>



                </div>





            </div>
        </div>
    </div>







</div>