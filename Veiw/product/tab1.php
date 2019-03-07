
<?php

$data=$param;



?>

<div class="item_countainer">

    <?php
    foreach ($data as $row){

    ?>



    <div class="item">


        <h4>
            <span class="atfirst"></span>
            <div><?= $row['title'] ?></div>

            <i></i>
            <p><?= $row['explanation'] ?></p>

        </h4>

    </div>
    <?php     }    ?>

</div>

<script>
    $('.atfirst').click(function () {
        $(this).toggleClass('act2_one');
        $(this).parents('h4').find('p').slideToggle();
    });
    $('.middel').click(function () {
        $(this).toggleClass('act2_two');
        $(this).parents('h4').find('p').slideToggle();
    });
    $('.last').click(function () {
        $(this).toggleClass('act2_two_one');
        $(this).parents('h4').find('p').slideToggle();
    });
</script>