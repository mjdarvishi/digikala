<?php

$option = $param[0][0];
$option3 = $param[0][1];


?>

    <div class="first_div">
        <p>
            مشخصات فيزيکي
            <span></span>
        </p>
        <?php

        foreach ($option as $row) {
            $sco = $option3[$row['id']];

            ?>
            <div class="right_div">

                <span><?= $row['title'] ?></span>


            </div>
            <div class="left_div">
                <ul>
            <?php for ($i = 0; $i < floor($sco); $i++) { ?>
                    <li>
                        <span class="full"></span>
                    </li>

            <?php } ?>
                    <li>
                        <span style="width: <?=  ($sco-floor($sco))*100      ?>%"></span>
                    </li>
                </ul>

            </div>
        <?php } ?>

    </div>
    <div class="second_div yekan2 color2">
        <h4>شما هم می توانید در مورد این کالا نظر بدهید.</h4>
        <p class="yekan2 color2"> برای ثبت نظرات، نقد و بررسی شما لازم است ابتدا وارد حساب کاربری خود شوید. اگر
            این محصول را قبلا از دیجی کالا خریده باشید، نظر شما به عنوان مالک محصول ثبت خواهد شد.</p>
        <button>نظر خود را بنویسید</button>
    </div>
    <div id="comments">

        <p>
            <span></span>
            نظرات کاربران</p>
        <div class="line2"></div>

    </div>
<?php

foreach ($param[1] as $item) {


    ?>
    <div class="comments">
        <div class="head">
            <div class="right2 yekan color2">

  <span>                    سیبشسیب
</span>

                <span><?= $item['date'] ?></span>
            </div>
            <div class="left2">
                <span class="yekan color2">ایا این مد نظرتان بود؟</span>
                <span class="text"><?= $item['lik'] ?></span>
                <span class="text"><?= $item['dislike'] ?></span>
                <span class="like"></span>
                <span class="dislike"></span>
            </div>
        </div>

        <div class="body">
            <div class="first_part">
                <?php

                foreach ($option as $row) {

                    ?>
                    <div class="right_div">

                        <span><?= $row['title'] ?></span>


                    </div>

                    <?php
                    $score = unserialize($param[1][0]['param']);

                    $sc = $score[$row['id']];
                    echo $sc;

                    ?>

                    <div class="left_div">
                        <ul>
                            <?php for ($i = 0; $i < $sc; $i++) { ?>
                                <li>
                                    <span class="full"></span>
                                </li>
                            <?php } ?>
                            <?php for ($i = 0; $i < 4 - $sc; $i++) { ?>
                                <li>

                                </li>
                            <?php } ?>
                        </ul>

                    </div>

                <?php } ?>

            </div>
            <div class="second_part">
                <div class="ones  yekan"><?= $item['title'] ?> </div>
                <div class="twos">
                            <span>
                             <div class="red2"> نقاظ ضعف</div>

                            <div class="color2"><?= $item['negetive'] ?></div>
                            </span>

                    <span>
                                  <div class="green">نقاظ قوت</div>
                              <div class="color2"><?= $item['positive'] ?></div>
                            </span>
                </div>
                <div class="threes">

                    <?= $item['text'] ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>