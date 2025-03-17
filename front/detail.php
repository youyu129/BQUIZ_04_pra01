<?php
$row=$Item->find($_GET['id']);
?>
<h2 class="ct"><?=$row['name'];?></h2>

<table class="all">
    <tr class="pp">
        <td rowspan="5">
            <img src="../upload/<?=$row['img'];?>" style="width:200px">
        </td>
        <td class="tt">
            分類:<?=$Type->find($row['big'])['name'];?>><?=$Type->find($row['mid'])['name'];?>
        </td>
    </tr>
    <tr class="pp">
        <td>編號:<?=$row['no'];?></td>

    </tr>
    <tr class="pp">
        <td>
            價格:<?=$row['price'];?>
        </td>

    </tr>

    <tr class="pp">
        <td>詳細說明:<?=$row['intro'];?></td>
    </tr>
    <tr class="pp">
        <td>庫存量:<?=$row['q'];?></td>
    </tr>
</table>

<div class="ct">
    <input type="hidden" name="id" id="id" value="<?=$row['id'];?>">
    購買數量:<input type="number" name="buy" id="buy" value="1">
    <img src="../icon/0402.jpg" onclick="buy()">
</div>
<div class="ct"><button><a href="?do=main">返回</a></button></div>

<script>
function buy() {
    console.log('buy ok');
    let qt = $("#buy").val()
    location.href = `?do=buycart&id=<?=$row['id'];?>&qt=${qt}`
}
</script>