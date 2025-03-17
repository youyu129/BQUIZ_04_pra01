<h2><span class="nav_big">流行皮件</span>><span class="nav_mid">男用皮件</span></h2>

<table class="all">
    <?php
    $rows=$Item->all(['sh'=>1]);
    foreach($rows as $row):
    ?>
    <tr class="pp">
        <td rowspan="4"><img src="../upload/<?=$row['img'];?>" style="width:200px"></td>
        <td class="tt"><?=$row['name'];?></td>
    </tr>

    <tr class="pp">
        <td>
            <?=$row['price'];?>
            <img src="../icon/0402.jpg" alt="" style="float:right">
        </td>

    </tr>
    <tr class="pp">
        <td><?=$row['s'];?></td>

    </tr>
    <tr class="pp">
        <td><?=$row['intro'];?></td>
    </tr>
    <?php
    endforeach;
    ?>
</table>