<style>
    .content_scorrol {
        height: 261px;
        width: 100%;
        float: right;
        position: relative;
        margin-top: 5px;
        padding-top: 2px;
        padding-bottom: 2px;
        background: #FFFFFF;
        float: right;
        overflow: hidden;

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
        width: 1086px;
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
        width: 205px;
        height: 100%;
        float: right;
        border: 1px solid #ccc;
    }

    .content_scorrol_main ul li a {
        width: 195px;
        height: 100%;
        display: block;
        text-align: center;

    }
</style>


<?php
$item=$param[1];
?>

<div class="content_scorrol">
    <div class="content_scorrol_pre" onclick="sliderscorrol('left',this);">
        <img src="images/next.png">
    </div>
    <div class="content_scorrol_main">
        <ul>
            <?php
            foreach ($item as $row){

                ?>
                <li>
                    <a href="<?= URL3  ?>product/index/<?= $row['id']  ?>">
                        <img style="width: 150px ;height: 150px" src="images/products/<?= $row['id']?>/product_220.jpg">
                        <p class="fontsm ptag"><?= $row['title']; ?> </p>
                        <p class="price_currency fontsm">تومان<?= $row['price']; ?></p>
                    </a>
                </li>

            <?php     }  ?>

        </ul>
    </div>
    <div class="content_scorrol_next" onclick="sliderscorrol('right',this);">
        <img src="images/back.png">

    </div>
</div>
<script>
    //slider
    function sliderscorrol(direction, input) {
        var tag = $(input);
        var sliderscorol = tag.parents('.content_scorrol');
        var ulsliderscorol = sliderscorol.find('.content_scorrol_main ul');
        var sliderscorrolitems = ulsliderscorol.find('li');
        ulsliderscorol.css('width', sliderscorrolitems.length * 195);
        var marginnow = $(ulsliderscorol).css('margin-right');

        marginnow = parseInt(marginnow);
        var marginnew = marginnow;
        if (direction == "left") {
            if (marginnew > -((sliderscorrolitems.length - 3) * 195)) {
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
</script>