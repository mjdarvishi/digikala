<style>
    .line {

        border-top: solid 1px #ccc;
        margin: 15px 5px;
        float: right;
        width: 95%;
    }

    .check_box {
        width: 16px !important;
        height: 16px !important;
        border: solid 1px #ccc;
        border-radius: 4px;
        display: block;
        position: absolute;
        top: 6px;

    }

    #offer {
        height: 60px;
        width: 100%;
        background: #fff5f5 url(<?=URL1?>images/amazing-offer.png) no-repeat 97% center;
        position: relative;
        border: 1px dashed #ff4b41;
        border-radius: 4px;

    }

    .flipTimer, .flipTimer div {
        direction: ltr !important;
        text-align: left !important;
    }

    .flipTimer {
        position: absolute;
        bottom: -20px;
        left: -130px;
        transform: scale(.4);
    }
</style>
<div id="offer">

    <div class="flipTimer">
        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>
    </div>
    <div class="discont">
            <span class="right">
               <span><?= $product_info[0]['price'] ?></span>
               <span>هزار تومان</span>
            </span>
        <span class="left">
                <span><?= $product_info[1] ?></span>
            </span>
    </div>
</div>
<script>
    $('.flipTimer').flipTimer({
        direction: 'down',
        date:' <?= $product_info[2]?>',

        days: false


    });
</script>