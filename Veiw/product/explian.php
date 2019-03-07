<style>
    #explain {
        width: 100%;
        background: #FFFFFF;
        float: right;
        margin-top: 5px;
        border-radius: 4px;
        height: 430px;
        overflow: hidden;
        position: relative;

    }

    #explain > p {
        font-family: yekan;
        color: #666666;
        font-size: 12pt;
        padding-right: 20px;

    }

    #explain > span {
        width: 100%;
        display: block;
        height: 50px;
        text-align: center;
        position: absolute;
        bottom:1px;
        cursor: pointer;
        line-height: 41px;

        background: #FFFFFF;

    }


    .active {
        height: auto !important;
    }
</style>
<div id="explain">
    <p>معرفی اجمالی محصول</p>
    <span class="color2 yekan ">نمایش بیشتر</span>
    <p>
        <?= $product_info[0]['introduction']?>
    </p>
</div>
<script>
    $('#explain >span').click(function () {
        $('#explain').toggleClass('active');
    });
</script>