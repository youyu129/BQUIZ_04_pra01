<div class="ct">
    <button style="margin:auto" onclick="add()">新增管理員</button>
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
        <td class="pp ct"><?=$row['pw'];?></td>
        <td class="pp ct">
            <?php
        if($row['acc']=='admin'){
            echo "此帳號為最高權限";
        }else{
            echo "<button style='margin:auto' onclick='edit()'>修改</button>";
            echo "<button style='margin:auto' onclick='del()'>刪除</button>";
        }    
        ?>
        </td>
    </tr>
    <?php
    endforeach;
    ?>
</table>