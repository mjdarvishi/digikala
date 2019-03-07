<!DOCTYPE html>

<script src="js/city.js"></script>
<script src="js/mahale.js"></script>

<style>


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

    #maine::after {
        content: " ";
        clear: both;
        display: block;
    }

    .btn2 {
        width: 170px;
        height: 37px;
        display: block;
        position: relative;
        top: -53px;
        left: -982px;
        background: gray;
        border-radius: 5px;
        color: #fff;
        text-align: center;
        font-family: yekan;
        font-size: 10pt;
        line-height: 37px;
        box-shadow: 1px 1px 3px #ccc;
        cursor: pointer;
    }

    .color3 {
        color: rgba(59, 63, 62, 0.89);
        font-size: 11pt;
    }

    #head {
        margin-top: 20px;
        float: right;
        width: 100%;
    }

    #head h4 {
        padding-right: 20px;
    }

    #content table {
        width: 100%;
    }

    #content {
        width: 100%;
    }

    table td {
        border-bottom: 1px solid #eee;
        border-left: 1px solid #eee;
        padding: 5px;
    }

    .cir {
        width: 15px;
        height: 15px;
        border: 1px solid #ccc;
        border-radius: 100%;
        display: block;
        margin: auto;
    }

    .act .cir {
        background: blue;
        border: 1px solid blue;
        position: relative;
    }

    .act .cir::after {
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

    .act .tranggle {
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 42px 42px 0;
        border-color: transparent #48b51d transparent transparent;

        position: absolute;
        top: 1px;
        right: 1px;

    }

    .parent {
        position: relative;
    }

    .send {
        width: 100%;
    }

    .contain_send {
        width: 100%;
        margin-top: 60px;

    }

    .contain_send h4 {
        padding-right: 20px;
    }

    .send p {
        float: right;
        margin-right: 20px;
    }

    .send img {
        float: right;
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
        top: 9px;
        left: 11px;
        border: 1px solid #ccc;
        border-radius: 100%;
        background: url(<?=URL1?>images/slices.png) -133px -122px;
        cursor: pointer;
    }

    .close.active {
        display: none;
    }

    #gallery {
        width: 600px;
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

    .row {
        width: 100%;
        float: right;
        font-family: yekan;
        padding: 9px;
        margin-top: 15px;
        margin-right: 0 !important;
    }

    .row > .right {
        width: 225px;
        float: right;
    }

    .row > .left {
        float: right;
        width: 350px;

    }

    .row > .right > .title {
        font-size: 9pt;
    }

    .row > .left > input {
        width: 260px;
        height: 23px;
        border: 1px solid #ccc;
        position: relative;
        top: 3px;
    }

    .row > .left > textarea {
        width: 260px;
    }

    .btn3 {
        width: 100px;
        height: 37px;
        display: block;
        background: gray;
        border-radius: 5px;
        color: #fff;
        text-align: center;
        font-family: yekan;
        font-size: 10pt;
        line-height: 37px;
        box-shadow: 1px 1px 3px #ccc;
        cursor: pointer;
    }

    .btn4 {
        width: 100px;
        height: 37px;
        display: block;
        background: green;
        border-radius: 5px;
        color: #fff;
        text-align: center;
        font-family: yekan;
        font-size: 10pt;
        line-height: 37px;
        box-shadow: 1px 1px 3px #ccc;
        cursor: pointer;
    }


</style>

</head>
<body style="margin: 0 ;background: #eee">


<div class="yekan" id="maine"
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
    <div id="head">
        <h4 class="color3">انتخاب ادرس</h4>
        <span class="btn2">انتخال ادرس</span>
    </div>
    <div id="content">
        <table cellspacing="0" class="act">
            <tr>
                <td style="width: 60px" rowspan="3" class="parent">
                    <span class="tranggle"></span>
                    <span class="cir"></span>
                </td>
                <td colspan="3">کلیک سایت</td>
                <td style="width: 60px;padding: 0" rowspan="3">
                    <table style="width: 100%;height: 140px;">
                        <tr>
                            <td style="border: 0;text-align:center"><img src="images/icon_edit_16.png"></td>
                        </tr>
                        <tr>
                            <td style="border: 0;text-align:center"><img src="images/Delete.gif"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="width: 200px">استان تهران</td>
                <td rowspan="2">نجف اباد خیابان شیخ بهایی سه راه فرهنگ نرسیده ب اینجو کوچه اونجو</td>
                <td style="width: 200px">03142745420</td>
            </tr>
            <tr>
                <td style="width: 200px">شهر تهران</td>
                <td style="width: 200px">09136807413</td>

            </tr>
        </table>
    </div>
    <div class="contain_send">
        <h4 class="color3">شیوه های ارسال</h4>
        <table class="send act" cellspacing="0">
            <tr>
                <td style="width: 60px" rowspan="3"><span class="cir"></span></td>
                <td style="width: 980px"><img src="images/post_48_icon.png">
                    <p class="color2">نجف اباد خیابان شیخ بهایی سه راه فرهنگ نرسیده ب اینجو کوچه اونجو</p>
                </td>
                <td>هزینه ی ارسال 462000</td>
            </tr>
        </table>
    </div>

</div>


<form class="form" method="post" action="<?= URL3 ?>shopping2/add_address">
    <div id="gallery">

        <span class="close"></span>
        <div class="row">
            <div class="right">
    <span class="title ">
       نام و نام خانوادگی نحویل گیرنده  :
    </span>
            </div>
            <div class="left">
                <input name="name">
            </div>
        </div>
        <div class="row">
            <div class="right">
    <span class="title ">
شماره ی تلفن همراه :   </span>
            </div>
            <div class="left">
                <input name="phone" placeholder="09..." class="color2" style="direction: ltr !important;">
            </div>
        </div>
        <div class="row">
            <div class="right">
    <span class="title ">
شماره ی ثابت :   </span>
            </div>
            <div class="left">
                <input name="tell">
            </div>
        </div>
        <div class="row">
            <div class="right">
    <span class="title ">
انتخاب استان:    </span>
            </div>
            <div class="left">
                <select name="state" onchange="ostan(this)" class="color2 yekan">

                    <option value=" ">انتخاب استان</option>
                    <option data-val="41" value="آذر بایجان غربی">آذر بایجان غربی</option>
                    <option data-val="44" value="آذر بایجان شرقی">آذر بایجان شرقی</option>
                    <option data-val="45" value="اصفهان">اصفهان</option>
                    <option data-val="31" value="البرز">البرز</option>
                    <option data-val="26" value="ایلام">ایلام</option>
                    <option data-val="84" value="بوشهر">بوشهر</option>
                    <option data-val="21" value="تهران">تهران</option>
                    <option data-val="38" value="چهار محال بختیاری">چهار محال بختیاری</option>
                    <option data-val="56" value="خراسان جنوبی">خراسان جنوبی</option>
                    <option data-val="51" value="خراسان رضوی">خراسان رضوی</option>
                    <option data-val="58" value="خراسان شمالی">خراسان شمالی</option>
                    <option data-val="61" value="خوزستان">خوزستان</option>
                    <option data-val="24" value="زنجان">زنجان</option>
                    <option data-val="23" value="سمنان">سمنان</option>
                    <option data-val="54" value="چهار محال بختیاری">چهار محال بختیاری</option>
                    <option data-val="71" value="فارس">فارس</option>
                    <option data-val="28" value="قزوین">قزوین</option>
                    <option data-val="25" value="قم">قزوین</option>
                    <option data-val="87" value="کردستان">کردستان</option>
                    <option data-val="34" value="کرمان">کرمان</option>
                    <option data-val="83" value="کرمانشاه">کرمانشاه</option>
                    <option data-val="74" value="کهکیلویه و بیر احمد">کهکیلویه و بیر احمد</option>
                    <option data-val="17" value="گلستان">گلستان</option>
                    <option data-val="13" value="گیلان">گیلان</option>
                    <option data-val="66" value="لرستان">لرستان</option>
                    <option data-val="15" value="مازندران">مازندران</option>
                    <option data-val="86" value="مرکزی">مرکزی</option>
                    <option data-val="76" value="هرمزگان">هرمزگان</option>
                    <option data-val="81" value="همدان">همدان</option>
                    <option data-val="35" value="یزد">یزد</option>
                </select>
                <span class="shahr">
                <select name="city" onchange="mahale(this)" class="color2 yekan">

                </select>
            </span>
            </div>
        </div>
        <div class="row">
            <div class="right">
    <span class="title ">
محله :    </span>
            </div>
            <div class="left">
          <span class="mahale">
              <select class="color2 yekan">
                  <option name="mahale">محله ی خود را انتخاب کنید</option>
              </select>
          </span>
            </div>
        </div>
        <div class="row">
            <div class="right">
    <span class="title ">
ادرس پستی:    </span>
            </div>
            <div class="left">
                <textarea name="address" placeholder="کد پستی خود را وارد کنید..." class="color2"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="right">
    <span class="title ">
کد پستی  </span>
            </div>
            <div class="left">
                <input name="code">
            </div>
        </div>
        <div class="row">
            <div class="right">
  <span class="btn3 ">

       انصراف
 </span>
            </div>
            <div class="left" style="direction: ltr !important;">
                <span class="btn4 send">ثبت اظلاعات</span>
            </div>
        </div>

    </div>
</form>
<div id="dark"></div>


<script>


    $('.btn2').click(function () {
        $('#dark').fadeIn();
        $('#gallery').fadeIn();

    });

    $('.close').click(function () {
        $('#gallery').fadeOut(200);
        $('#dark').fadeOut(200);
    });
    $('.send').click(function () {
        var url="<?= URL3 ?>shopping2/add_address";
        var data = $('.form').serializeArray();
        $.post(url,data,function (msg) {
            console.log(msg);
        });
    });


</script>
