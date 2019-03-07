<?php
$attr = $param['attr'];
$proinfo = $param['proinfo'];
$pro_attr = $param['pro_attr']


?>
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


</style>
<?php require('Veiw/admin/menu_right.php') ?>


<div class="left">

    <p>اظلاعات محصولات: <?= $proinfo['title'] ?></p>
    <form action="<?= URL3 ?>adminproduct/attr/<?= $proinfo['id'] ?>" method="post">
        <input type="hidden" name="sube">
        <?php
        foreach ($attr as $row) {
            ?>
            <input name="id1[]" type="hidden" value="<?= $row['id'] ?>">
            <div class="row">
            <span class="span_title"><?= $row['title'] ?>:</span>
            <input style="font-family: yekan" type="text" name="<?= $row['id'] ?>" value="
             <?php
            foreach ($pro_attr as $row1) {
                if ($row['id'] == $row1['idattr']) {
                    echo $row1['value1'];
                }
            }
            ?>
">

                </div>



            <?php } ?>

        <button class="colorgreen1">

            اضافه کردن

        </button>
</form>