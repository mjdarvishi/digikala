<?php
$option=model::getoption();


    ?>


    <style>
        .color_font {
            color: #fff !important;
        }

        .black {
            color: #111111;
            font-family: yekan;
        }



        #footer {
            height: 300px;
            float: right;
            margin-top: 80px;
            width: 100%;
            background: #f7f8fa;
        }

        #footer_top {
            background: #6d717a;
            height: 40px;
            width: 100%;

        }

        #footer_bottom {
            height: 255px;
            width: 100%;

            width: 1200px;
            margin: auto;
            height: 220px;
            margin-top: 20px;
        }

        #footer_top_content {
            width: 1200px;
            margin: auto;
            height: 100%;
        }

        #right_content {
            font-family: yekan;
            color: white;
            float: right;
            width: 290px;
            height: 100%;
        }

        .email {
            font-family: yekan;
            color: white;
            width: 180px;
            height: 100%;
            float: left;
        }

        #left {
            width: 650px;
            height: 100%;
            float: left;
        }

        .email > div {
            width: 130px;
            height: 100%;
            margin-left: -3px;
            float: left;
            line-height: 35px;
        }

        #m1 {
            display: block;
            width: 24px;
            height: 24px;
            float: left;
            margin-top: 7px;
            background: url(<?=URL1?>images/envelope.png);
        }

        #m2 {
            display: block;
            width: 24px;
            height: 24px;
            float: left;
            margin-top: 7px;
            background: url(<?=URL1?>images/question-mark.png);
        }

        #m3 {
            display: block;
            width: 24px;
            height: 24px;
            float: left;
            margin-top: 7px;
            background: url(<?=URL1?>images/phone-call.png);
        }

        .content_right {
            width: 220px;
            height: 100%;
            float: right;
            margin-left: 70px;
        }

        .content_right ul {
            padding: 0;
            margin-top: 15px;

        }

        .content_right > a {
            font-size: 12pt;
            color: black;
            font-family: yekan;
        }

        #content_left {
            width: 590px;
            height: 100%;
            float: left;
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

        #social_first {
            float: left;
            margin-top: 15px;
            margin-left: 39px;
            height: 50px;
        }

        #social_second {
            width: 210px;

            margin-top: 27px;
            float: right;

        }

        #social_second > ul {
            width: 210px;
            height: 24px;
            padding: 0;

        }

        #social_second > ul > li {
            width: 24px;
            height: 24px;
            float: right;
            padding-right: 10px;
        }

        #social_second > ul > li > a {
            width: 24px;
            height: 24px;
            display: block;
        }

        #social_second > ul > li > a > img {
            width: 24px;
            height: 24px;
            display: block;
        }
    </style>

</head>



<footer id="footer">
    <div id="footer_top">
        <div id="footer_top_content">
            <div id="right_content">
                7روز هفته، 24 ساعته پاسخگوی شما هستیم.
            </div>
            <div id="left">
                <div class="email">
                    <span id="m1"></span>
                    <div><?= $option['email']     ?></div>
                </div>
                <div class="email">
                    <span id="m2"></span>
                    <div>سوالات متداول</div>
                </div>
                <div class="email">
                    <span id="m3"></span>
                    <div>  <div><?= $option['time']     ?></div></div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer_bottom">
        <div class="content_right">
            <a>راهنمای خرید از دیجی‌کالا</a>
            <ul class="yekan">
                <li>
                    <a>ثبت سفارش</a>
                </li>
                <li>
                    <a>رویه های ارسال سفارش</a>
                </li>
                <li>
                    <a>شیوه های پرداخت</a>
                </li>
                <li>
                    <a>معرفی دیجی بن</a>
                </li>
            </ul>
        </div>

        <div class="content_right">
            <a>راهنمای خرید از دیجی‌کالا</a>
            <ul class="yekan">
                <li>
                    <a>ثبت سفارش</a>
                </li>
                <li>
                    <a>رویه های ارسال سفارش</a>
                </li>
                <li>
                    <a>شیوه های پرداخت</a>
                </li>
                <li>
                    <a>معرفی دیجی بن</a>
                </li>
            </ul>
        </div>

        <div id="content_left">
            <p class="yekan">از تخفیف ها و جدیدترین های دیجی کالا باخبر شوید !</p>
            <div id="email_input">
                <input class="yekan" type="text" placeholder="آدرس ایمیل خود را وارد کنید">
                <button>تایید ایمیل</button>
                <div id="social">
                    <div id="social_first">
                        <a>
                            <img src="images/ios_app_bg.png">
                        </a>
                        <a>
                            <img src="images/android_app_bg.png">
                        </a>
                    </div>
                    <div id="social_second">
                        <ul>
                            <li>
                                <a>
                                    <img src="images/facebook.png">
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="images/twitter.png">
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="images/gmail.png">
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="images/instagram.png">
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="images/telegram.png">
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="images/whatsapp.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    var timer = {};
    $('#menu_top li').hover(function () {
            $('#slider').css('zIndex', -2);
            var tag = $(this);
            var timerAttr = tag.attr('data-time');


            clearTimeout(timer[timerAttr]);


            timer[timerAttr] = setTimeout(function () {
                $('>ul', tag).fadeIn(0);
                $(tag).addClass("activeMenu");
                $('>.main_menu', tag).fadeIn(0);
            }, 500);
        }, function () {
            var tag = $(this);
            var timerAttr = tag.attr('data-time');
            clearTimeout(timer[timerAttr]);
            timer[timerAttr] = setTimeout(function () {
                $('>ul', tag).fadeOut(0);
                $(tag).removeClass("activeMenu");
                $('>.main_menu', tag).fadeOut(0);
            }, 500);
            $('#slider').css('zIndex', 2);
        }
    );
</script>

</body>
</html>