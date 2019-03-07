<style>

    .initialize {
        width: 100%;
        float: right;
        background: white;
    }

    .initialize section {
        padding-right: 10px;
        display: none;

    }

    .one {
        background: url(<?=URL1?>images/slices.png) -107px -269px;

    }

    .two {
        background: url(<?=URL1?>images/slices.png) -317px -268px;

    }

    .tree {
        background: url(<?=URL1?>images/slices.png) -263px -269px;

    }

    .four {
        background: url(<?=URL1?>images/slices.png) -212px -269px;

    }

    li.act .one {
        background: url(<?=URL1?>images/slices.png) -107px -310px !important;
    }

    li.act .two {
        background-position: -317px -310px !important;
    }

    li.act .tree {
        background-position: -263px -310px !important;
    }

    li.act .four {
        background-position: -212px -310px !important;
    }

    .item h4 {
        font-size: 11pt;
        font-family: yekan;
        color: rgba(59, 63, 62, 0.51);
        margin: 5px;
    }

    .initialize :first-child {
        display: block;
    }

    .initialize section .item h4 {
        position: relative;
        padding-right: 40px;

        margin-bottom: 20px;
    }

    .initialize section .item_countainer :first-child h4 span {
        background: url(<?=URL1?>images/slices.png) -152px -611px;
        display: block;
        width: 31px;
        height: 62px;
        position: absolute;
        top: -9px;
        right: -20px;
        cursor: pointer;
    }

    .initialize section .item_countainer :last-child h4 span {
        background: url(<?=URL1?>images/slices.png) -311px -611px;
        display: block;
        width: 31px;
        height: 62px;
        position: absolute;
        top: -13px;
        cursor: pointer;
        right: -20px;
    }

    .initialize section .item h4 span {
        background: url(<?=URL1?>images/slices.png) -260px -611px;
        display: block;
        width: 31px;
        height: 50px;
        position: absolute;
        top: -9px;
        right: -23px;
        cursor: pointer;
    }

    .item_countainer {
        margin-top: 20px;
        margin-right: 20px;
        border-right: solid 3px #f0f1f2;
    }

    .initialize section h4 {
        position: relative;

    }

    .initialize section h4 p {
        display: none;
    }

    .initialize section h4 i {

        display: inline-block;
        border-top: 1px solid #eee;
        position: absolute;
        top: 19px;
        right: 77px;
        width: 1082px;

    }

    .initialize section h4 div {
        z-index: 9;
        position: relative;
        display: inline-block;
        background: #fff;
    }

    .act2_one {
        background: url(<?=URL1?>images/slices.png) -97px -612px !important;

    }

    .act2_two {
        background: url(<?=URL1?>images/slices.png) -208px -611px !important;
    }

    .act2_two_one {
        background: url(<?=URL1?>images/slices.png) -205px -611px !important;
    }

    .two_two ul {
        padding: 0;
        width: 100%;
        float: right;

    }

    .two_two h4 {
        margin-right: 20px;
    }

    .two_two li {
        position: relative;
        float: right;

    }

    .two_two h4 span {
        display: block;
        position: relative;
        top: -16px;
        right: -20px;
        background: url(<?=URL1?>images/slices.png) -36px -652px no-repeat;
        width: 10px;
        height: 10px;
    }

    .first_row {
        display: inline-block;
        width: 195px;
        height: 45px;
        background: #f0f1f2;
        padding-right: 30px;
        margin: 10px 0;
        line-height: 38px;
        float: right;
    }

    .second_row {
        float: right;
        display: inline-block;
        width: 650px;
        height: 45px;
        background: #f7f9fa;
        padding-right: 30px;
        margin: 10px 0;
        line-height: 38px;
        margin-right: 30px;
    }

    .first_div {
        width: 510px;
        float: right;
        margin-right: 15px;

    }

    .second_div {
        width: 610px;
        float: right;
        margin-right: 30px;

    }

    .first_div p span {
        display: block;
        position: relative;
        top: -16px;
        right: -20px;
        background: url(<?=URL1?>images/slices.png) -36px -652px no-repeat;
        width: 10px;
        height: 10px;
    }

    .right_div {
        width: 200px;
        float: right;
    }

    .left_div {
        width: 310px;
        float: right;
    }

    .right_div ul {
        width: 100%;
        padding: 0;
        float: right;
    }

    .right_div ul li {
        margin: 5px 0;
        width: 100%;
    }

    .left_div ul {
        padding: 0;
        width: 100%;
        height: 10px;
        float: right;
        margin: 10px 0;
    }

    .left_div ul li {
        width: 64px;
        height: 100%;
        float: right;
        background: #eee;
        border-left: 1px solid #fff;

    }

    .left_div ul li span {
        display: block;
        height: 100%;
        background: green;
    }

    .left_div ul li span.full {

        width: 100%;
    }

    .second_div h4 {
        margin-top: 40px;
    }

    .second_div button {
        color: white;
        background: blue;
        width: 140px;
        height: 40px;
        border-radius: 5px;
        overflow: hidden;
        font-family: yekan;
        float: left;
        border: none;
    }

    #comments {
        float: right;
        width: 100%;
        margin-right: 10px;
        position: relative;
    }

    #comments > .line2 {
        right: 19px;
        top: 55px;
        width: 95%;
    }

    #comments p {
        position: relative;

    }

    #comments p > span {
        background: rgba(0, 0, 0, 0) url(<?=URL1?>"images/slices.png") no-repeat scroll -36px -652px;
        display: block;
        height: 10px;
        position: relative;
        right: -20px;
        top: 14px;
        width: 10px;
    }

    .comments {
        width: 100%;
        float: right;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    .head {
        width: 1150px;
        border-radius: 5px;
        overflow: hidden;
        margin: auto;
        background: #f5f6f7;
        height: 60px;
    }

    .head > .right2 {
        width: 215px;
        margin-right: 30px;
        float: right;
        height: 100%;

    }

    .head > .right2 > span {
        width: 100%;
        display: block;
        line-height: 20px;
        height: 30px;

    }

    .left2 {
        width: 300px;
        float: left;
        height: 100%;
        position: relative;
    }

    .left2 > .yekan.color2 {
        line-height: 50px;
        display: block;
        height: 100%;
        width: 100px;
        float: right;
    }

    .like {
        background: url(<?=URL1?>images/thumbs-up-hand-symbol.png);
        display: block;
        position: absolute;
        width: 16px;
        height: 16px;
        top: 15px;
        right: 119px;
    }

    .dislike {
        background: url(<?=URL1?>images/thumbs-down-silhouette.png);
        display: block;
        position: absolute;
        width: 16px;
        height: 16px;
        top: 20px;
        right: 215px;
    }

    .text {
        width: 95px;
        height: 100%;
        line-height: 50px;
        display: inline-block;
        float: right;
        text-align: center;
    }

    .body {
        width: 1150px;
        float: right;
        margin-right: 20px;
        background: #fafbfc;
        padding-top: 10px;
    }

    .right_div > ul {
        padding-right: 30px !important;
    }

    .body > .first_part > .left_div ul li span {

        background: rgba(102, 105, 115, 0.51) !important;
    }

    .ones {
        width: 100%;
        float: right;
    }

    .first_part {
        width: 50%;
        float: right;
        padding-right: 10px;
    }

    .second_part {
        width: 48%;
        float: right;
    }

    .twos {
        width: 100%;
        float: right;

        margin-top: 20px;

    }

    .twos span {
        width: 50%;
        float: right;
        height: 40px;

    }

    .threes {
        width: 100%;
        float: right;

        margin-top: 20px;
        margin-bottom: 10px;

    }

    .green {
        color: green;
    }

    .red2 {
        color: red;
    }

    .icone {
        background: rgba(0, 0, 0, 0) url(<?=URL1?>"images/slices.png") no-repeat scroll -36px -652px;
        display: block;
        height: 10px;
        position: relative;
        right: -20px;
        top: 17px;
        width: 10px;
    }

    #final {
        width: 100%;
        float: right;

    }

    #final p {
        margin-right: 10px;
        float: right;
    }

    textarea {

        height: 190px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 98%;
        float: right;

    }

    button {
        width: 100px;
        height: 40px;
        background: #2196f3;
        border-radius: 4px;
        text-align: center;
        font-family: yekan;
        color: white !important;
        overflow: hidden;
        border: none;
        float: left;
        margin-left: 20px;
        margin-top: 10px;
    }

    #questions {
        width: 98%;
        height: 65px;
        margin-top: 10px;
        margin-right: 5px;
        float: right;
    }

    .invar {
        width: 267px;
        height: 65px;
        float: right;

    }

    .invar i {
        background: rgba(0, 0, 0, 0) url(<?=URL1?>"images/slices.png") no-repeat scroll -36px -652px;
        display: block;
        height: 10px;
        position: relative;
        right: -18px;
        top: 17px;
        width: 10px;
    }

    .onvar {
        width: 580px;
        height: 100%;
        float: left;
    }

    .sort {
        display: block;
        width: 100px;
        height: 100%;
        color: blue !important;
        font-family: yekan;
        float: right;
        margin-left: 20px;
    }

    .onvar div {
        width: 150px;
        height: 100%;
        color: rgba(59, 63, 62, 0.51);
        font-family: yekan;
        float: right;
        cursor: pointer;
    }

    .onvar div i {
        display: block;
        width: 20px;
        height: 20px;

        border: 1px solid #ccc;
        border-radius: 100%;
        position: relative;
        top: -21px;
        right: 107px;
    }

    .sel {
        background: #2196f3 !important;
    }

    #q12 {

        float: right;
        width: 98%;
    }

    .up {
        background: #e8e9eb;
        width: 100%;
        height: 40px;
        border-radius: 5px;
        overflow: hidden;
        position: relative;
        float: right;
    }

    .up i {
        width: 28px;
        height: 20px;
        display: block;
        position: absolute;
        top: 8px;
        right: 1px;
        background: url(<?=URL1?>images/slices.png) -283px -127px no-repeat;
    }

    .up span {
        margin-right: 40px;
        line-height: 33px;
        display: inline-block;
        height: 100%;
    }

    .up div {
        width: 200px;
        height: 100%;
        float: left;
        line-height: 33px;
    }

    .down {
        background: #f5f6f7;
        width: 100%;
        padding-top: 10px;
        padding-bottom: 10px;
        float: right;
        margin-bottom: 20px;

    }

    #gallery {
        width: 900px;
        height: 600px;
        position: fixed;
        background: #fff;
        left: 0;
        top: 60px;
        right: 0;
        margin: auto;
        z-index: 21;
        display: none;

    }

    #dark {
        width: 100%;
        position: fixed;
        background: rgba(0, 0, 0, .3);
        top: 0;
        right: 0;
        height: 100%;
        z-index: 20;
        display: none;
    }

    .close {
        width: 30px;
        height: 30px;
        display: block;
        position: absolute;
        top: -3px;
        left: 11px;
        border: 1px solid #ccc;
        border-radius: 100%;
        background: url(<?=URL1?>images/slices.png) -133px -122px;
        cursor: pointer;
    }

    .close.active {
        display: none;
    }

    .header {
        position: relative;
        margin-right: 10px;
        margin-top: 5px;

    }

    .header > h4 {
        margin: 0;
    }

    .show {
        width: 700px;
        float: right;
        height: 100%;
        height: 550px;

    }

    .show > img {
        max-width: 100%;
        max-height: 100%;
    }

    .collection {
        width: 199px;
        float: left;
        height: 550px;
        margin-top: 10px;
        overflow-y: auto;

    }

    .collection > ul {
        padding: 0;
        width: 100%;

    }

    .li {
        width: 100%;
        height: 130px;
        border-bottom: 1px solid #ccc;
        border-right: 1px solid #ccc;
        text-align: center;
        cursor: pointer;
        opacity: .6;

    }

    .acttt {

        opacity: 1 !important;

    }

    .li > img {
        margin-top: 14px;
        max-height: 100%;
        max-width: 100%;
        cursor: pointer;

    }

    .item1 {
        display: none;
        height: 100%;
    }

    .tabe {
        width: 100%;
        padding: 0;
        height: 40px;
        float: right;
        margin-top: 10px;
        background: rgba(0, 0, 0, .2);
        border-radius: 5px;
        overflow: hidden;

    }

    .tabe li {
        float: right;
        width: 205px;
        line-height: 40px;
        text-align: center;
        color: white;
        border-left: 1px solid #e3e3e3;
        position: relative;

    }

    .tabe li > span {
        position: absolute;
        top: 12px;
        right: 6px;
        display: block;
        width: 22px;
        height: 22px;

    }

    .act {

        box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.15) !important;
        border-top: 2px solid blue !important;
        background: white !important;
        color: blue !important;
    }


</style>

<ul class="tabe yekan">
    <li class=" act">
        <span class="one "></span>
        نقد و بررسی تخصصی
    </li>
    <li>
        <span class="two"></span>
        مشخصات فنی
    </li>
    <li>
        <span class="tree"></span>
        نظرات کاربران
    </li>
    <li>
        <span class="four"></span>
        پرسش و پاسخ
    </li>

</ul>
<div class="initialize yekan color2">
    <section>

    </section>
    <section class="two_two">

    </section>
    <section>

    </section>
    <section id="final">

    </section>

</div>
<script>
    $('.onvar div').click(function () {

        $('.onvar div i').removeClass('sel');
        $('i', this).toggleClass('sel');
    });



    $('.tabe li').click(function () {
        $('.tabe li').removeClass('act');
        $('.initialize section').fadeOut(0);
        var index = $(this).index();
        var data = {'num': index}
        $.post('http://localhost:8080/digikalamvc/product/tab/<?= $product_info[0]['id']   ?>/<?= $product_info[0]['idcat']   ?>',data,function (msg) {
            $('.initialize section').eq(index).html(msg);
        });

        $(this).addClass('act');
        $('.initialize section').eq(index).fadeIn(200);
    });



</script>