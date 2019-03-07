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


        font-size: 9pt;

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

    <?php
   $info=$param['info'];
   $naghd=$param['naghd'];

    ?>


</style>
<?php require('Veiw/admin/menu_right.php') ?>


<div class="left">
   <p> <?php

    if (isset($naghd['title'])) {

        echo 'ویرایش نقد و بررسی';
    } else {

        echo 'ایجاد نقد و بررسی ';

    }
    ?></p>
    <form action="

        <?= URL3 ?>adminproduct/addnaghd/<?= $info['id'] ?>

" method="post">
        <div class="row">
            <span class="span_title">عنوان نقد:</span>
            <input style="font-family: yekan" type="text" name="title" value="<?= @$naghd['title']  ?>">
        </div>

            <div class="row">
                <div class="span_title">شرح نقد:</div>
                <textarea class="editor_one" id="editor_one" style="font-family: yekan"
                          name="introduction" ><?= @$naghd['explanation'] ?></textarea>
            </div>
            <script>
                CKEDITOR.replace('editor_one',{});
            </script>


            <button class="colorgreen1">

                اضافه کردن

                </button>
        </div>

    </form>

</div>
<div>
