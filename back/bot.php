<?php
if(isset($_POST['id'])){
    $Bottom->save($_POST);
}
?>

<form action="?do=bot" method="post">
    <h2 class="ct">編輯頁尾版權區</h2>
    <table class="all">
        <tr>
            <td class="tt ct">頁尾宣告內容</td>
            <td class="pp ct">
                <input type="text" name="text" id="text" value="<?=$Bottom->find(1)['text'];?>">
            </td>
        </tr>
    </table>
    <div class="ct">
        <input type="hidden" name="id" value="1">
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
    </div>
</form>