<style>


    .right {
        width: 240px;
        float: right;
        border: 1px solid #ccc;

        margin: 5px;
        margin-left: 0px;
    background-color:rgba(254, 121, 70, 0.05);
    }
    .right ul {
        padding: 0;
        margin: 0;
    }

    .right ul li a {
        display: block;

        padding: 3px 20px 3px 3px;
        font-size: 9pt;
        border-bottom: 1px dashed #ccc;
        position: relative;
        cursor: pointer;



    }
    .right ul li a img{
        width: 15px;
        height: 15px;
        display: block;
        position: absolute;
        right: 1px;
        top: 8px;

    }
    .activ{
        background-color:rgba(82, 239, 230, 0.19) !important;
    }
    #maine::after {
        content: " ";
        clear: both;
        display: block;
    }
</style>
<div id="maine"
     style="width: 1200px;margin-right: auto;margin-top: 10px;margin-left: auto;background:white;
     font-family: yekan ">
<div class="right">
    <ul>
        <li>
            <a>
                <img src="images/circle.png">
                داشبوردها
            </a>
        </li>
        <li >
            <a class="activ" href="<?= URL3 ?>admincategory/index">
                <img src="images/circle.png">
                مدیریت دسته ها
            </a>
        </li>
        <li>
            <a href="<?= URL3 ?>adminproduct/index">
                <img src="images/circle.png"  >
                مدیریت محصولات ها
            </a>
        </li>
    </ul>
</div>
