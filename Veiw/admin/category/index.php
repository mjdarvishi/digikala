<?php $cat = $param['category'];
$par=[];
if (isset($param['parents']))
$par=array_reverse($param['parents']);

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
        right: 20px;
        top: 8px;

    }
    .s4{
        width: 60px;
        height: 30px;
        margin: 10px 20px 0px 0px;;
        background: green;
        border: none;
        font-family: yekan;
        position: relative;
        left: -820px;
        top: 5px;
        border-radius: 5px;
        font-size: 7pt;
        cursor: pointer;


    }
    .s5{
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
    .s4 >a{
        color: whitesmoke;
    }
 .s5 >a{
        color: whitesmoke;
    }


</style>

<?php require('Veiw/admin/menu_right.php') ?>

<div class="left">

    <p > مدیریت دسته ها(<?php

        foreach ($par as $row){

        ?>
        <a  style="font-size: 8pt;color: black">
          <?php

          echo $row.'-';
          ?>

        </a>

        <?php

        }



        ?>)</p>
    <button  class="s4"><a href="http://localhost:8080/digikalamvc/admincategory/add">افزودن</a> </button>
    <button onclick="sub()"  class="s5"><a >حذف</a> </button>
    <form action="http://localhost:8080/digikalamvc/admincategory/omitecat" method="post" >
    <table class="list fontsm mycolor">
        <tr>
            <td >ردیف</td>
            <td>عنوان دسته</td>
            <td>زیر دسته ها</td>
            <td>ویرایش</td>
            <td>ویژگی ها</td>
            <td>انتخاب</td>

        </tr>
        <?php foreach ($cat as $row) { ?>
            <tr >
                <td ><?= $row['id'] ?></td>
                <td><?= $row['title'] ?></td>
                <td > <a href="<?= URL3 ?>admincategory/children/<?= $row['id']  ?>"><img src="images/view_icon.png"></a></td>
                <td > <a href="<?= URL3 ?>admincategory/add/<?= $row['id']  ?>/edit"><img src="images/Edit.gif"></a>
                </td>
                <td > <a href="<?= URL3 ?>admincategory/showattr/<?= $row['id']  ?>"> مشاهده</a>
                </td>
                <td><input type="checkbox" name="id[]" value="<?= $row['id']  ?>"></td>

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







