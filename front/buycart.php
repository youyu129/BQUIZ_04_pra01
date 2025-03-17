<h2 class="ct"><?=$_SESSION['login']?>的購物車</h2>
<table style='width:690px'>
    <tr class="tt ct">
        <td>編號</td>
        <td>商品名稱</td>
        <td>數量</td>
        <td>庫存量</td>
        <td>單價</td>
        <td>小計</td>
        <td>刪除</td>
    </tr>
    <?php
    $row=$Item->find($_GET['id']);
    ?>
    <tr class="pp ct">
        <td><?=$row['no'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$_GET['qt'];?></td>
        <td><?=$row['q'];?></td>
        <td><?=$row['price'];?></td>
        <td><?=($_GET['qt']*$row['price']);?></td>
        <td class="ct">
            <img src="./icon/0415.jpg" alt="" onclick="del()">
        </td>
    </tr>
</table>
<div class="ct">
    <a href="?do=main">
        <img src="./icon/0411.jpg" alt="">
    </a>
    <a href="?do=pay">
        <img src="./icon/0412.jpg" alt="">
    </a>
</div>
<?php