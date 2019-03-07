<script type="text/javascript"
        src="https://cdn.rawgit.com/igorlino/elevatezoom-plus/1.1.6/src/jquery.ez-plus.js"></script>
<script src="malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<link rel="stylesheet" href="malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.css">
<script src="3d/jsc3d.js"></script>
<script src="3d/jsc3d.touch.js"></script>
<script src="3d/jsc3d.webgl.js"></script>

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
            src: url(<?=URL1?><?=URL1?>fonts/Yekan.eot);
            src: url(<?=URL1?><?=URL1?>fonts/Yekan.eot?#iefix) format("embedded-opentype"), url(<?=URL1?><?=URL1?>fonts/Yekan.woff) format("woff"), url(<?=URL1?><?=URL1?>fonts/Yekan.ttf) format("truetype"), url(<?=URL1?><?=URL1?>fonts/Yekan.svg#BYekan) format("svg");
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


        ul {
            margin: 0;
        }







        #maine {
            width: 1200px;
            margin-right: auto;
            margin-top: 10px;
            margin-left: auto;
            border-radius: 8px;

        }

        #maine::after {
            content: " ";
            clear: both;
            display: block;
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




        .right_one > h4 {
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .right_one > p {
            margin-bottom: 10px;
        }











    </style>


</head>
<body style="margin: 0 ;background: #eee">


<div id="maine">
<?php
$product_info=$param[0];


if($product_info[0]['special']==1)
{
    require ('offer.php');
}


require ('detail.php');
require ('explian.php');
require ('scoroll.php');
require ('ini.php');


?>






</div>
<div id="gallery">
    <div class="header">
        <h4 class="color2 yekan"><?= $product_info[0]['title']; ?></h4>
        <span class="close"></span>

    </div>
    <div class="show">
        <?php

        foreach ($gallery as $row){


            ?>
            <div class="item1">   <img src="images/products/<?= $product_info[0]['id']?>/gallery/large/<?=$row['img']?>"></div>





        <?php   }  ?>




    </div>
    <div class="collection mCustomScrollbar" data-mcs-theme="dark">
        <ul>

            <?php

            foreach ($gallery as $row){


                ?>
                <li class="li">
                    <img src="images/products/<?= $product_info[0]['id']?>/gallery/midume/<?=$row['img']?>">
                </li>


            <?php   }  ?>




        </ul>
    </div>
</div>
<div id="dark"></div>

<script>
    $('.close').click(function () {
        $('#gallery').fadeOut(200);
        $('#dark').fadeOut(200);
    });

    var productGallery=$('#gallery');
    var itemm=productGallery.find('.item1');
    function showGallery(index) {
        itemm.fadeOut(200);
        itemm.eq(index).fadeIn(200);


    }

    var thumnails=productGallery.find('.li');
    thumnails.click(function () {
        thumnails.removeClass('acttt');
        var index=$(this).index();
        $(this).toggleClass('acttt');

        showGallery(index);


    });


    $('#galarry ul li').click(function () {
        $('#gallery').fadeIn(200);
        $('#dark').fadeIn(200);
        var index=$(this).index();

        thumnails.removeClass('acttt');
        thumnails.eq(index).toggleClass('acttt');
        showGallery(index);
    });













</script>

