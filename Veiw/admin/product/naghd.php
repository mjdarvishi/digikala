<?php require('Veiw/admin/menu_right.php') ?>
<?php
$option=$param['naghd'];
$proname=$param['info'];
?>
<style>


    .left {
        width: 905px;
        float: left;
        padding: 10px;
        margin: 5px 0px 5px 5px;
        box-shadow: 1px 3px 1px #eee;
    }

    .left p {
        text-align: right;
        margin: 0;
        color: #666a69;
        border-bottom: 1px solid #ccc;
        background-color: rgba(82, 239, 230, 0.19);
        padding-right: 5px;
    }

    .mycolor {
        color: #666a69;
    }

    .list {
        width: 100%;

    }

    .list td {
        padding: 4px;
        position: relative;

    }

    .left a img {
        width: 15px;
        height: 15px;
        display: block;
        position: absolute;
        right: 7px;
        top: 8px;

    }

    .s4 {
        width: 60px;
        height: 30px;
        margin: 10px 20px 0px 0px;;
        background: green;
        border: none;
        font-family: yekan;
        position: relative;
        left: -734px;
        top: -35px;
        border-radius: 5px;
        font-size: 7pt;
        cursor: pointer;
        display: block;
        padding-right:20px ;

    }

    .s5 {
        width: 60px;
        height: 30px;
        margin: 10px 20px 0px 0px;;
        background: red;
        border: none;
        font-family: yekan;
        position: relative;
        left: -659px;
        top: 5px;
        border-radius: 5px;
        font-size: 7pt;
        cursor: pointer;

    }

    .s4 > a {
        color: whitesmoke;
    }

    .s5 > a {
        color: whitesmoke;
    }


</style>


<div class="left">
    <p>مدیریت نقد و بررسی(<?= $proname['title'] ?>)</p>
    <button onclick="sub()" class="s5"><a>حذف</a></button>
    <form action="http://localhost:8080/digikalamvc/adminproduct/naghd/<?= $proname['id'] ?>" method="post">
        <span class="s4"><a href="<?= URL3 ?>adminproduct/addnaghd/<?= $proname['id'] ?>">افزودن</a></span>
        <table class="list fontsm mycolor">
            <tr>
                <td>عنوان </td>
                <td>ویرایش</td>
                <td>انتخاب</td>

            </tr>
            <?php foreach ($option as $row) { ?>
                <tr>
                    <td><?= $row['title'] ?></td>
                    <td><a href="<?= URL3 ?>adminproduct/addnaghd/<?= $proname['id'] ?>/<?= $row['id'] ?>"><img src="images/Edit.gif"></a>
                    </td>
                    <td><input type="checkbox" name="id[]" value="<?= $row['id'] ?>"></td>

                </tr>

            <?php } ?>
        </table>

    </form>

</div>
</div>


<script>
    function sub() {
        $('form').submit();
    }
</script>







