<h2 class="ct">修改商品</h2>

<table class="all">
    <tr>
        <td class="tt ct">所屬大分類</td>
        <td class="pp">
            <select name="big" id="big">
                <?php
                $bigs=$Type->all(['big_id'=>0]);
                foreach($bigs as $big){
                ?>
                <option value="<?=$big['id'];?>"><?=$big['name'];?></option>
                <?php
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td class="tt ct">所屬中分類</td>
        <td class="pp">
            <select name="mid" id="mid">
                <?php
                $mids=$Type->all(['big_id'=>$big['id']]);
                foreach($mids as $mid){
                ?>
                <option value="<?=$mid['id'];?>"><?=$mid['name'];?></option>
                <?php
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td class="tt ct">商品編號</td>
        <td class="pp">
            完成分類後自動分配
        </td>
    </tr>
    <tr>
        <td class="tt ct">商品名稱</td>
        <td class="pp">
            <input type="text" name="name" id="name">
        </td>
    </tr>
    <tr>
        <td class="tt ct">商品價格</td>
        <td class="pp">
            <input type="text" name="price" id="price">
        </td>
    </tr>
    <tr>
        <td class="tt ct">規格</td>
        <td class="pp">
            <input type="text" name="s" id="s">
        </td>
    </tr>
    <tr>
        <td class="tt ct">庫存量</td>
        <td class="pp">
            <input type="text" name="q" id="q">

        </td>
    </tr>
    <tr>
        <td class="tt ct">商品圖片</td>
        <td class="pp">
            <input type="file" name="img" id="img">
        </td>
    </tr>
    <tr>
        <td class="tt ct">商品介紹</td>
        <td class="pp">
            <textarea name="intro" id="intro"></textarea>
        </td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="修改">
    <input type="reset" value="重置">
    <input type="button" value="返回" onclick="location.href='?do=th'">
</div>