<!DOCTYPE html>

    <style>




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



        .order_step {
            margin-top: 30px;
            margin-bottom: 30px;
            float: right;
            width: 100%;
            padding-right: 90px;

        }

        .dash > span {
            width: 11px;
            height: 3px;
            background: lightseagreen;
            display: block;
            float: right;
            margin-left: 3px;

        }

        .dash {
            float: right;
            margin-right: 40px;

        }

        .circle {
            width: 19px;
            height: 19px;
            display: block;
            border: 3px solid #ccc;
            border-radius: 100%;
            position: absolute;
            top: -12px;
            right: 12px;
        }

        .line3 {
            width: 128px;
            display: block;
            height: 2px;
            background: #ccc;
            position: absolute;
            top: 1px;
            right: 45px;
        }

        .order_step ul {
            float: right;
            padding: 0;

        }

        .order_step ul li {
            position: relative;
            width: 180px;
            height: 1px;
            float: right;
            display: block;
        }

        .title.yekan.color2 {
            position: absolute;
            top: 10px;
            right: 1px;
            width: 100px;
        }

        .order_step ul li .down {

        }

        .down .circle {
            border: deepskyblue 1px solid !important;

            background: deepskyblue url(<?=URL1?><?=URL1?>images/slices.png) -809px -476px !important;
        }

        .down .line3 {
            background: deepskyblue !important;
        }

        .down .title {
            color: deepskyblue !important;
        }
        #maine::after{
            content: " ";
            clear: both;
            display: block;
        }
        .enter{
            width: 560px;

            float: right;

        }
        .register{
            width: 560px;

            float: right;
        }
        .contenttt{
            margin-top: 50px;
            float: right;
            margin-bottom: 50px;
        }
        .enter i{
            margin: auto;
            width: 48px;
            height: 58px;
            display: block;
            background: url(<?=URL1?><?=URL1?>images/slices.png)-795px -22px;
        }
        .register i{
            margin: auto;
            width: 48px;
            height: 58px;
            display: block;
            background: url(<?=URL1?>images/slices.png) -795px -90px;
        }
        .enter p{
            margin: 0;
            text-align: center;
        }
        .register p{
            margin: 0;
            text-align: center;
        }
        .butn{
            width: 170px;
            height: 37px;
            display: block;
            position: relative;
            top: 20px;
            left: -755px;
            background: green;
            border-radius: 5px;
            color: #fff;
            text-align: center;
            font-family: yekan;
            font-size: 10pt;
            line-height: 37px;
            box-shadow: 1px 1px 3px #ccc;
        }
        .btn2{
            width: 170px;
            height: 37px;
            display: block;
            position: relative;
            top: 20px;
            left:365px;
            background: blue;
            border-radius: 5px;
            color: #fff;
            text-align: center;
            font-family: yekan;
            font-size: 10pt;
            line-height: 37px;
            box-shadow: 1px 1px 3px #ccc;
        }


    </style>

</head>
<body style="margin: 0 ;background: #eee">

<div id="maine"
     style="width: 1200px;margin-right: auto;margin-top: 10px;margin-left: auto;background: #fff;padding: 5px;">
    <div class="order_step">
        <div class="dash">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li class="down">
                <span class="circle"></span>
                <span class="title yekan color2">
ورود به کلیک سایت
                                        </span>
                <span class="line3"></span>
            </li>
            <li>
                <span class="circle"></span>
                <span class="title yekan color2">
اطلاعات ارسال سفارش
                                        </span>
                <span class="line3"></span>
            </li>
            <li>
                <span class="circle"></span>
                <span class="title yekan color2">
بازبینی سفارش
                                        </span>
                <span class="line3"></span>
            </li>

            <li>
                <span class="circle"></span>
                <span class="title yekan color2">
اطلاعات پرداخت
                                        </span>
                <span class="line3"></span>
            </li>


        </ul>
        <div class="dash">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="contenttt">
        <div class="enter color2 yekan">
            <i></i>
            <p>عضو دی حی کالا هستی</p>
            <p>برای تکمیل فرایند کلیک کنید</p>
            <a href="<?= URL3 ?>register"> <span class="butn">ثبت نام در دی جی کالا</span></a>

        </div>
        <div class="register color2 yekan">
            <i></i>
            <p>تازه وارد هستی هستی</p>
            <p>برای تکمیل فرایند کلیک کنید</p>
            <a href="<?= URL3 ?>login">  <span class="btn2">ورود به دی جی کالا</span></a>

        </div>
    </div>
</div>




