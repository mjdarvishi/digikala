<!DOCTYPE html>


<style>
    .color_font {
        color: #fff !important;
    }

    .black {
        color: #111111;
        font-family: yekan;
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


    .main_menu {
        display: none;
    }










</style>

</head>
<body style="margin: 0 ;background: #eee">

<div id="maine" style="width: 1200px;margin-right: auto;margin-top: 10px;margin-left: auto">

    <div id="banner_top" style="width: 100%;height: 138px;">
        <img src="images/f7583a27.jpg" style="box-shadow: 0 4px 5px #fff;border-radius: 4px;width: 100%;height: 100%">
    </div>
    <?php require ('sidebar.php'); ?>


    <div id="contentbar_left" style="width: 890px;float: left">
        <?php require ('slider.php')?>
        <?php require('payment.php') ?>
        <?php require('slider2.php') ?>
        <?php require('slider_scoroll.php') ?>
        <?php require('picture.php') ?>
        <?php require('slider_scoroll_two.php') ?>
        <?php require('slider_scoroll_tree.php') ?>


    </div>


</div>

