<?php $gallery = $param['gallery'];


?>
<style>


    .lef {
        width: 905px;
        float: left;
        padding: 10px;
        margin: 5px 0px 5px 5px;
        box-shadow: 1px 3px 1px #eee;
    }

    .lef p {
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
    

    .s4 {
        width: 60px;
        height: 30px;
        margin: 10px 20px 0px 0px;;
        background: green;
        border: none;
        font-family: yekan;
        position: relative;
        lef: -820px;
        top: 5px;
        border-radius: 5px;
        font-size: 7pt;
        cursor: pointer;

    }

    .s5 {
        width: 60px;
        height: 30px;
        margin: 10px 20px 0px 0px;;
        background: red;
        border: none;
        font-family: yekan;
        position: relative;
        lef: -659px;
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

<?php require('Veiw/admin/menu_right.php') ?>

<div class="lef">

    <p>مدیریت گالری تصاویر</p>
    <form action="http://localhost:8080/digikalamvc/adminproduct/gallery/<?= $gallery[0]['idpro'] ?>" method="post" enctype="multipart/form-data">
      <div class="row">
          <span class="tit">افزودن تصویر:</span>
          <input type="file" name="image">
      </div>
        <div>
            <input type="submit" class="s4" value="ارسال">
        </div>
    </form>
    <form action="http://localhost:8080/digikalamvc/adminproduct/gallery/<?= $gallery[0]['idpro'] ?>" method="post">
        <button   class="s5"><a >حذف</a> </button>
        <table class="list fontsm mycolor">
            <tr>

                <td>ردیف</td>
                <td>انتخاب</td>
                <td>تصویر</td>


            </tr>
            <?php foreach ($gallery as $row) { $i=1;?>
                <tr>
                    <td><?= $i ?></td>
                    <td><input type="checkbox" name="id[]" value="<?= $row['id'] ?>"></td>
                    <td><img src="<?= URL1  ?>images/products/<?= $row['idpro'] ?>/gallery/small/<?= $row['img'] ?>"></td>


                </tr>

            <?php  $i++;} ?>
        </table>

    </form>

</div>
</div>









