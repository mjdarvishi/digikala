<div class="slider_scorol">
    <h3 class="fontsm yekan">پربازدید ترین ها</h3>
    <div class="content_scorrol">
        <div class="content_scorrol_pre" onclick="sliderscorrol('left',this);">
            <img src="images/next.png">
        </div>
        <div class="content_scorrol_main">
            <ul>
                <?php
                $param2=$param[3];
                foreach ($param2 as $slider1){


                ?>
                <li>
                    <a href="<?= URL3  ?>product/index/<?= $slider1['id']  ?>">
                        <img  style="width: 150px ;height: 150px" src="images/products/<?= $slider1['id']?>/product_220.jpg">
                        <p class="fontsm ptag"><?= $slider1['title']; ?> </p>
                        <p class="price_currency fontsm"><?= $slider1['price']; ?></p>
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