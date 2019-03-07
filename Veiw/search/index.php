<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>فروشگاه اینترنتی دی جی کالا</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/flipTimer.css">
    <script src="js/jquery.flipTimer.js"></script>
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



        #maine {
            width: 1200px;
            margin-right: auto;
            margin-top: 10px;
            margin-left: auto;
            background: #fff;
            border-radius: 8px;

        }

        #maine::after {
            content: " ";
            clear: both;
            display: block;
        }



        .content {
            width: 928px;
            float: left;
            margin-top: 15px;
        }



        .color1 {
            color: black;
            font-family: yekan;
            font-size: 11px;
        }

        .color2 {
            color: #9d998f;
            font-family: yekan;
            font-size: 11px;
        }





        .content > ul {
            padding: 0;
            margin-right: 30px;
            margin-top: 10px;
            float: right;
            width: 100%;
        }

        .color2 li {
            width: 80px;
            float: right;
            position: relative;
            margin-left: 5px;
            margin-right: 5px;

        }

        .color2 > li > span {
            top: 8px;
            right: 64px;

        }

        .flash {
            display: block;
            width: 10px;
            height: 10px;
            position: absolute;
            background: url(<?=URL1?>images/back2.png) no-repeat;

        }

        .like_combu_ul {
            padding: 0;
            width: 100%;
            float: right;

        }

        .like_combu_ul > li {
            width: 140px;
            height: 24px;
            float: right;
            position: relative;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding-right: 5px;
            position: relative;
            cursor: pointer;

        }

        .like_combu_ul > li > .flash {
            position: absolute;
            top: 8px;
            right: 125px;

        }

        .com {
            width: 170px;
            height: 155px;
            background: #fff;
            box-shadow: -4px 4px 3px rgba(0, 0, 0, .2);
            border-right: 1px solid #ccc;
            position: absolute;
            top: 25px;
            right: 0;
            overflow-y: auto;
            display: none;
        }

        .com_ul {
            font-size: 9pt;
            color: #9d998f;
            font-family: yekan;
            padding: 0;
            padding-right: 20px;
        }

        .com_ul > li {
            position: relative;

        }

        .com_ul > li:hover {
            cursor: pointer;
        }



        .squre2 {
            width: 10px;
            height: 10px;
            display: block;
            position: absolute;
            top: 7px;
            right: -16px;
            border: 1px solid #eee;
            border-radius: 2px;
            overflow: hidden;

        }

        .li_selected {

            background: url(<?=URL1?>images/rounded-black-square-shape.png) no-repeat 1px 1px !important;

        }

        .li_hover {
            background: url(<?=URL1?>images/square-shape-shadow.png) no-repeat 1px 1px;
        }

        #item_selected {
            width: 897px;
            font-family: yekan;
            font-size: 7pt;
            color: #c6c6c6;
            float: right;
            padding-right: 32px;

        }

        #item_selected span {
            border: 1px solid #eee;
            border-radius: 4px;
            display: block;
            width: 110px;
            padding-right: 12px;
            float: right;

        }

        .close {
            display: block;
            width: 5px;
            height: 5px;
            position: relative;
            background: url(<?=URL1?>images/close-button.png);
            right: 94px;
            top: -10px;
            cursor: pointer;

        }

        .input {
            width: 330px;
            height: 17px;
            border: 1px solid #ccc;
            float: right;

        }

        #search {
            position: relative;
            float: right;
        }

        #icone_search {
            position: absolute;
            display: block;
            width: 16px;
            height: 16px;
            top: 2px;
            right: 314px;
            background: url(<?=URL1?>images/search.png);
        }

        .how_show {
            font-family: yekan;
            font-size: 9pt;
            display: inline-block;

            width: 135px;
            height: 17px;
            float: right;
            position: relative;
            margin-right: 85px;

        }

        .input2 {
            position: absolute;
            top: 2px;
            right: -27px;
        }

        .display {
            float: left;
            font-family: yekan;
            font-size: 9pt;
            display: block;
            margin-right: 236px;

        }

        .type1 {
            width: 24px;
            height: 24px;
            background: url(<?=URL1?>images/icon1.png);
            display: block;
            float: left;
            cursor: pointer;

        }

        .type2 {
            width: 24px;
            height: 24px;
            display: block;
            background: url(<?=URL1?>images/computer-screen.png);
            float: left;
            margin-right: 4px;
            cursor: pointer;
        }

        #sort {
            float: right;
            margin-top: 10px;

        }

        #sort span, select {
            margin-right: 5px;

        }

        #sort select {
            cursor: pointer
        }

        #pagination {
            float: right;
            width: 100%;

        }

        #pagination span {
            float: left;
            cursor: pointer;
        }

        #pagination span {
            display: block;
            width: 65px;
            height: 25px;
            border: 2px solid #ccc;
            text-align: center;
            border-radius: 3px;

        }

        #pagination ul {
            padding: 0;
        }

        #pagination ul li {
            display: block;
            height: 25px;
            width: 10px;
            border: 2px solid #ccc;
            border-radius: 3px;
            text-align: center;
            margin: 0 2px;

        }

        #pagination div {
            margin-left: 37px;
        }

        #pagination_ul {
            float: left;
            cursor: pointer;
        }



    </style>
    <script src="css/FlipClock-master/compiled/flipclock.min.js"></script>
</head>
<body style="margin: 0 ;background: #eee">


<div id="maine">
<?php require ('side.php')?>
    <div class="content">
        <ul class="color2">
            <li>
                جستجوی کالا
                <span></span>
            </li>
            <li>
                فرهنگ و هنر
                <span class="flash"></span>
            </li>
            <li>
                <span class="flash"></span>
                آلات موسيقي

            </li>
            <li>
                <span class="flash"></span>
                سازهاي بادي

            </li>
        </ul>
        <div id="item_selected">

        </div>
        <ul class="like_combu_ul color2">

            <li>
                <span class="titile">
                فرهنگ و هنر
               </span>

                <span class="flash"></span>
                <div class="com">
                    <ul class="com_ul">
                        <li data-id="5">
                            نمایش همه
                            <span class="squre2 li_selected"></span>
                            <div class="line"></div>
                        </li>
                        <li data-id="6">
                            یک
                            <span class="squre2"></span>
                        </li>
                        <li data-id="7">
                            دو
                            <span class="squre2"></span>
                        </li>
                        <li data-id="8">
                            سه
                            <span class="squre2"></span>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <span class="flash"></span>
                <span class="titile">
                آلات موسيقي
               </span>
                <div class="com">
                    <ul class="com_ul">
                        <li data-id="9">
                            نمایش همه
                            <span class="squre2 li_selected"></span>
                            <div class="line"></div>
                        </li>
                        <li data-id="10">
                            یک
                            <span class="squre2"></span>
                        </li>
                        <li data-id="11">
                            دو
                            <span class="squre2"></span>
                        </li>
                        <li data-id="12">
                            سه
                            <span class="squre2"></span>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <span class="flash"></span>
                <span class="titile">
                سازهاي بادي
             </span>
                <div class="com">
                    <ul class="com_ul">
                        <li data-id="0">
                            نمایش همه
                            <span class="squre2 li_selected"></span>
                            <div class="line"></div>
                        </li>
                        <li data-id="1">
                            یک
                            <span class="squre2"></span>
                        </li>
                        <li data-id="2">
                            دو
                            <span class="squre2"></span>
                        </li>
                        <li data-id="3">
                            سه
                            <span class="squre2"></span>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <div class="line"></div>
        <div id="search">
            <input class="input color2 yekan" type="text" placeholder="کالای مورد نظر خود را وارد کنید">
            <span id="icone_search"></span>
            <span class="how_show color2">
               <input type="checkbox" class="input2">
               نمایش کالا های موجود
           </span>
            <span class="display color2">
نوع نمایش
                <span class="type1"></span>
                <span class="type2"></span>
            </span>
        </div>
        <div id="sort" class="yekan color2">
            <span>مرتب سازی بر اساس</span>
            <select class="yekan color2">
                <option>پربازدید ترین</option>
                <option>قیمت</option>
                <option>جدید ترین</option>
            </select>
            <select class="yekan color2">
                <option>صعودی</option>
                <option>نزولی</option>

            </select>
            <span>تعداد نمایش</span>
            <select class="yekan color2">
                <option>24</option>
                <option>36</option>

            </select>
        </div>
        <div id="pagination" class="color2 yekan">
            <div>
                <span>صفحه ی بعد</span>
                <ul id="pagination_ul">
                    <li>
                        1
                    </li>
                    <li>
                        2
                    </li>
                </ul>
                <span>صفحه ی بعد</span>
            </div>
        </div>
        <?php require ('product.php')?>

    </div>
</div>


<script>


    $('.like_combu_ul >li').hover(function () {
            $('.com', this).slideDown();
            $('.com').css('zIndex', 2);
        }, function () {
            $('.com', this).slideUp();

        }
    );

    var item = '.com_ul li';

    $('.com_ul li').hover(function () {
            $('.squre2', this).addClass('li_hover');
        }, function () {
            $('.squre2', this).removeClass('li_hover');
        }
    );
    $('.com_ul li').click(function () {
        $('.squre2', this).toggleClass('li_selected');
    });


    $(item).click(function () {
        var title = $(this).parents('li').find('.titile').text();
        var val = $(this).text();
        var num = $(this).attr('data-id');
        var lens = $('#item_selected').find('span[data-id=' + num + ']').length;
        if (lens > 0) {
            $('#item_selected').find('span[data-id=' + num + ']').remove();
        } else {
            var content = '<span data-id="' + num + '">' + title + ':' + val + '<i class="close" onclick="del(this);"></i></span>';
            $('#item_selected').append(content);
        }
        $('.squre', this).toggleClass('li_selected');
    });


    function del(tag) {
        var root = $(tag).parents('span');

        var num = $(root).attr('data-id');

        $('.com_ul').find('li[data-id=' + num + ']').find('span').removeClass('li_selected');

        root.remove();
    }


    
</script>
