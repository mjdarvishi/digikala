<html>
<head>

    <base href="<?=URL?>">
    <meta charset="UTF-8">
    <title>فروشگاه اینترنتی دی جی کالا</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/flipTimer.css">
    <script src="js/jquery.flipTimer.js"></script>
    <style>
        .color_font {
            color: #fff !important;
        }

        .black {
            color: #111111;
            font-family: yekan;
        }


        #menu_top > ul > li > ul > li {
            float: right;

        }

        #menu_top > ul {
            position: relative;
            padding: 0;
        }

        #menu_top > ul > li > ul {
            position: absolute;
            right: 0;
            background: white;
            width: 1200px;
            height: 40px;
            padding: 0;
            box-shadow: 1px 3px 4px #ccc;
            display: none;

        }

        #menu_top > ul > li > ul > li > a {
            padding: 5px 20px;
            display: block;
        }

        #menu_top > ul > li > a {
            padding: 0 20px;
            display: block;;
            height: 40px;
            line-height: 35px;

        }

        ul {
            margin: 0;
        }

        .top_menu_tre_cloum > ul {
            padding-right: 18px;
        }

        .top_menu_tre_cloum > ul > li {
            padding-right: 15px;
        }

        .top_menu_tre_cloum > ul > li:first-child {
            padding-right: 5px;
            color: #1d11ab;
        }




        .activeMenu > a {
            color: #8e1a16;
            box-shadow: 0 -1px 3px #eee;

        }

        .fontsm {
            font-size: 10pt
        }

        .fontsmvery {
            font-size: 7pt
        }

        .fontmd {
            font-size: 11.3pt
        }

        .fontlg {
            font-size: 12.3pt
        }

        .yekan {
            font-family: yekan;
            color: rgba(59, 62, 61, 0.42);
        }

        .yekan2 {
            font-family: yekan;
        }

        @font-face {
            font-family: 'yekan';
            src: url(<?=URL1?>fonts/Yekan.eot);
            src: url(<?=URL1?>fonts/Yekan.eot?#iefix) format("embedded-opentype"), url(<?=URL1?>fonts/Yekan.woff) format("woff"), url(<?=URL1?>fonts/Yekan.ttf) format("truetype"), url(<?=URL1?>fonts/Yekan.svg#BYekan) format("svg");
            font-weight: normal;
            font-style: normal
        }

        #header {
            width: 1200px;
            height: 100px;
            margin: 0 auto;
            padding-top: 15px;
        }

        .arrow_menu {

            background: url("<?=URL1?>images/down-arrow.png");
            width: 16px;
            height: 16px;
            display: block;
            float: left;
            margin-top: 11px;
            margin-right: 5px;

        }

        div, span, ul {
            text-align: right;
            direction: rtl;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        #menu_top > ul > li {
            height: 40px;
            float: right;

        }

        #menu_top > ul > li > ul > li {
            float: right;

        }

        #menu_top > ul {
            position: relative;
            padding: 0;
            z-index: 5;
        }

        #menu_top > ul > li > ul {
            position: absolute;
            right: 0;
            background: white;
            width: 1200px;
            height: 40px;
            padding: 0;
            box-shadow: 1px 3px 4px #ccc;
            display: none;

        }

        #menu_top > ul > li > ul > li > a {
            padding: 5px 20px;
            display: block;
        }

        #menu_top > ul > li > a {
            padding: 0 20px;
            display: block;;
            height: 40px;
            line-height: 35px;

        }

        ul {
            margin: 0;
        }

        .top_menu_tre_cloum {
            width: 299px;
            height: 300px;
            float: right;
            border-left: solid 1px #eee;
        }

        .top_menu_tre_cloum > ul {
            padding-right: 18px;
        }

        .top_menu_tre_cloum > ul > li {
            padding-right: 15px;
        }

        .top_menu_tre_cloum > ul > li:first-child {
            padding-right: 5px;
            color: #1d11ab;
        }

        .main_menu {
            display: none;
        }



        #brands_sidebar a {
            width: 140px;
            height: 95px;
            background-color: #fff;
            display: block;
            border-radius: 4px;
            margin-bottom: 10px;
            overflow: hidden;
            box-shadow: 0 1px 4px rgba(0, 0, 0, .3);

        }






        #content_slider2 > a {
            display: block;
            height: 100%;
            width: 100%;
            position: relative;
        }

        .left p {
            text-align: center;
        }

        .left img {

            position: absolute;
            top: 67px;
            left: -272px;

        }

        .righte p {
            color: red !important;
            padding-right: 45px;
            padding-top: 15px;
            font-size: 15pt;
            margin: 0;
        }



        #email_input > input {
            width: 430px;
            height: 40px;

        }

        #email_input > button {
            width: 110px;
            height: 47px;
            font-family: yekan;
            color: white;
            background: lightseagreen;
            text-align: center;
            border: none;
            border-radius: 4px;

        }


    </style>

</head>
<body style="margin: 0 ;background: #eee">
<header style="background: white">
    <div id="header">
        <div id="header_right" style="width: 720px;height: 100px;float: right">
            <div id="header_right_top" style="height: 40px">
                <span
                    style="width:20px;height: 20px;background: url(<?=URL1?>images/locked-padlock.png);display: block;float: right"></span>
                <a href="<?= URL3  ?>register" class="yekan fontsm" style="float: right;margin-right: 10px" >فروشگاه اینترنی دی جی
                    کالا،وارد شوید</a>
                <span
                    style="width:20px; margin-right:35px ;height: 20px;background: url(<?=URL1?>images/register.png);display: block;float: right"></span>
                <a href="<?= URL3  ?>register" class="yekan fontsm" style="float: right;margin-right: 10px" >ثبت نام کنید</a>
            </div>
            <div id="header_right_bottom" style="height: 50px">
                <div id="basket_top" style="width: 190px;height: 40px;float: right;">
                    <div id="basket_top_right" style="width: 54px;float: right; height: 100%;background:#218213 url(<?=URL1?>images/shopping-cart.png)
                        no-repeat center">
                    </div>

                   <a href="<?= URL3  ?>shopping">
                       <div class="fontsm" id="basket_top_left"
                            style="width: 136px;height: 100%;background:#1c6b15; float: right">
                           <span class="yekan " style="float: right;line-height: 35px;color: #fff;padding:0 15px 0 5px">سبد خرید</span>
                           <span style=";display: block;float: right;line-height: 24px;width: 25px;height: 25px;margin-top:7px;background: #fff;
text-align: center;border-radius: 100%;">0</span>
                       </div>
                   </a>
                </div>
                <div id="Search_top" style="width: 500px;height: 40px;float: right;position: relative">
                    <input class="yekan" placeholder="محصول،دسته یا برند مورد نظر هود را سرچ کنید...." type="text"
                           style="width: 480px;margin-right: 20px;border: solid 2px #eee;border-radius-topright: 3%;
                height: 40px;-moz-border-radius-bottomright: 3%;padding-right: 10px;color: #9d9d9d;">
                    <span
                        style="width: 42px;height: 40px;background: #eee url(<?=URL1?>images/musica-searcher.png) no-repeat center;position: absolute;top:0px;left:0px"></span>
                </div>

            </div>

        </div>
        <div id="header_left" style="float: left">
          <a href="<?= URL3  ?>"><img src="images/digikala-logo-slogan.png"></a>
        </div>
    </div>
</header>
<nav
    style="width: 100%;height: 40px ;background-color:#f7f8fa ;box-shadow: 1px 3px 4px #ccc;border-top: solid 1px #eeeeee">
    <div id="menu_top" style="width: 1200px;height: 40px ;margin: auto">

        <ul>
            <li data-time="1">
                <a class="yekan2 fontsm">
                    کالاهای دیجیتال
                    <span class="arrow_menu"></span>
                </a>
                <ul>
                    <li CLASS="yekan2 fontsm" data-time="3">
                        <a>

                            موبایل
                        </a>
                        <div class="main_menu"
                             style="width: 1200px;height: 300px;background: white;border-top: 1px solid #eee;position: absolute;right: 0;">
                            <div class="top_menu_tre_cloum">
                                <ul class="yekan2 fontsm">
                                    <li>گوشی موبایل</li>
                                    <li>apple</li>
                                    <li>sumsung</li>
                                    <li>lg</li>
                                </ul>
                            </div>
                            <div class="top_menu_tre_cloum"></div>
                            <div class="top_menu_tre_cloum"></div>
                            <div class="top_menu_tre_cloum"></div>
                            <img src="images/mobile.png" style="position: absolute;left: 2px ;bottom: 2px">
                        </div>
                    </li>
                    <li class="yekan2 fontsm" data-time="4">
                        <a>


                            تبلت و کتابخوان

                        </a>
                        <div class="main_menu"
                             style="width: 1200px;height: 300px;background: white;border-top: 1px solid #eee;position: absolute;right: 0;">
                            <div class="top_menu_tre_cloum">
                                <ul class="yekan2 fontsm">
                                    <li>تبلت و کتاب خوان</li>
                                    <li>apple</li>
                                    <li>sumsung</li>
                                    <li>asuse</li>
                                </ul>
                            </div>
                            <div class="top_menu_tre_cloum"></div>
                            <div class="top_menu_tre_cloum"></div>
                            <div class="top_menu_tre_cloum"></div>
                            <img src="images/mobile.png" style="position: absolute;left: 2px ;bottom: 2px">
                        </div>
                    </li>
                    <li class="yekan2 fontsm" data-time="5">
                        <a>
                            لپ تاپ
                        </a>
                        <div class="main_menu"
                             style="width: 1200px;height: 300px;background: white;border-top: 1px solid #eee;position: absolute;right: 0;">
                            <div class="top_menu_tre_cloum">
                                <ul class="yekan2 fontsm">
                                    <li>لپ تاپ</li>
                                    <li>apple</li>
                                    <li>sumsung</li>
                                    <li>asuse</li>
                                </ul>
                            </div>
                            <div class="top_menu_tre_cloum"></div>
                            <div class="top_menu_tre_cloum"></div>
                            <div class="top_menu_tre_cloum"></div>
                            <img src="images/mobile.png" style="position: absolute;left: 2px ;bottom: 2px">
                        </div>
                    </li>
                </ul>
            </li>
            <li data-time="2">
                <a class="yekan2 fontsm">

                    لوازم خانگی

                    <span class="arrow_menu"></span>
                </a>
                <ul>
                    <li CLASS="yekan2 fontsm" data-time="7">
                        <a>

                            صوتی تصویری

                        </a>
                        <div class="main_menu"
                             style="width: 1200px;height: 300px;background: white;border-top: 1px solid #eee;position: absolute;right: 0;">
                            <div class="top_menu_tre_cloum">
                                <ul class="yekan2 fontsm">
                                    <li> صوتی تصویری</li>
                                    <li>bouch</li>
                                    <li>sumsung</li>
                                    <li>lg</li>
                                </ul>
                            </div>
                            <div class="top_menu_tre_cloum"></div>
                            <div class="top_menu_tre_cloum"></div>
                            <div class="top_menu_tre_cloum"></div>
                            <img src="images/mobile.png" style="position: absolute;left: 2px ;bottom: 2px">
                        </div>
                    </li>
                    <li class="yekan2 fontsm" data-time="8">
                        <a>
                            همزن ها

                        </a>
                        <div class="main_menu"
                             style="width: 1200px;height: 300px;background: white;border-top: 1px solid #eee;position: absolute;right: 0;">
                            <div class="top_menu_tre_cloum">
                                <ul class="yekan2 fontsm">
                                    <li>همزن ها</li>
                                    <li>bouch</li>
                                    <li>sumsung</li>
                                    <li>lg</li>
                                </ul>
                            </div>
                            <div class="top_menu_tre_cloum"></div>
                            <div class="top_menu_tre_cloum"></div>
                            <div class="top_menu_tre_cloum"></div>
                            <img src="images/mobile.png" style="position: absolute;left: 2px ;bottom: 2px">
                        </div>
                    </li>
                    <li class="yekan2 fontsm" data-time="9">
                        <a>
                            برقی
                        </a>
                        <div class="main_menu"
                             style="width: 1200px;height: 300px;background: white;border-top: 1px solid #eee;position: absolute;right: 0;">
                            <div class="top_menu_tre_cloum">
                                <ul class="yekan2 fontsm">
                                    <li> برقی</li>
                                    <li>bouch</li>
                                    <li>sumsung</li>
                                    <li>lg</li>
                                </ul>
                            </div>
                            <div class="top_menu_tre_cloum"></div>
                            <div class="top_menu_tre_cloum"></div>
                            <div class="top_menu_tre_cloum"></div>
                            <img src="images/mobile.png" style="position: absolute;left: 2px ;bottom: 2px">
                        </div>

                    </li>

                </ul>
            </li>
        </ul>
    </div>

</nav>