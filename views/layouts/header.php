<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link rel="stylesheet" href="/template/css/slick.css">
        <link rel="stylesheet" href="/template/css/slick-theme.css">
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">


        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->
    <body>
    <div style="width: 100%;height: 5px;background: #005ffb;padding-top: 0;"></div>
                <div class="header-middle"><!--header-middle-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5" style="border-right: solid 1px rgba(204, 204, 204, 0.75);margin-top: 20px;margin-bottom: 15px;">
                                <div class="logo pull-left">
                                    <a href="/"><img src="/template/images/home/logo.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-sm-3" style="margin-top: 20px; border-right: solid 1px rgba(204, 204, 204, 0.75);">
                                <div class="menu_phone">
                                    <div class='menu_phone_wrap'>
                                        <div class="phone_icon">
                                        </div>
                                        <ul class="phone_numbers">
                                            <li style="display:block;"><span class="kodg">+7 (7152)</span><span class="nomer_t"><b>25-25-83</b></span></li>
                                            <li style="display:block;"><span class="kodg">+7 (7152)</span><span class="nomer_t"><b>35-25-33</b></span></li>
                                        </ul>
                                    </div>
                                    <div class="selected" style="display: block; float: left; width: 180px;">
                                        <div style="float: right;">
                                            <span>Город:</span><span><b> Петропавловск</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin-top: 20px;">
                                <div class="menu_call">
                                    <div class="menu_call_icon">
                                    </div>
                                    <div class="menu_call_main">
                                        <div class="menu_call_froze">
                                            <a href="/measurer/"></a>
                                        </div>
                                        <div class="menu_call_calc">
                                            <a href="/calculator/"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/header-middle-->

                <nav class="mainNav">
                    <div class="container">
                        <ul class="main_menu">
                            <li><a href="/">Главная</a></li>
                            <li><a href="/about/">О компании</a></li>
                            <li><a href="/catalog/">Продукция</a></li>
                            <li><a href="/services/">Услуги</a></li>
                            <li><a href="/galery/">Фотогалерея</a></li>
                            <li><a href="/contacts/">Контакты</a></li>
                            <?php if (User::isGuest()): ?>
                            <li><a href="/user/register/">Регистрация</a></li>
                            <li><a href="/user/login/">Вход</a></li>
                            <?php else: ?>
                            <li><a href="/cabinet/">Аккаунт</a></li>
                            <li><a href="/user/logout/">Выход</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
