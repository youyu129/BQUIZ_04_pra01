<?php
    $nav='';
    $typeId=$_GET['type']??0;
    if($typeId==0){
        $nav="全部商品";
    }else{
        $type=$Type->find($typeId);
        if($type['big_id']==0){
            $nav=$type['name'];
        }else{
            $big=$Type->find($type['big_id']);
            $nav=$big['name'] ." > ". $type['name'];
        }
    }
?>

<h2><?=$nav;?></h2>

<table class="all">
    <?php
    if($typeId==0){
        $rows=$Item->all(['sh'=>1]);
    }else if($type['big_id']==0){
        $rows=$Item->all(['big'=>$typeId,'sh'=>1]);
    }else{
        $rows=$Item->all(['mid'=>$typeId,'sh'=>1]);
    }
    foreach($rows as $row):
    ?>
    <tr class="pp">
        <td rowspan="4">
            <img src="../upload/<?=$row['img'];?>" style="width:200px">
        </td>
        <td class="tt">
            <?=$row['name'];?>
        </td>
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