<div class="ct">
    <button style="margin:auto" onclick="location.href='?do=add_admin'">新增管理員</button>
</div>
<table class="all">
    <tr class="tt ct">
        <td class="pp ct">帳號</td>
        <td class="pp ct">密碼</td>
        <td class="pp ct">管理</td>
    </tr>
    <?php
    $rows=$Admin->all();
    foreach($rows as $row):
    ?>
    <tr class="pp ct">
        <td class="pp ct"><?=$row['acc'];?></td>
        <td class="pp ct"><?=str_repeat("*",strlen($row['pw']));?></td>
        <td class="pp ct">
            <?php
        if($row['acc']=='admin'){
            echo "此帳號為最高權限";
        }else{
            ?>
            <button style='margin:auto' onclick="location.href='?do=edit_admin&id=<?=$row['id'];?>'">修改</button>
            <button style='margin:auto' onclick="del('Admin',<?=$row['id'];?>)">刪除</button>
            <?php
        }
        ?>
        </td>
    </tr>
    <?php
    endforeach;
    ?>
</table>