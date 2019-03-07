<?php







?>

<?php
foreach ($param as $row){

?>
<h4>
    <?= $row['title'] ?>
    <span></span>
</h4>

<ul>
    <?php
        foreach ($row['child'] as $item){

        ?>
    <li>

            <li>
                <span class="first_row"><?= $item['title'] ?></span>
                <span class="second_row"><?= $item['value'] ?></span>
            </li>

    </li>

    <?php     }?>
</ul>
<?php   }?>