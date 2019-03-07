
<?php
$qu=$param;
print_r($qu);
?>
<p>
    <i class="icone"></i>
    پرسش خود را مظرح کنید
</p>
<textarea class="yekan color2" placeholder="متن مورد نظر خود را تایپ کنید...."></textarea>

<button>ثبت پرسش</button>


<div id="questions">
    <div class="invar">
        <i>

        </i>
        پرسش ها و پاسخ ها (1 پرسش )
    </div>
    <div class="onvar">
        <span class="sort">مرتب سازی بر اساس: </span>
        <div>
            بیشترین پاسخ به پرسش
            <i></i>
        </div>
        <div>
            پرسش‌های شما
            <i></i>
        </div>
        <div>
            جدیدترین پرسش
            <i class="sel"></i>
        </div>
    </div>
</div>
<?php

foreach ($qu as $row) {
if($row['parent']==1){

?>
    </div><div id="q12">
        <div class="up">
            <i></i>
            <span class="yekan color2">پاسخ</span>
            <div>توسط ali shahnori- <?= $row['data'] ?></div>
        </div>
        <div class="down">
            <?= $row['tex'] ?>
        </div>
    </div>

<?php   }
else{?>


    <div id="q12">
    <div class="up">
        <i></i>
        <span class="yekan color2">پرسش</span>
        <div>توسط ali shahnori- <?= $row['data'] ?></div>
    </div>
    <div class="down">
        <?= $row['tex'] ?>
    </div>
<?php   }  }?>