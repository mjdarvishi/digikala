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

    .head {
        position: relative;
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
        background: green;
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
        width: 400px;
        float: left;
        margin-left: 10px;
        margin-top: 20px;
        border: 3px solid greenyellow;
        padding: 5px;
        border-radius: 5px;
        position: relative;

    }

    .top {
        border-bottom: 3px solid greenyellow;
    }

    .bottom {

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

    .point {
        cursor: pointer;
    }


</style>

</head>
<body style="margin: 0 ;background: #eee">
<div id="maine"
     style="width: 1200px;margin-right: auto;margin-top: 10px;margin-left: auto;background: #fff;padding: 5px;">

    <div class="head">
        <h4>سبد خرید شما در دی جی کالا</h4>
        <a href="<?= URL3 ?>shopping1"><span>خرید خود را نهایی کنید</span></a>
    </div>
    <?php
    $basket = $param['basket'];
    ?>
    <div class="contentt">
        <table cellspacing="0">
            <thead>
            <tr class="first">
                <td>شرح محصول</td>
                <td>تعداد</td>
                <td>قیمت واحد</td>
                <td>قیمت کل</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <?php


            foreach ($basket as $row) {
                ?>


                <tr>
                    <td>
                        <div class="righh">
                            <img src="<?= URL1 ?>images/products/<?= $row['id'] ?>/product_220.jpg">
                        </div>
                        <div class="leftt">
                            <p>
                                <?= $row['title'] ?>
                            </p>
                            <p>
                                <span class="red_color"></span>
                                <?= $row['colortitle'] ?>

                            </p>
                            <p>
                                <?= $row['garantytitle'] ?>
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="containerofgarenty">
                            <div class="garanty">

                        <span class="color2 yekan">
                      <?= $row['num'] ?>
                    </span>
                                <span id="first" class="check_bottom"></span>
                            </div>
                            <div class="sub_garanty">
                                <ul class="yekan color2">
                                    <?php for ($i = 1; $i < 4; $i++) {


                                        ?>

                                        <li onclick="updateBasket(<?= $i ?>,<?= $row['basketrow'] ?>)">
                                            <?= $i ?>
                                        </li>


                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </td>
                    <td>
                        <?= $row['price'] ?>تومان
                    </td>
                    <td>
                        <?= $row['num'] * $row['price'] ?>تومان
                    </td>
                    <td class="point" onclick="removeBasket(<?= $row['basketrow'] ?>)">
                        <img src="images/Delete.gif">
                    </td>
                </tr>

                <?php

            }
            ?>
            </tbody>
        </table>
    </div>

    <div class="final_price">
        <div class="top yekan color3">
            <span>جمع مبلغ خرید شما</span>
            <span class="span_left totalprice"><?= $param['price'] ?>تومان</span>
        </div>
        <div class="bottom yekan color3">
            <span>جمع مبلغ خرید شما</span>
            <span class="span_left totalprice"><?= $param['price'] ?>تومان</span>
        </div>


    </div>

</div>

<script>
    function removeBasket(proid) {
        var data = {};
        var url = '<?=URL3  ?>shopping/deletebasket/' + proid;
        $.post(url, data, function (msg) {
            var basket = msg[0];
            var total = msg[1];
            $('table tbody tr').remove();
            $.each(basket, function (index, value) {

                var tag = '<tr><td><div class="righh"><img src="<?= URL1 ?>images/products/' + value['id'] + ' /product_220.jpg"></div><div class="leftt"><p>' + value['title'] + '</p><p><span class="red_color"></span>color:' + value['colortitle'] + '</p><p>' + value['garantytitle'] + '</p></div></td><td> <div class="containerofgarenty"><div class="garanty"><span class="color2 yekan">' + value['num'] + '</span><span id="first" class="check_bottom"></span></div><div class="sub_garanty"><ul class="yekan color2"><?php for ($i = 1;$i<4;$i++){?><li onclick="updateBasket(<?= $i ?>,' + value['basketrow'] + ')"><?= $i ?></li><?php } ?></ul></div></div></td><td>' + value['price'] + 'تومان</td><td>' + value['price'] * value['num'] + 'تومان </td><td class="point" onclick="removeBasket(' + value['basketrow'] + ')"><img src="images/Delete.gif"></td></tr>';


                $('table tbody').append(tag);
            });
            $('.totalprice').text(total);
            $('.garanty').click(function () {
                $(this).next().slideToggle(200);
                $(this).find('#first').toggleClass('new_icon');
                $(this).find('#first').toggleClass('check_bottom');


            });

            $('.sub_garanty li').click(function () {
                var text = $(this).text();
                var currentelement = $(this).parent().parent().prev().children('.yekan');
                var element = $(this).parent().parent();
                $(currentelement).text(text);
                $(element).slideToggle();
                $('.garanty').find('#first').toggleClass('new_icon');
                $('.garanty').find('#first').toggleClass('check_bottom');
            });


        }, 'json');

    }



    function updateBasket(i, basketrow) {
        var data = {'row': basketrow,'num': i};

        $.post('<?=  URL3  ?>shopping/update', data, function (msg) {
            var basket = msg[0];
            var total = msg[1];
            $('table tbody tr').remove();

            $.each(basket, function (index, value) {

                var tag = '<tr><td><div class="righh"><img src="<?= URL1 ?>images/products/' + value['id'] + ' /product_220.jpg"></div><div class="leftt"><p>' + value['title'] + '</p><p><span class="red_color"></span>color:' + value['colortitle'] + '</p><p>' + value['garantytitle'] + '</p></div></td><td> <div class="containerofgarenty"><div class="garanty"><span class="color2 yekan">' + value['num'] + '</span><span id="first" class="check_bottom"></span></div><div class="sub_garanty"><ul class="yekan color2"><li>1</li><li>2</li><li>3</li></ul></div></div></td><td>' + value['price'] + 'تومان</td><td>' + value['price'] * value['num'] + 'تومان </td><td class="point" onclick="removeBasket(' + value['basketrow'] + ')"><img src="images/Delete.gif"></td></tr>';

                $('table tbody').append(tag);
                $('.garanty').click(function () {
                    $(this).next().slideToggle(200);
                    $(this).find('#first').toggleClass('new_icon');
                    $(this).find('#first').toggleClass('check_bottom');


                });

                $('.sub_garanty li').click(function () {
                    var text = $(this).text();
                    var currentelement = $(this).parent().parent().prev().children('.yekan');
                    var element = $(this).parent().parent();
                    $(currentelement).text(text);
                    $(element).slideToggle();
                    $('.garanty').find('#first').toggleClass('new_icon');
                    $('.garanty').find('#first').toggleClass('check_bottom');
                });

            });
            $('.totalprice').text(total);
        },'json');
    }
    $('.garanty').click(function () {
        $(this).next().slideToggle(200);
        $(this).find('#first').toggleClass('new_icon');
        $(this).find('#first').toggleClass('check_bottom');


    });

    $('.sub_garanty li').click(function () {
        var text = $(this).text();
        var currentelement = $(this).parent().parent().prev().children('.yekan');
        var element = $(this).parent().parent();
        $(currentelement).text(text);
        $(element).slideToggle();
        $('.garanty').find('#first').toggleClass('new_icon');
        $('.garanty').find('#first').toggleClass('check_bottom');
    });


</script>
