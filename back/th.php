<h2 class="ct">商品分類</h2>
<div class="ct">
    新增大分類
    <input type="text" name="big" id="big">
    <button onclick="addType('big')">新增</button>
</div>
<div class="ct">
    新增中分類
    <select name="selectBig" id="selectBig">

    </select>
    <input type="text" name="mid" id="mid">
    <button onclick="addType('mid')">新增</button>
</div>
<table class="all">
    <?php
    $bigs=$Type->all(['big_id'=>0]);
    foreach($bigs as $big){
        ?>
    <tr class="tt">
        <td><?=$big['name'];?></td>
        <td class="ct">
            <button onclick="editType(<?=$big['id'];?>,this)">修改</button>
            <button onclick="del('Type',<?=$big['id'];?>)">刪除</button>
        </td>
    </tr>
    <?php
        $mids=$Type->all(['big_id'=>$big['id']]);
        foreach($mids as $mid){        
    ?>

    <tr class="ct pp">
        <td><?=$mid['name'];?></td>
        <td>
            <button onclick="editType(<?=$mid['id'];?>,this)">修改</button>
            <button onclick="del('Type',<?=$mid['id'];?>)">刪除</button>
        </td>
    </tr>
    <?php
        }
    }
    ?>
</table>

<h2 class="ct">商品管理</h2>
<div class="ct">
    <button onclick="location.href='?do=add_item'">新增商品</button>
</div>
<div class="ct">
    <select name="" id="">
        <option value=""></option>
    </select>
</div>
<table class="all">
    <tr class="ct">
        <td class="tt">編號</td>
        <td class="tt">商品名稱</td>
        <td class="tt">庫存量</td>
        <td class="tt">狀態</td>
        <td class="tt">操作</td>
    </tr>
    <?php
    $rows=$Item->all();
    foreach($rows as $row):
    ?>
    <tr class="ct">
        <td class="pp"><?=$row['no'];?></td>
        <td class="pp"><?=$row['name'];?></td>
        <td class="pp"><?=$row['q'];?></td>
        <td class="pp">
            <?php
        if($row['sh']==1){
            echo "販售中";
        }else{
            echo "已下架";
        }
        ?>
        </td>
        <td class="pp">
            <button>修改</button>
            <button>刪除</button>
            <button>上架</button>
            <button>下架</button>
        </td>
    </tr>
    <?php
endforeach;
?>
</table>

<script>
getBig();

function addType(type) {
    let name, big_id
    switch (type) {
        case 'big':
            name = $("#big").val()
            big_id = 0
            break;
        case 'mid':
            name = $("#mid").val()
            big_id = $("#selectBig").val()
            break;
    }
    $.post("./api/save_type.php", {
        name,
        big_id
    }, () => {
        location.reload()
    })
}


function getBig() {
    $.get("./api/get_big.php", (big) => {
        $("#selectBig").html(big)
    })
}

function editType(id, dom) {
    let type = $(dom).parent().prev().text()
    let name = prompt("請輸入你要修改的分類名稱", type)
    $.post("./api/save_type.php", {
        id,
        name
    }, () => {
        location.reload()
    })
}
</script>