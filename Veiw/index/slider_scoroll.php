<style>
    .slider_scorol {
        box-shadow: 0 3px 6px #ccc;
        background: #fff;
        border-radius: 4px;
        height: 310px;
        width: 890px;
        margin-top: 10px;
        overflow: hidden;
        float: right;
    }

    .slider_scorol > h3 {
        height: 35px;
        margin-top: 0;
        padding-right: 45px;

    }

    .content_scorrol {
        height: 261px;
        width: 100%;
        position: absolute;

    }

    .content_scorrol_pre {
        width: 55px;
        height: 100%;
        float: right;
        cursor: pointer;

    }

    .content_scorrol_pre > img {
        width: 32px;
        height: 32px;
        display: block;
        position: absolute;
        top: 70px;
        right: 15px;

    }

    .content_scorrol_next {
        width: 55px;
        height: 100%;
        float: right;
        cursor: pointer;

    }

    .content_scorrol_next > img {
        width: 32px;
        height: 32px;
        display: block;
        position: absolute;
        top: 70px;

    }

    .content_scorrol_main {
        width: 780px;
        height: 100%;
        float: right;
        overflow: hidden;
    }

    .content_scorrol_main ul {
        padding: 0;
        height: 100%;

    }

    .content_scorrol_main ul li {
        padding: 0;
        width: 195px;
        height: 100%;
        float: right;
    }

    .content_scorrol_main ul li a {
        width: 195px;
        height: 100%;
        display: block;
        text-align: center;

    }
</style>

<div class="slider_scorol">
    <h3 class="fontsm yekan">فقط در دی جی کالا</h3>
    <div class="content_scorrol">
        <div class="content_scorrol_pre" onclick="sliderscorrol('left',this);">
            <img src="images/next.png">
        </div>
        <div class="content_scorrol_main">
            <ul>
                <?php
                $param2=$param[2];
                foreach ($param2 as $slider1){

                ?>
                <li>
                    <a href="<?= URL3  ?>product/index/<?= $slider1['id']  ?>">
                        <img style="width: 150px ;height: 150px" src="images/products/<?= $slider1['id']?>/product_220.jpg">
                        <p class="fontsm ptag"><?= $slider1['title']; ?> </p>
                        <p class="price_currency fontsm">تومان<?= $slider1['price']; ?></p>
                    </a>
                </li>

<?php     }  ?>

            </ul>
        </div>
        <div class="content_scorrol_next" onclick="sliderscorrol('right',this);">
            <img src="images/back.png">

        </div>
    </div>
</div>
<script>



    function sliderscorrol(direction, input) {
        var tag = $(input);
        var sliderscorol = tag.parents('.slider_scorol');
        var ulsliderscorol = sliderscorol.find('.content_scorrol_main ul');
        var sliderscorrolitems = ulsliderscorol.find('li');
        ulsliderscorol.css('width', sliderscorrolitems.length * 195);
        var marginnow = $(ulsliderscorol).css('margin-right');

        marginnow = parseInt(marginnow);
        var marginnew = marginnow;
        if (direction == "left") {
            if (marginnew > -((sliderscorrolitems.length - 4) * 195)) {
                marginnew = marginnow - 195;
                ulsliderscorol.animate({'marginRight': marginnew}, 1000);


            }
        } else {
            if (marginnew < 0) {

                marginnew = marginnow + 195;
                ulsliderscorol.animate({'marginRight': marginnew}, 1000);


            }

        }

    }


    $('.content_scorrol_pre').click(function () {
        sliderscorrol('left');
    });
    $('.content_scorrol_next').click(function () {
        sliderscorrol('right');
    });



</script>
