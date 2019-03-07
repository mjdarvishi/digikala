<style>

    .discont {
        width: 180px;
        height: 28px;
        position: absolute;
        top: 17px;
        left: 245px;
        border-radius: 5px;
        overflow: hidden;

    }

    .right {
        width: 106px;
        display: block;
        height: 100%;
        float: right;
        background: red;
    }

    .left {
        width: 74px;
        display: block;
        height: 100%;
        float: right;
        background: rgba(255, 29, 14, 0.86);
    }

    .discont span {

        color: white;
        font-size: 8pt;
        font-family: yekan;
    }

    .right > span {
        display: inline-block;
        width: 52px;
        height: 100%;
        text-align: center;
    }

    .left > span {
        display: inline-block;
        width: 100%;
        height: 100%;
        text-align: center;
    }

    #detail {
        float: right;
        background: #FFFFFF;
        margin-top: 5px;
        overflow: hidden;
        border-radius: 4px;
    }

    .detail_right {
        width: 450px;
        float: right;

    }

    .detail_left {
        width: 750px;
        float: right;

    }

    .icon {
        width: 100%;
        height: 50px;
        position: relative;
        float: right;
    }

    #heart {
        display: block;
        width: 24px;
        height: 24px;
        background: url(<?=URL1?>images/heart.png);
        position: absolute;
        top: 13px;
        left: 45px;
    }

    #share {
        display: block;
        width: 24px;
        height: 24px;
        background: url(<?=URL1?>images/share.png);
        position: absolute;
        top: 13px;
        left: 1px;
    }

    #galarry > img {
        float: left;
        display: block;
        width: 350px;
        height: 350px;
        margin-left: 50px;
    }

    #galarry {
        float: left;
        width: 100%;

    }

    #galarry ul {
        padding: 0;
        float: right;
        width: 440px;
        margin: 10px 0;

    }

    #galarry ul li {
        width: 77px;
        height: 77px;
        float: left;
        margin-right: 12px;

    }

    #galarry ul li img {
        width: 77px;
        height: 77px;
        display: block;
        border: 1px solid #ccc;
        border-radius: 4px;
        overflow: hidden;
        float: left;

    }

    #galarry ul li span {
        width: 77px;
        height: 77px;
        display: block;
        border: 1px solid #ccc;
        position: relative;
        border-radius: 4px;
        overflow: hidden;
        float: left;
    }

    .etsetra {
        width: 16px;
        height: 16px;
        background: url(<?=URL1?>images/punctuation-mark.png);
        position: absolute;
        top: 26px;
        right: 29px;

    }

    .left_title {
        width: 100%;
        height: 50px;
        font-family: yekan;
        font-size: 11pt;
        color: rgba(59, 63, 62, 0.86);
        margin-right: 10px;
        margin-top: 10px;
        float: right;

    }

    .stars {
        float: left;
        margin-top: 5px;
        margin-left: 58px;
        width: 96px;
        text-align: center;
    }

    .gray {
        width: 96px;
        height: 16px;
        background: url(<?=URL1?>images/star1.png) repeat;
        overflow: hidden;
        position: relative;
    }

    .red {
        width: 75%;
        height: 16px;
        background: url(<?=URL1?>images/star.png) repeat;
        position: absolute;
        top: 0;
        left: 0;

    }

    .right_one {
        width: 415px;
        float: right;
        margin-right: 10px;
        position: relative;
    }

    .left_one {
        width: 300px;
        float: left;
    }

    .colorss span {
        display: inline-block;
        width: 20px;
        height: 20px;
        border-radius: 100%;
        border: 1px solid #ccc;
        position: relative;
        top: 5px;
        left: 4px;

    }

    .selected {
        border: 1px solid #ccc;
        border-radius: 5px;

    }

    .colorss div {

        width: 70px;
        display: inline-block;
        margin-right: 6px;
        text-align: center;
        cursor: pointer;

    }

    .black::before {
        content: " ";
        display: block;
        width: 16px;
        height: 16px;
        background: url(<?=URL1?>images/slices.png) no-repeat -168px -80px;

    }

    #black {
        background: black;
    }

    .garanty {
        width: 389px;
        height: 37px;
        border: 1px solid #cccccc;
        position: relative;
        cursor: pointer;

    }

    .check {
        display: block;
        width: 24px;
        height: 24px;
        background: url(<?=URL1?>images/slices.png) no-repeat -138px -79px;
        position: absolute;
        top: 6px;
        right: 7px;
    }

    .garanty .yekan {
        margin-right: 60px;
        line-height: 34px;
    }

    .check_bottom {
        display: block;
        width: 22px;
        height: 17px;
        background: url(<?=URL1?>images/slices.png) no-repeat -31px -461px;
        position: absolute;
        top: 10px;
        left: 7px;

    }

    .sub_garanty {
        width: 389px;
        height: 111px;
        border: 1px solid #ccc;
        border-top: none;
        display: none;
        cursor: pointer;
    }

    .sub_garanty ul {
        width: 100%;
        padding: 0;

    }

    .sub_garanty ul li {
        width: 100%;
        height: 37px;
        padding-right: 5px;
    }

    .new_icon {
        display: block;
        width: 22px;
        height: 17px;
        background: url(<?=URL1?>images/slices.png) no-repeat -31px -750px;
        position: absolute;
        top: 10px;
        left: 7px;
    }

    .price {
        width: 100%;
        height: 40px;
        margin-top: 20px;

    }

    .price_one {
        display: inline-block;
        height: 100%;
        width: 130px;
        position: relative;
        float: right;
    }

    .line2 {
        position: absolute;
        right: 26px;
        top: 11px;
        width: 20%;
        border-top: 1px solid #ccc;
    }

    .price_two {
        position: relative;
        height: 100%;
        width: 200px;
        display: inline-block;
        float: right;
    }

    .price_two .discont {
        top: 0;
        right: -4px;
        border-radius: 0px;
    }

    .discont::before {
        content: " ";
        display: block;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 5px 10px 5px 0;
        border-color: transparent #FFFFFF transparent transparent;
        position: absolute;
        top: 8px;
        right: 0;

    }

    .diagram {
        width: 100%;
        height: 40px;
        margin-top: 10px;
        position: relative;
        padding-right: 23px;
    }

    .state {
        display: block;
        width: 16px;
        height: 16px;
        background: url(<?=URL1?>images/stats.png);
        position: absolute;
        top: 6px;
        right: 1px;
    }

    .diagram .new_price {
        color: green;
        font-size: 11pt;
        margin-right: 8px;
    }

    .buttoms {
        width: 100%;
        height: 40px;
        margin-top: 10px;
    }

    .first_bottom {
        display: inline-block;
        width: 135px;
        height: 100%;
        position: relative;
        background: rgba(0, 0, 0, 0.59);
        border-radius: 5px;
        overflow: hidden;
        line-height: 35px;
        padding-right: 20px;
        color: white !important;

    }

    .first_bottom > span {
        display: block;
        position: absolute;
        width: 16px;
        height: 16px;
        left: 10px;
        top: 11px;
        background: url(<?=URL1?>"images/slices.png") no-repeat scroll -31px -461px;
    }

    .second_bottom {
        display: inline-block;
        width: 185px;
        height: 100%;
        position: relative;
        background: rgba(47, 120, 32, 0.91);
        border-radius: 5px;
        overflow: hidden;
        line-height: 35px;
        margin-right: 20px;
        text-align: center;
        color: white !important;

    }

    .second_bottom > span {
        display: block;
        position: absolute;
        width: 16px;
        height: 16px;
        right: 16px;
        top: 11px;
        background: url(<?=URL1?>"images/shopping-cart2.png") no-repeat scroll;
    }

    #box_payment {
        width: 749px;
        height: 60px;
        background: #fff;
        margin-top: 10px;
        border-radius: 4px;

        overflow: hidden;
        position: absolute;
        bottom: -111px;
        left: -325px;
    }

    #box_payment ul {
        padding: 0;
    }

    #box_payment ul li a span {
        display: block;
        float: right;
        line-height: 50px;
        margin-right: 5px;
        height: 100%;

    }

    #box_payment ul li a img {
        margin-top: 15px;
        float: right;
    }

    #box_payment ul li a {
        height: 100%;
        width: 149px;
        display: block;
    }

    #box_payment ul li {
        height: 100%;
        width: 149px;
        float: right;
    }

    #box_payment ul {
        height: 100%;
    }

    #box_payment ul li a:hover {
        color: #cd360d;
        cursor: pointer;
    }

</style>
<div id="detail">
    <div class="detail_right">
        <div class="icon">
            <i id="heart"></i>
            <i id="share"></i>
        </div>
        <div id="galarry">
            <img id="image_zoooom" src="images/products/<?= $product_info[0]['id']?>/product_350.jpg"

                 data-zoom-image="images/products/<?= $product_info[0]['id']?>/product.jpg">
            <ul>
                <?php
                $gallery=$param[2];
                foreach ($gallery as $row){


                ?>
                <li>
                    <img src="images/products/<?= $product_info[0]['id']?>/gallery/midume/<?=$row['img']?>">

                </li>

                <?php   }  ?>

                <li>
                        <span>
                            <div class="etsetra"></div>
                        </span>
                </li>

            </ul>
        </div>
    </div>
    <div class="detail_left">
        <div class="left_title">
                <span>

<?= $product_info[0]['title']; ?>
                    <div class="stars">
                                <div class="gray">
                                    <div class="red"></div>

                                </div>
   <span class="yekan color2">4رای  از 85 رای</span>
                            </div>
                </span>
        </div>
        <div class="right_one">
            <p class="yekan color2"> انتخاب رنگ</p>
            <div class="colorss color2 yekan">
                <?php foreach ($product_info[3] as $color) { ?>

                    <div class="selected">
                        <span class="black" style="background-color:  <?= $color['hex']; ?>"></span>

                        <?= $color['title']; ?>

                    </div>

                <?php } ?>
            </div>
            <h4 class="yekan color2">انتخاب گارانتی</h4>
            <div class="garanty">
                <span class="check"></span>
                <span class="color2 yekan">
                       <?= $product_info[4][1]['title'] ?>
                    </span>
                <span id="first" class="check_bottom"></span>
            </div>
            <div class="sub_garanty">

                <ul class="yekan color2">
                    <?php foreach ($product_info[4] as $gar) { ?>
                        <li data_id=" <?= $gar['id']; ?>">
                            <?= $gar['title']; ?>
                        </li>
                    <?php } ?>
                </ul>

            </div>
            <div class="price">
                    <span class="price_one color2 yekan">
        قیمت:   <?= $product_info[0]['price']; ?>  تومان
                        <div class="line2"></div>
                    </span>
                <span class="price_two color2 yekan">
 <div class="discont">
            <span class="right">
               <span><?= $product_info[0]['discount']; ?></span>
               <span>هزار تومان</span>
            </span>
            <span class="left">
                <span> تخفیف</span>
            </span>
        </div>
                    </span>
            </div>
            <div class="diagram color2 yekan">
                <span class="state"></span>
                قیمت برای شما:
                <span class="new_price"><?= $product_info[1] ?> تومان</span>
            </div>
            <div class="buttoms  yekan color2">
                    <span class="first_bottom">
مقایسه کن
                        <span></span>
                    </span>
                <span onclick="addtobasket('<?= $param['idpro'] ?>')" class="second_bottom">
                        افزودن به سبد خرید
                        <span></span>
                    </span>
            </div>
            <script>
                function addtobasket(idpro) {
                    $.post('http://localhost:8080/digikalamvc/product/addtobasket/<?= $param['idpro'] ?>',function (msg) {

                    });
                }
            </script>
            <div id="box_payment">
                <ul>
                    <li>
                        <a class="yekan fontsm">
                            <img src="images/payment-method.png">
                            <span>  پرداخت در محل </span>

                        </a>
                    </li>
                    <li>
                        <a class="yekan fontsm">
                            <img src="images/carrying-christmas-tree.png">
                            <span>  تحویل اکسپرس </span>

                        </a>
                    </li>
                    <li>
                        <a class="yekan fontsm">
                            <img src="images/garenti.png">
                            <span>  ضمانت اصل بودن کالا</span>

                        </a>
                    </li>
                    <li>
                        <a class="yekan fontsm">
                            <img src="images/quality.png">
                            <span>تضمین بهترین قیمت </span>

                        </a>
                    </li>
                    <li>
                        <a class="yekan fontsm">
                            <img src="images/weekly-calendar.png">
                            <span>٧ روز ضمانت بازگشت </span>

                        </a>
                    </li>
                </ul>
            </div>
        </div>


    </div>

</div>
<script>
    $('.colorss >div').click(function () {

        $(this).toggleClass('selected');
        $(this).find('span').toggleClass('black');
        $(this).siblings().toggleClass('selected');
        $(this).siblings().find('span').toggleClass('black');

    });
    $('.garanty').click(function () {
        $('.sub_garanty').slideToggle();
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


    (function ($) {
        $(window).on("load", function () {
            $(".collection").mCustomScrollbar();
        });
    })(jQuery);


    $('.collection').mCustomScrollbar();

    $("#image_zoooom").ezPlus({'zoomWindowOffsetX': -800});
</script>