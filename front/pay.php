<h2 class="ct">
    填寫資料
</h2>
<?php
$user=$Mem->find(['acc'=>$_SESSION['login']]);
?>
<table class="all">
    <tr>
        <td class="tt ct">登入帳號</td>
        <td class="pp"><?=$user['acc'];?></td>
    </tr>
    <tr>
        <td class="tt ct">姓名</td>
        <td class="pp">
            <input type="text" name="name" id="name" value="<?=$user['name'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt ct">電子信箱</td>
        <td class="pp">
            <input type="text" name="email" id="email" value="<?=$user['email'];?>">

        </td>
    </tr>
    <tr>
        <td class="tt ct">聯絡地址</td>
        <td class="pp">
            <input type="text" name="addr" id="addr" value="<?=$user['addr'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt ct">聯絡電話</td>
        <td class="pp">
            <input type="text" name="tel" id="tel" value="<?=$user['tel'];?>">

        </td>
    </tr>
</table>
<table class="all">
    <tr class="tt ct">
        <td>商品名稱</td>
        <td>編號</td>
        <td>數量</td>
        <td>單價</td>
        <td>小計</td>
    </tr>
    <?php
    $total=0;
    foreach($_SESSION['cart'] as $id =>$qt){
        $row=$Item->find($id);
        $sum=$qt*$row['price'];
    ?>
    <tr class="pp ct">
        <td><?=$row['name'];?></td>
        <td><?=$row['no'];?></td>
        <td><?=$qt;?></td>
        <td><?=$row['price'];?></td>
        <td><?=$sum;?></td>
    </tr>
    <?php
    $total=$total+$sum;
    }
    ?>
    <tr class="tt ct">
        <td colspan="5">
            總價:<?=$total;?>
        </td>
    </tr>
</table>
<div class="ct">
    <button>確定送出</button>
    <button>返回修改訂單</button>
</div>