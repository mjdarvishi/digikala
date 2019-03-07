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




</style>
<?php require('Veiw/admin/menu_right.php') ?>
<div class="left">
<?php
$attr=$param['attr'];
$cat=$param['cat'];
$info=$param['info'];



?>
    <p>ایجاد ویژگی جدید</p>
    <form action="<?= URL3 ?>admincategory/addattr/<?= @$info['id']   ?>" method="post">
        <div class="row">
            <span class="span_title">عنوان ویژگی:</span>
            <input style="font-family: yekan" type="text" name="title" value="<?= $info['title']  ?>">
            <div class="row">
                <span class="span_title">ویژگی والد:</span>

                <div class="combo">
                    <select name="parent">
                        <option

                            <?php
                            if ($info['parent']==0)
                                echo 'selected';

                            ?>

                            value="0">انتخاب کنید</option>
                        <?php foreach ($attr as $gar) { ?>


                            <option <?php
if ($info['parent']==$gar['id'])
    echo 'selected';

                            ?>  value="<?= $gar['id']; ?>">
                                <?= $gar['title']; ?>
                            </option>
                        <?php } ?>
                    </select>



                </div>
                    <div class="row">
                <span class="span_title"> دسته ی والد:</span>

                <div class="combo">
                    <select name="idcat">
                        <?php foreach ($cat as $gar) { ?>


                            <option
                                    <?php
                                    if ($info['idcat']==$gar['id'])
                                        echo 'selected';

                                    ?>
                                    value=" <?= $gar['id']; ?>">
                                <?= $gar['title']; ?>
                            </option>
                        <?php } ?>
                    </select>


            </div>
            <button class="colorgreen1">اضاقه کردن</button>
        </div>

    </form>

</div>
<div>
