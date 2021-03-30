<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="main-slider">
    <div class="container">
        <div class="cycle-slideshow"
                 data-cycle-fx=carousel
                 data-cycle-timeout=5000
                 data-cycle-carousel-visible=3
                 data-cycle-carousel-fluid=true
                 data-cycle-slides="div.item"
                 data-cycle-prev="#prev"
                 data-cycle-next="#next">
            <div class="item">
                <img src="/template/images/home/zakaz-pl-okna.jpg">
            </div>
            <div class="item">
                <img src="/template/images/home/zakaz-pl-okna2.jpg">
            </div>
        </div>
        <div class="arrows">
            <a class="left recommended-item-control" id="prev" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" id="next"  href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content">
                    <h3>О компании</h3>
                        <br/>
                    <p>ИП &laquo;Беккер&raquo; работает с 2001 года на рынке светопрозрачных конструкций и является одним из лидеров среди аналогичных производителей в Казахстане. ИП&laquo;Беккер&raquo; изготавливает и устанавливает пластиковые окна в городе Петропаловск, а также на территории Северо-Казахстанской области.</p>
                    <div class="more"><a href="/about/">Подробнее...</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="advantages">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="zag">
                        ПРЕИМУЩЕСТВА
                    </div>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-2">
                    <img src="/template/images/home/p1.png" alt="">
                    <p>15 лет <br>
                        на рынке</p>
                </div>
                <div class="col-sm-2">
                    <img src="/template/images/home/p2.png" alt="">
                    <p>Замер, доставка,<br>
                        вывоз мусора <br>
                        бесплатно!</p>
                </div>
                <div class="col-sm-2">
                    <img src="/template/images/home/p3.png" alt="">
                    <p>Москитная <br>
                        сетка в <br>
                        подарок</p>
                </div>
                <div class="col-sm-2">
                    <img src="/template/images/home/p4.png" alt="">
                    <p>Срок <br>
                        изготовления <br>
                        2-3 дня</p>
                </div>
                <div class="col-sm-2">
                    <img src="/template/images/home/p5.png" alt="">
                    <p>5 лет <br>
                        гарантии</p>
                </div>

                <div class="col-sm-1">
                </div>
            </div>
        </div>
    </div>
    <div class="clients">
        <div class="container">
            <div class="zag">
                НАШИ КЛИЕНТЫ
            </div>
            <div class="cycle-slideshow"
                 data-cycle-fx=carousel
                 data-cycle-timeout=5000
                 data-cycle-carousel-visible=4
                 data-cycle-carousel-fluid=true
                 data-cycle-slides="div.item2"
                 data-cycle-prev="#prev2"
                 data-cycle-next="#next2">
                <div class="item2">
                    <img src="/template/images/home/ak-zhelken.png">
                </div>
                <div class="item2">
                    <img src="/template/images/home/alua-stroy.png">
                </div>
                <div class="item2">
                    <img src="/template/images/home/esil.png">
                </div>
                <div class="item2">
                    <img src="/template/images/home/forte.png">
                </div>
                <div class="item2">
                    <img src="/template/images/home/halykbank.png">
                </div>
                <div class="item2">
                    <img src="/template/images/home/helios.png">
                </div>
                <div class="item2">
                    <img src="/template/images/home/kaspi.png">
                </div>
                <div class="item2">
                    <img src="/template/images/home/kassanova.png">
                </div>
                <div class="item2">
                    <img src="/template/images/home/kokshetauzholdary.png">
                </div>
                <div class="item2">
                    <img src="/template/images/home/vtb.png">
                </div>
            </div>
            <div class="arrows">
                <a class="left recommended-item-control" id="prev2" href="#recommended-item-carousel" data-slide="prev2">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" id="next2"  href="#recommended-item-carousel" data-slide="next2">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<?php include ROOT . '/views/layouts/worksSlider.php'; ?>
<?php include ROOT . '/views/layouts/footer.php'; ?>