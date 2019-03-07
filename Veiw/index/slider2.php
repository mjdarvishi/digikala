<style>
    #slider2 {
        width: 890px;
        height: 315px;
        background: #fff;
        margin-top: 10px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 3px 6px #ccc;
        position: relative;
    }

    #content_slider2 {
        float: right;
        width: 705px;
        height: 100%;

    }

    #nav_slider2 {
        width: 184px;
        float: left;
        border-right: 1px solid #ccc;
        height: 100%;
        cursor: pointer;
    }

    #nav_slider2 ul {
        padding: 0;

    }

    #nav_slider2 ul li {
        text-align: center;
        height: 45px;
        width: 100%;
    }

    #nav_slider2 ul li:hover {
        background: #fdedf9;
    }

    #nav_slider2 ul li a {
        height: 100%;
        width: 100%;
        display: block;
        position: relative;
        line-height: 40px;
    }

    #nav_slider2 ul li a span {
        position: absolute;
        top: 13px;
        right: 162px;
        width: 16px;
        height: 16px;
        float: left;
        background: url(<?=URL1?>images/locked.png) no-repeat;
    }

    .righte {
        float: right;
        width: 400px;
        height: 100%;

    }

    .left {
        float: left;
        width: 305px;
        height: 100%;
    }

    #content_slider2 > a {
        display: block;
        height: 100%;
        width: 100%;
        position: relative;
    }

    .left p {
        text-align: center;
    }

    .left img {

        position: absolute;
        top: 67px;
        left: -272px;

    }

    .righte p {
        color: red !important;
        padding-right: 45px;
        padding-top: 15px;
        font-size: 15pt;
        margin: 0;
    }

    .price {
        width: 227px;
        height: 34px;
        padding-right: 45px;
        position: relative;
    }

    .price_right {
        width: 75px;
        height: 100%;
        float: right;
        background: #666973;
        position: relative;
        color: #fff;
        text-align: center;
    }

    .price_left::after {
        content: " ";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 7.5px 12px 7.5px 0;
        border-color: transparent #666973 transparent transparent;
        position: absolute;
        top: 8px;
        left: 142px;
        z-index: 2;

    }

    .price_right::after {
        content: " ";
        position: absolute;
        top: 17px;
        left: 0px;
        width: 100%;
        height: 0;
        border-bottom: solid 1px #000;
        transform: rotate(-22deg);

    }

    .price_left {
        width: 150px;
        height: 100%;
        float: right;
        background: red;
        margin-right: 2px;
        color: #fff;
        text-align: center;
    }

    .price_right::before {
        content: " ";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 7.5px 12px 7.5px 0;
        border-color: transparent #ffffff transparent transparent;
        position: absolute;
        top: 8px;
        left: -13px;

    }

    .price span {
        display: block;
        float: right;
        margin-top: 11px;

    }

    .flipTimer, .flipTimer div {
        direction: ltr !important;
        text-align: left !important;
    }

    .flipTimer {
        position: absolute;
        bottom: -1px;
        right: -104px;
        transform: scale(.4);
    }

    #finished {
        color: red;
        position: absolute;
        text-align: center;
        line-height: 235px;
        top: 0;
        right: 0;
        font-size: 29pt;
        font-family: yekan;
        background: rgba(0, 0, 0, .001);
        width: 706px;
        height: 100%;
        display: none;
        z-index: 2;
    }

    #content_slider2 a {
        display: none;
    }

    .active2 {
        background: red;
        color: white !important;
        position: relative;
    }

    .active2::before {
        position: absolute;
        content: " ";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 23px 0 23px 17px;
        border-color: transparent transparent transparent red;
        right: -16px;
        top: 0;
        position: absolute;

    }
</style>
<div id="slider2">
    <div id="finished">تمام شد!</div>
    <div class="flipTimer">
        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>
    </div>
    <div id="content_slider2">
        <?php
        $param2=$param[1][0];
        foreach ($param2 as $slider1){

        ?>
        <a href="<?= URL3  ?>product/index/<?= $slider1['id']  ?>">
            <div class="righte">
                <p class="yekan ">پیشنهاد شگفت انگیز امروز </p>
                <div class="price">
                    <div class="price_right yekan fontlg"><?= $slider1['price']; ?></div>
                    <div class="price_left yekan fontlg"><?= $slider1['total']; ?> هزار تومان</div>
                    <span class="yekan fontsm">حمل آسان و وزن بسیار سبک کالسکه</span>
                    <span class="yekan fontsm"> پشتی نشیمن کالسکه قابل تنظیم در چهار حالت</span>
                    <span class="black fontsm">فرصت باقی مانده تا پیشنهاد ویژه</span>


                </div>
            </div>
            <div class="left">
                <p class="yekan fontlg">
                    <?= $slider1['title']; ?>
                </p>
                <img src="images/products/<?= $slider1['id']?>/product_220.jpg">
            </div>
        </a>
        <?php }  ?>
    </div>

    <div id="nav_slider2">
        <ul class="yekan fontsm">
            <?php
            $param3=$param[1][0];
            foreach ($param3 as $slider2){

            ?>
            <li>
                <a><?= $slider2['title']?></a>
            </li>
            <?php }  ?>
        </ul>
    </div>
</div>


<script>
    //    slider2

    var tagSlide2 = $('#slider2');
    var tagSlideItem2 = tagSlide2.find('#content_slider2 a');
    var nextSlid2 = 1;
    var size2 = tagSlideItem2.length;
    var sliderNav2 = tagSlide2.find('#nav_slider2 a');

    function slider2() {
        if (nextSlid2 > size2) {
            nextSlid2 = 1;

        }
        if (nextSlid2 < 1) {
            nextSlid2 = size2;

        }

        tagSlideItem2.fadeOut(0);
        tagSlideItem2.eq(nextSlid2 - 1).fadeIn(400);
        sliderNav2.removeClass('active2');
        sliderNav2.eq(nextSlid2 - 1).addClass('active2');
        nextSlid2++;
    }
    slider2();

    var interval2 = setInterval(slider2, 5000);


    function gotoslid2(index2) {
        clearInterval(interval2);
        nextSlid2 = index2;
        slider2();

    }


    $('#nav_slider2').click(function () {
        clearInterval(interval2);
        interval2 = setInterval(slider2, 5000);
    });
    $('#nav_slider2 li').click(function () {
        var index2 = $(this).index();
        gotoslid2(index2 + 1);
    });
    $('.flipTimer').flipTimer({
        direction: 'down',
        date:' <?= $param[1][1]?>',

        days: false


    });
</script>