<style>
    .row {
        width: 100%;
        float: right;
        margin-top: 20px;

    }

    .left p {
        text-align: right;
        margin: 0;
        color: #666a69;
        border-bottom: 1px solid #ccc;
        background-color: rgba(82, 239, 230, 0.19);
        padding-right: 5px;
    }

    .left {
        width: 905px;
        float: left;
        padding: 10px;
        margin: 5px 0px 5px 5px;
        box-shadow: 1px 3px 1px #eee;
    }

    .span_title {
        display: inline-block;
        width: 90px;
        font-size: 9pt;
        float: right;
    }

    input {
        width: 200px;
        height: 24px;
        border: 1px solid #ccc;
    }

    .colorgreen1 {
        width: 100px;
        height: 30px;
        margin: 60px 93px 0px 0px;;
        background: mediumblue;
        color: white;
        border: none;
        font-family: yekan;
        display: block;
        border-radius: 5px;
        font-size: 7pt;
        cursor: pointer;
    }

    .combo {
        float: right;
    }

    select {
        font-family: yekan;
        font-size: 8pt;
    }

    <?php
    $cat=$param['cat'];
    $edit=$param['edit'];

    ?>


</style>
<?php require('Veiw/admin/menu_right.php') ?>
<div class="left">

    <p><?php

        if ($edit==false)
            echo 'ایجاد دسته ی جدید';
        else
            echo 'ویرایش دسته';
        ?></p>
    <form action="
<?php
    if ($edit==false){

    ?>
<?= URL3 ?>admincategory/add
<?php  }else{?>

<?= URL3 ?>admincategory/add/<?= $param['par'] ?>/edit

<?php   }    ?>
" method="post">
        <div class="row">
            <span class="span_title">عنوان دسته:</span>
            <input style="font-family: yekan" type="text" name="title" placeholder="
            <?php
if ($edit==true){
            foreach ($cat as $gar){
    if ($gar['id']==$param['par'])
        echo $gar['title'];
            }
}
            ?>


">
            <div class="row">
                <span class="span_title">دسته والد:</span>

                <div class="combo">
                    <select name="parent">
                        <option selected value="0">انتخاب کنید</option>
                        <?php foreach ($cat as $gar) { ?>


                            <option value=" <?= $gar['id']; ?>">
                                <?= $gar['title']; ?>
                            </option>
                        <?php } ?>
                    </select>

                </div>

            </div>
            <button class="colorgreen1">اضاقه کردن</button>
        </div>

    </form>

</div>
<div>
