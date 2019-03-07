<style>
    #slider {
        height: 310px;
        margin-top: 10px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
        background: #fff;

    }

    #slider_main {
        height: 260px;
    }

    #slider_main img {
        height: 100%;
        width: 100%;
    }

    #slider_nav {
        height: 51px;
        background: rgba(0, 0, 0, .6);
    }

    .picture_slid {
        display: none;
    }

    #icon_slider {
        width: 32px;
        height: 32px;
        display: block;
        position: absolute;
        top: 130px;
        right: 25px;
        background: url(<?=URL1?>images/next.png);
        cursor: pointer;
        z-index: 2;

    }

    #icon_slider_back {
        width: 32px;
        height: 32px;
        display: block;
        position: absolute;
        top: 130px;
        left: 25px;
        background: url(<?=URL1?>images/back.png);
        cursor: pointer;
        z-index: 2;

    }

    #slider {
        position: relative;

    }

    #slider_nav_ul {
        padding: 0;
        height: 100%;
    }

    #slider_nav_ul li {
        display: block;
        width: 178px;
        float: right;
        height: 100%;

    }

    #slider_nav_ul li a {
        display: block;
        width: 178px;
        line-height: 40px;
        height: 100%;
        text-align: center;
        cursor: pointer;
        position: relative;
    }

    .active {
        background: white;
        color: #666973 !important;
    }

    .active::after {
        content: " ";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 7.5px 16px 7.5px;
        border-color: transparent transparent #ffffff transparent;
        position: absolute;
        top: -15px;
        right: 0;
        left: 0;
        margin: 0 auto;
    }
    .color_font1{
        color: white;
    }

</style>
<div id="slider">
    <spa id="icon_slider"></spa>
    <spa id="icon_slider_back"></spa>
    <div id="slider_main">
        <?php
        $param1=$param[0];
foreach ($param1 as $slider){

   ?>
        <a href="<?= $slider['link'] ?>" class="picture_slid" id="first_picture">
            <img src="<?= $slider['img'] ?>">
        </a>
        <?php
}
?>







    </div>
    <div id="slider_nav">
        <ul id="slider_nav_ul">
            <li>
                <a class="fontsm yekan color_font1">
                    نمایشگاه کتاب انلاین
                </a>
            </li>
            <li>
                <a class="fontsm yekan color_font1">
                    جشنواره ی صوتی تصویری
                </a>
            </li>
            <li>
                <a class="fontsm yekan color_font1 ">
                    اشپزی سالم
                </a>
            </li>
            <li>
                <a class="fontsm yekan color_font1">
                    برترین تبلت
                </a>
            </li>
            <li>
                <a class="fontsm yekan color_font1">
                    سازهای کوبه ای
                </a>
            </li>
        </ul>
    </div>
</div>
<script>
    var tagSlide = $('#slider');
    var tagSlideItem = tagSlide.find('.picture_slid');
    var nextSlid = 1;
    var size = tagSlideItem.length;
    var sliderNav = tagSlide.find('li a');
    function slider() {
        if (nextSlid > size) {
            nextSlid = 1;

        }
        if (nextSlid < 1) {
            nextSlid = size;

        }

        tagSlideItem.fadeOut(0);
        tagSlideItem.eq(nextSlid - 1).fadeIn(400);
        sliderNav.removeClass('active');
        sliderNav.eq(nextSlid - 1).addClass('active');
        nextSlid++;
    }
    slider();
    var interval = setInterval(slider, 5000);

    function gotonext() {

        slider();
    }
    function gotoprevios() {

        nextSlid = nextSlid - 2;
        slider();

    }
    function gotoslid(index) {
        clearInterval(interval);
        nextSlid = index;
        slider();

    }
    $('#slider_nav_ul').click(function () {
        clearInterval(interval);
        interval = setInterval(slider, 5000);
    });
    $('#icon_slider').click(function () {
        clearInterval(interval);
        interval = setInterval(slider, 5000);
    });
    $('#icon_slider_back').click(function () {
        clearInterval(interval);
        interval = setInterval(slider, 5000);
    });


    $('#slider_nav_ul li').click(function () {
        var index = $(this).index();
        gotoslid(index + 1);
    });
    $('#icon_slider').click(function () {
        gotonext();
    });
    $('#icon_slider_back').click(function () {
        gotoprevios();
    });
    $('#buttom').click(function () {
        slider();
    });

</script>