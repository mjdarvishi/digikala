<script src="<?= URL ?>ckeditor/ckeditor.js"></script>

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
        margin: 100px 90px 0px 0px;;
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

    textarea {
        width: 500px;
        border: 1px solid #ccc;
        height: 250px;
    }

    select {
        font-family: yekan;
        font-size: 8pt;
    }

    .selected {
        padding: 3px;
        display: inline-block;
        height: 20px;
        color: black;
        text-align: center;
        position: relative;
        top: -1px;
        line-height: 17px;
        font-size: 9pt;

        border: 1px solid #ccc;
        margin-right: 2px;
    }

    option {
        style = "font-family: yekan"
    }

    .selected > i {
        display: block;
        width: 8px;
        height: 8px;
        background: url(<?= URL  ?>/images/close-icon.gif) no-repeat;
        position: absolute;
        top: 1px;
        width: 40px;
        left: 1px;
        cursor: pointer;
    }
    .row3{
        float: right;
        margin-top: 20px;
    }

    <?php
    $cat=$param['cat'];
    $edit=$param['edit'];
    $color=$param['color'];
    $garanti=$param['gar'];
    $info=$param['info'];
    $colorinfo=$param['info']['colorinfo'];
    $garanty=$param['info']['garinfo'];

    ?>


</style>
<?php require('Veiw/admin/menu_right.php') ?>


<div class="left">

    <p><?php

        if (isset($info['title'])) {

            echo 'ویرایش محصول';
        } else {

            echo 'ایجاد محصول جدید';

        }
        ?></p>
    <form action="
<?php

    if (isset($info['title'])) {

        ?>
        <?= URL3 ?>adminproduct/add/<?= $info['id'] ?>

<?php } else {
        ?>

<?= URL3 ?>adminproduct/add

<?php } ?>
" method="post" enctype="multipart/form-data">
        <div class="row3">
            <span class="span_title">عنوان محصول:</span>
            <input style="font-family: yekan" type="text" name="title" value="<?= @$info['title'] ?>">
        </div>

        <div class="row">
            <span class="span_title">قیمت:</span>
            <input style="font-family: yekan" type="text" name="price" value="
            <?= @$info['price'] ?>
">
        </div>

        <div class="row">
            <span class="span_title">تعداد موجود:</span>
            <input style="font-family: yekan" type="text" name="num_ex" value="
            <?= @$info['num_ex'] ?>


">
        </div>

        <div class="row">
            <span class="span_title">تخفیف:</span>
            <input style="font-family: yekan" type="text" name="discount" value="
            <?= @$info['discount'] ?>
">
        </div>
        <div class="row">
            <span class="span_title">عکس:</span>
            <input style="font-family: yekan" type="file" name="image" value="

">
        </div>


        <div class="row">
            <span class="span_title">محصولات ویژه:</span>
            <input style="font-family: yekan" type="text" name="special" value="
          <?= @$info['special'] ?>
">
        </div>


        <div class="row">
            <span class="span_title">دسته والد:</span>

            <div class="combo">
                <select name="catid">
                    <option <?php if (! isset($info['title'])) {
                        echo 'selected';
                    } ?> value="0">انتخاب کنید
                    </option>
                    <?php foreach ($cat as $gar) {

                        ?>


                        <option <?php if (isset($info['title'])) {
                            if ($gar['id'] == $info['id']) {
                                echo 'selected';
                            }
                        } ?> value=" <?= $gar['id']; ?>">
                            <?= $gar['title']; ?>
                        </option>
                    <?php } ?>
                </select>

            </div>


            <div class="row">
                <span class="span_title">رنگ:</span>

                <div class="combo">
                    <select name="parent">
                        <?php foreach ($color as $gar ) { ?>


                            <option onclick="addcolor('<?= $gar['title']; ?>',this,<?= $gar['id']; ?>);"
                                    value=" <?= $gar['id']; ?>">
                                <?= $gar['title']; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <?php
                    $colorinfo=array_filter($colorinfo);
                    if (isset($info['id']) )
                    foreach ($colorinfo as $row) { ?>

                        <span class="selected"> <input type="hidden" value="<?= $row['id'] ?>" name="color[]"> <i
                                onclick="delet1(this);" class="clo"> </i><?= $row['title'] ?></span>

                    <?php } ?>


                </div>

            </div>
            <div class="row">
                <span class="span_title">انتخاب نوع گارانتی:</span>

                <div class="combo">
                    <select name="parent">
                        <?php
                        $garanti=array_filter($garanti);
                        foreach ($garanti as $gar) { ?>


                            <option onclick="addgar('<?= $gar['title']; ?>',this,<?= $gar['id']; ?>);"
                                    value=" <?= $gar['id']; ?>">
                                <?= $gar['title']; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <?php
                    if (isset($info['id']))
                    foreach ($garanty as $row) { ?>

                        <span class="selected"> <input type="hidden" value="<?= $row['id'] ?>" name="garanti[]"> <i
                                onclick="delet1(this);" class="clo"> </i><?= $row['title'] ?></span>

                    <?php } ?>

                </div>

            </div>

            <div class="row">
                <div class="span_title">معرفی اجمالی:</div>
                <textarea class="editor_one" id="editor_one" style="font-family: yekan"
                          name="introduction"><?= @$info['introduction']; ?></textarea>
            </div>
            <script>
                CKEDITOR.replace('editor_one',{});
            </script>


            <button class="colorgreen1"><?php

                if (isset($info['id'])) {

                    echo 'ویرایش محصول';
                } else {
                    echo 'اضافه کردن';
                }
                ?></button>
        </div>

    </form>

</div>
<div>
    <script>

        function addcolor(colorname, tag, id) {
            var span = ' <span  class="selected"> <input type="hidden" " value="' + id + '" name="color[]"> <i onclick="delet(this);" class="clo"> </i> ' + colorname + ' </span>';
            var row = $(tag).parents('.row');
            row.append(span);
        }
        function delet(tag) {
            var elemet1 = $(tag).parents('.selected');
            $(elemet1).remove();
        }


        function addgar(tit, tag, id) {
            var span = ' <span  class="selected"> <input type="hidden" " value="' + id + '" name="garanti[]"> <i onclick="delet1(this);" class="clo"> </i> ' + tit + ' </span>';
            var row = $(tag).parents('.row');
            row.append(span);
        }
        function delet1(tag) {
            var elemet1 = $(tag).parents('.selected');
            $(elemet1).remove();
        }


    </script>

