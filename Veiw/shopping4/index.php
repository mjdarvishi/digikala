<!DOCTYPE html>

    <style>
        .color_font {
            color: #fff !important;
        }

        .black {
            color: #111111;
            font-family: yekan;
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

       

        .head {
            position: relative;
            margin-top: 40px;
            float: right;
            width: 100%;
        }

        .head h4 {
            font-family: yekan;
            font-size: 10pt;
            margin: 10px;

        }

        .head span {
            width: 170px;
            height: 37px;
            display: block;
            position: absolute;
            top: -5px;
            left: 25px;
            background: lightseagreen;
            border-radius: 5px;
            color: #fff;
            text-align: center;
            font-family: yekan;
            font-size: 10pt;
            line-height: 37px;
            box-shadow: 1px 1px 3px #ccc;
        }

        .contentt {

            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 15px;
            width: 100%;
            float: right;
        }

        .final_price {
            width: 98%;
            float: left;
            margin-left: 10px;
            margin-top: 20px;
            border: 1px solid #ccc;
            position: relative;

        }

        .top {
            border-bottom: 1px solid #ccc;
            height: 40px;
            padding: 5px;
        }

        .bottom {
            height: 40px;
            padding: 5px;

        }

        .color3 {
            color: rgba(59, 63, 62, 0.89);
            font-size: 9pt;
        }

        .span_left {
            float: left;
        }

        #maine::after {
            content: " ";
            clear: both;
            display: block;
        }

        .butn {
            width: 170px;
            height: 37px;
            display: block;
            position: relative;
            top: -29px;
            left: -1016px;
            background: green;
            border-radius: 5px;
            color: #fff;
            text-align: center;
            font-family: yekan;
            font-size: 10pt;
            line-height: 37px;
            box-shadow: 1px 1px 3px #ccc;
        }

        .under_price {
            width: 100%;
            text-align: left;
            float: left;
            margin-top: 20px;
        }

        .text {
            margin-left: 330px;
        }

        .red {
            background: rgba(251, 42, 27, 0.18);
        }

        .green {
            background: rgba(75, 207, 58, 0.2);
        }

        .contain_send {
            width: 100%;
            margin-top: 60px;
            float: right;

        }

        .contain_send h4 {
            padding-right: 20px;
        }

        .top_table {
            width: 100%;
            float: right;
            margin-top: 10px;

        }

        .top_table td {
            border: 1px solid #ccc;
            padding: 5px;
        }

        .top_table i {
            width: 29px;
            height: 29px;
            display: block;
            background: url(<?=URL1?>images/slices.png) no-repeat -810px -205px;
        }

        .top_table span {
            width: 29px;
            height: 29px;
            display: block;
            background: url(<?=URL1?>images/slices.png) no-repeat -806px -250px;
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

            background: deepskyblue url(<?=URL1?>images/slices.png) -809px -476px !important;
        }

        .down .line3 {
            background: deepskyblue !important;
        }

        .down .title {
            color: deepskyblue !important;
        }

        .contentt div {
            float: right;
            padding: 5px;
            margin-left: 5px;
            width: 32%;
            height: 60px;
        }

        .contentt div p {
            margin: 0;
        }

        .contentt div input {
            width: 200px;
            height: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            position: relative;
            top: 11px;
            margin-right: 50px;
        }

        .btn3 {
            width: 150px;
            height: 33px;
            display: block;
            background: lightseagreen;
            border-radius: 5px;
            color: #fff;
            text-align: center;
            font-family: yekan;
            font-size: 10pt;
            line-height: 31px;
            box-shadow: 1px 1px 3px #ccc;
            cursor: pointer;
            position: relative;
            top: 10px;
        }

        .pay {
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 10px;
            padding: 5px;
            float: right;
            background: rgba(75, 207, 58, 0.44);
        }

        .act .cir {
            background: blue;
            border: 1px solid blue;
            position: relative;
        }

        .act .cir::before {
            content: " ";
            display: block;
            width: 5px;
            height: 5px;
            border-radius: 100%;
            background: white;
            position: absolute;
            top: 5px;
            right: 5px;
        }

        .close.active {
            display: none;
        }

        .act {
            width: 100%;
            border: 1px solid #ccc;
            margin-top: 20px;
        }

        .cir {
            width: 15px;
            height: 15px;
            border: 1px solid #ccc;
            border-radius: 100%;
            display: block;
            margin: auto;
        }

        .dayere {
            width: 10px;
            height: 10px;
            display: block;
            position: relative;
            top: 19px;
            right: -17px;
            border-radius: 100%;
            border: 1px solid #ccc;
        }
        .act2 td{
            width: 170px;
        }
        .act3{
            width: 100%;
        }


    </style>

</head>
<body style="margin: 0 ;background: #eee">


<div id="maine"
     style="width: 1200px;margin-right: auto;margin-top: 10px;margin-left: auto;background: #fff;padding: 5px;font-family: yekan">

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
                                            تایید سفارش
                                        </span>
                <span class="line3"></span>
            </li>
            <li class="down">
                <span class="circle"></span>
                <span class="title yekan color2">
                                            تایید سفارش
                                        </span>
                <span class="line3"></span>
            </li>
            <li>
                <span class="circle"></span>
                <span class="title yekan color2">
                                            تایید سفارش
                                        </span>
                <span class="line3"></span>
            </li>

            <li>
                <span class="circle"></span>
                <span class="title yekan color2">
                                            تایید سفارش
                                        </span>
                <span class="line3"></span>
            </li>
            <li style="width: 20px">
                <span class="circle"></span>
                <span class="title yekan color2">
                                            تایید سفارش
                                        </span>

            </li>

        </ul>
        <div class="dash">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="head">
        <h4>کد تخفیف</h4>
        <span>ادامه ی خرید</span>
    </div>
    <div class="contentt">
        <div>
            <p class="color3">با توجه به این که سلام علیکم</p>
            <p class="color3">شب به گلستان تنها منتظرت بودم نامه ناکتمی در هجر تو پیمودم منتظرت بودم</p>
        </div>
        <div>
            <input>
        </div>
        <div>
            <span class="btn3">ثبت کردن کد </span>
        </div>
    </div>
    <div class="head">
        <h4>کارت هدیه</h4>

    </div>
    <div class="contentt">
        <div>
            <p class="color3">با توجه به این که سلام علیکم</p>
            <p class="color3">شب به گلستان تنها منتظرت بودم نامه ناکتمی در هجر تو پیمودم منتظرت بودم</p>
        </div>
        <div>
            <input>
        </div>
        <div>
            <span class="btn3">ثبت کردن کد </span>
        </div>
    </div>
    <table class="pay color3">
        <tr>
            <td>مبلغ قابل پرداخت</td>
            <td>12350000</td>
        </tr>
    </table>
    <div class="head">
        <h4>شیوه ی پرداخت</h4>

    </div>
    <table cellspacing="0" class="act color3">
        <tr style="height: 95px">
            <td style="width: 90px" rowspan="3" class="parent">
                <span class="cir"></span>
            </td>
            <td>
                <table class="act2">
                    <tr>
                        <td>شیوه های پرداخت</td>
                    </tr>
                    <tr>
                        <td>
                            <span class="dayere"></span>
                            درگته پرداخت بانچ فلانی
                        </td>
                        <td>
                            <span class="dayere"></span>
                            درگته پرداخت بانچ فلانی
                        </td>
                    </tr>
                </table>
            </td>


        </tr>


    </table>

    <table cellspacing="0" class="act color3">
        <tr style="height: 95px">
            <td style="width: 90px" rowspan="3" class="parent">
                <span class="cir"></span>
            </td>
            <td>
                <table class="act3">
                    <tr>
                        <td>کارت به کارت</td>
                    </tr>
                    <tr>
                        <td>
                            شما می توانید کارت به کارت کنید و برید حالشو ببرید چون ما خیلی خوبیم
                        </td>

                    </tr>
                </table>
            </td>


        </tr>


    </table>
    <table cellspacing="0" class="act color3">
        <tr style="height: 95px">
            <td style="width: 90px" rowspan="3" class="parent">
                <span class="cir"></span>
            </td>
            <td>
                <table class="act3">
                    <tr>
                        <td>واریز به حساب</td>
                    </tr>
                    <tr>
                        <td>
                            شما می توانید کارت به کارت کنید و برید حالشو ببرید چون ما خیلی خوبیم
                        </td>

                    </tr>
                </table>
            </td>


        </tr>


    </table>



    <div class="under_price">
            <span class="text yekan color3">
                روش های ارسال کالا
            </span>
        <span class="butn">انتخاب شیوه ی ارسال</span>
    </div>
</div>

<script>

    $('.garanty').click(function () {
        $('.sub_garanty').slideToggle(200);
        $(this).find('#first').toggleClass('new_icon');
        $(this).find('#first').toggleClass('check_bottom');


    });

    $('.sub_garanty li').click(function () {
        var text = $(this).text();
        $('.garanty .yekan').text(text);
        $('.sub_garanty').slideToggle();
        $('.garanty').find('#first').toggleClass('new_icon');
        $('.garanty').find('#first').toggleClass('check_bottom');
    });


  
</script>
