<!DOCTYPE html>

    <style>
        .color {
            color: #6d717a;
        }


        .fontsm {
            font-size: 10pt
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

        ul {
            margin: 0;
        }

       

        #maine {
            width: 1200px;
            margin-right: auto;
            margin-top: 10px;
            margin-left: auto;
            background: #fff;
            border-radius: 4px;
            overflow: hidden;
            height: 600px;

        }

        #icon_main {
            width: 100%;
            height: 150px;
            background: #fafcfc;
        }

        #icon_main > span {
            background: url(<?=URL1?>images/business-person-silhouette-wearing-tie.png) no-repeat;
            width: 64px;
            height: 64px;
            display: block;
            margin: auto;
            position: relative;
            top: 17px;

        }

        #icon_main > p {
            text-align: center;
            font-family: yekan;
            font-size: 13pt;

        }

        #content {
            width: 100%;
            margin-top: 40px;
            height: 280px;
            font-family: yekan;
            color: #9d998f;

        }

        #main_right {
            width: 599px;

            float: right;
            border-left: solid 1px #9d9d9d;

        }

        #main_left {
            width: 600px;

            float: right;
        }

        #main_right .input {
            direction: ltr;
            text-align: left;
            width: 250px;
            height: 40px;
            border-radius: 4px;
            border: 1px solid #c6c6c6;
            padding-left: 10px;

        }

        #main_right label {
            width: 150px;
            display: inline-block;
        }

        #main_right > div {
            padding-right: 62px;
            padding-top: 30px;
        }

        #short_div {
            width: 428px;
        }

        #main_right > button {
            margin-right: 358px;
        }

        #main_left > ul {
            padding: 0;
            font-family: yekan;
            color: #9d998f;
            padding-right: 62px;
            padding-top: 30px;
        }

        #main_left i {
            display: inline-block;
            width: 24px;
            height: 24px;
            position: relative;
            top: 8px;
            margin-bottom: 30px;

        }

        #main_left span {
            position: relative;
            right: 23px;
            line-height: 18px;
            top: -32px;
        }
        .check_box{
            width: 16px !important;
            height: 16px !important;
            border: solid 1px #ccc ;
            border-radius: 4px;
            display: inline-block;
            position: absolute;
            top: 37px;
            right: 66px;

        }
        .check{
            width: 16px;
            height: 16px;
            display: inline-block;

            z-index: 2;
            position: relative;
            opacity: 0;
            cursor: pointer;
        }
        .checked{
            background: url(<?=URL1?>images/slices.png) #2196f3 no-repeat -191px -82px ;
            border: none;

        }
        .bottom {
            background: lightseagreen none repeat scroll 0 0;
            border: medium none;
            border-radius: 4px;
            color: white;
            font-family: yekan;
            height: 47px;
            text-align: center;
        }


    </style>
    <script src="css/FlipClock-master/compiled/flipclock.min.js"></script>
</head>
<body style="margin: 0 ;background: #eee">


<div id="maine">
    <div id="icon_main">
        <span></span>
        <p class="color"> ورورد ب سایت</p>
    </div>
    <div id="content">
        <form action="<?= URL3 ?>login/check" method="post">
            <div id="main_right">
                <div>
                    <label> پست الکترونیک</label>
                    <input name="email" class="input" type="text" placeholder="Email">
                </div>
                <div>
                    <label> کلـــمه عبــور</label>
                    <input name="password" class="input" type="password" placeholder="password">
                </div>


                <button class="bottom">ورود در دیجی کالا</button>
            </div>
        </form>
        <div id="main_left">
            <ul>
                <li>

                    <i style="background: url(<?=URL1?>images/cart.png)"></i>
                    <span>
                      سریع تر و ساده تر خرید کنید
                  </span>
                </li>
                <li>

                    <i style="background: url(<?=URL1?>images/checklist.png)"></i>
                    <span>
                     به سادگی سوابق خرید و فعالیت های خود را مدیریت کنید
                  </span>
                </li>
                <li>

                    <i style="background: url(<?=URL1?>images/favorite-heart-button.png)"></i>
                    <span>
                     لیست علاقمندی های خود را بسازید و تغییرات آنها را دنبال کنید
                  </span>
                </li>
                <li>

                    <i style="background: url(<?=URL1?>images/mail.png)"></i>
                    <span>
                     نقد، بررسی و نظرات خود را با دیگران به اشتراک گذارید
                  </span>
                </li>
                <li>

                    <i style="background: url(<?=URL1?>images/check-mark.png)"></i>
                    <span>
                     در جریان فروش های ویژه و قیمت روز محصولات قرار بگیرید
                  </span>
                </li>

            </ul>
        </div>
    </div>
</div>
</body>

