<h2 class="ct">修改管理員權限</h2>
<form action="./api/save_admin.php" method="post">
    <?php
$row=$Admin->find($_GET['id']);
$userP=unserialize($row['p']);
// dd($userP);
?>
    <table class="all">
        <tr>
            <td class="tt ct">帳號</td>
            <td class="pp">
                <input type="text" name="acc" id="acc" value="<?=$row['acc'];?>">
            </td>
        </tr>
        <tr>
            <td class="tt ct">密碼</td>
            <td class="pp">
                <input type="password" name="pw" id="pw" value="<?=$row['pw'];?>">
            </td>
        </tr>
        <tr>
            <td class="tt ct">權限</td>
            <td class="pp">
                <input type="checkbox" name="p[]" value="1" <?=in_array(1,$userP)?'checked':'';?>>商品分類與管理<br>
                <input type="checkbox" name="p[]" value="2" <?=in_array(2,$userP)?'checked':'';?>>訂單管理<br>
                <input type="checkbox" name="p[]" value="3" <?=in_array(3,$userP)?'checked':'';?>>會員管理<br>
                <input type="checkbox" name="p[]" value="4" <?=in_array(4,$userP)?'checked':'';?>>頁尾版權區管理<br>
                <input type="checkbox" name="p[]" value="5" <?=in_array(5,$userP)?'checked':'';?>>最新消息管理
            </td>
        </tr>
    </table>

    <div class="ct">
        <input type="hidden" name="id" value="<?=$row['id'];?>">
        <input type="submit" value="修改">
        <input type="reset" value="重置">
    </div>
</form>