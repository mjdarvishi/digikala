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

       

        .main_menu {
            display: none;
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

        .contentt table {
            width: 100%;
            font-family: yekan;
            font-size: 10pt;
            margin-top: 20px;

        }

        .first {
            background: #f7f9fa;
        }

        .righh {
            float: right;
        }

        .leftt {
            float: right;
            margin-right: 10px;
            margin-top: 8px;
        }

        .leftt p {
            margin: 2px 0;
        }

        .red_color {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 100%;
            background: red;
            margin-left: 5px;

        }

        .garanty {
            width: 70px;
            height: 30px;
            border: 1px solid #cccccc;
            position: relative;
            cursor: pointer;

        }

        .garanty .yekan {
            margin-right: 8px;
        }

        .sub_garanty {
            width: 70px;
            height: 60px;
            border: 1px solid #ccc;
            border-top: none;
            display: none;
            cursor: pointer;
        }

        .check_bottom {
            display: block;
            width: 22px;
            height: 17px;
            background: url(<?=URL1?>images/slices.png) no-repeat -31px -461px;
            position: absolute;
            top: 7px;
            left: 0;

        }

        .sub_garanty ul {
            width: 100%;
            padding: 0;

        }

        .sub_garanty ul li {
            width: 100%;
            height: 20px;
            padding-right: 5px;

        }

        .new_icon {
            display: block;
            width: 22px;
            height: 17px;
            background: url(<?=URL1?>images/slices.png) no-repeat -31px -750px;
            position: absolute;
            top: 7px;
            left: 0px;
        }

        .containerofgarenty {
            width: 100%;
            height: 75px;
            padding-top: 20px;
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
        .top_table{
            width: 100%;
            float: right;
            margin-top: 10px;

        }
        .top_table td{
            border: 1px solid #ccc;
            padding: 5px;
        }
        .top_table i{
            width: 29px;
            height: 29px;
            display: block;
            background: url(<?=URL1?>images/slices.png) no-repeat -810px -205px;
        }
        .top_table span{
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
        <h4>سبد خرید شما در دی جی کالا</h4>
        <span>ادامه ی خرید</span>
    </div>
    <div class="contentt">
        <table cellspacing="0">
            <tr class="first">
                <td>شرح محصول</td>
                <td>تعداد</td>
                <td>قیمت واحد</td>
                <td>قیمت کل</td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <div class="righh">
                        <img src="images/schwan-903-steering-wheel-lock.jpg">
                    </div>
                    <div class="leftt">
                        <p>
                            lock of wheel model xyz
                        </p>
                        <p>
                            <span class="red_color"></span>
                            color:red

                        </p>
                        <p>
                            one year garentyabout one year
                        </p>
                    </div>
                </td>
                <td>
                    <div class="containerofgarenty">
                        <div class="garanty">

                        <span class="color2 yekan">
                      1
                    </span>
                            <span id="first" class="check_bottom"></span>
                        </div>
                        <div class="sub_garanty">
                            <ul class="yekan color2">
                                <li>
                                    1
                                </li>
                                <li>
                                    2
                                </li>
                                <li>
                                    3
                                </li>

                            </ul>
                        </div>
                    </div>
                </td>
                <td>
                    100000تومان
                </td>
                <td>
                    20000تومان
                </td>
                <td>
                    <img src="images/Delete.gif">
                </td>
            </tr>
        </table>
    </div>

    <div class="final_price">
        <div class="top yekan color3">
            <span>جمع مبلغ خرید شما</span>
            <span class="span_left">1252000تومان</span>
        </div>
        <div class="top yekan color3">
            <span>هزینه ی حما و تحویل پستی</span>
            <span class="span_left">1252000تومان</span>
        </div>
        <div class="top yekan color3 green">
            <span>مبلغ تخفیفی</span>
            <span class="span_left">1252000تومان</span>
        </div>
        <div class="bottom yekan color3 red">
            <span>مجموع هزیینه ی پرداخت</span>
            <span class="span_left">1252000تومان</span>
        </div>


    </div>
    <div class="contain_send yekan">
        <h4 class="color3">شیوه های ارسال</h4>
        <table cellspacing="0" class="top_table yekan color3">
            <tr>
                <td style="width: 50px"><i></i></td>
                <td >تحویل میگردد به محمد بلاغی داداش</td>
            </tr>
            <tr>
                <td style="width:50px"> <span></span></td>
                <td>به زودی در این مکان تویا می گردد</td>
            </tr>
        </table>
    </div>
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
