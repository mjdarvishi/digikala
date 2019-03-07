<style>
    .sidebar {
        width: 250px;
        border: 1px solid #ccc;
        float: right;
        margin-top: 15px;
        margin-right: 17px;
    }
    .sidebar > h3 {
        width: 245px;
        height: 30px;
        background: #666;
        font-family: yekan;
        margin: 0;
        color: white;
        line-height: 21px;
        padding-right: 5px;
        font-size: 10pt;
        position: relative;
    }

    .sidebar > h3 > span {
        display: block;
        width: 16px;
        height: 16px;
        position: absolute;
        top: 8px;
        left: 10px;
        background: url(<?=URL1?>images/arrow.png) no-repeat;
    }
    .sidebar ul {
        padding-top: 4px;
        padding-right: 15px;

    }

    .sidebar ul span {
        display: inline-block;
        width: 16px;
        height: 16px;
        position: relative;
        top: 8px;
        left: 3px;
        background: url(<?=URL1?>images/left-arrow.png) no-repeat;
    }

    .line {

        border-top: solid 1px #ccc;
        margin: 15px 5px;
        float: right;
        width: 95%;
    }

    .check_box {
        width: 16px !important;
        height: 16px !important;
        border: solid 1px #ccc;
        border-radius: 4px;
        display: block;
        position: absolute;
        top: 6px;

    }

    .check {
        width: 16px;
        height: 16px;
        display: inline-block;
        top: 4px;
        right: -3px;
        z-index: 2;
        position: relative;
        opacity: 0;
        cursor: pointer;
    }

    .checked {
        background: url(<?=URL1?>images/tick.png) #fff no-repeat;
        border: 1px solid #ccc;

    }
    .product_color {
        margin-left: 5px;
        display: inline-block;
        width: 5px;
        height: 11px;
        position: relative;
        top: 3px;
        right: 2px;
    }

    .second_ul li {
        position: relative;
    }


</style>
<div class="sidebar">
    <h3>
        گوشی موبایل
        <span></span>
    </h3>
    <ul id="first_ul">
        <li class="color1">

            کالای دیجیتال
            <ul>
                <li class="color2">
                    <span></span>
                    موبایل
                    <ul>
                        <li>
                            <span></span>
                            گوشی موبایل
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

    </ul>
    <div class="line"></div>
    <ul class="second_ul">
        <li class="color1">
            بر اساس نوع
        </li>
        <li class="color2">
            <label class="check_box"></label>
            <input class="check" type="checkbox">
            آلتو
        </li>
        <li class="color2">
            <label class="check_box"></label>
            <input class="check" type="checkbox">
            باريتون
        </li>
        <li class="color2">
            <label class="check_box"></label>
            <input class="check" type="checkbox">
            تنور
        </li>
        <li class="color2">
            <label class="check_box"></label>
            <input class="check" type="checkbox">
            سوپرانو
        </li>

    </ul>
    <div class="line"></div>
    <ul class="second_ul">
        <li class="color1">
            بر اساس سازنده
        </li>
        <li class="color2">
            <label class="check_box"></label>
            <input class="check" type="checkbox">
            آلتو
        </li>
        <li class="color2">
            <label class="check_box"></label>
            <input class="check" type="checkbox">
            باريتون
        </li>
        <li class="color2">
            <label class="check_box"></label>
            <input class="check" type="checkbox">
            تنور
        </li>
        <li class="color2">
            <label class="check_box"></label>
            <input class="check" type="checkbox">
            سوپرانو
        </li>

    </ul>
    <div class="line"></div>
    <ul class="second_ul">
        <li class="color1">
            بر اساس رنگ
        </li>
        <li class="color2">
            <label class="check_box"></label>
            <input class="check" type="checkbox">
            <div class="product_color" style="background-color: yellow"></div>
            زرد
        </li>
        <li class="color2">
            <label class="check_box"></label>
            <input class="check" type="checkbox">
            <div class="product_color" style="background-color: green"></div>
            سبز
        </li>
        <li class="color2">
            <label class="check_box"></label>
            <input class="check" type="checkbox">
            <div class="product_color" style="background-color: orange"></div>
            نارنجی
        </li>
        <li class="color2">
            <label class="check_box"></label>
            <input class="check" type="checkbox">
            <div class="product_color" style="background-color: purple"></div>
            بنفش
        </li>

    </ul>
    <div class="line"></div>
</div>
<script>
    $('.check').click(function () {

        if ($(this).is(':checked')) {


            $(this).parents('.color2').find('.check_box').addClass('checked');
        } else
            $(this).parents('.color2').find('.check_box').removeClass('checked');
    });
</script>