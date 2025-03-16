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
    <button onclick='edit()'>編輯</button>
    <button onclick='reset()'>重置</button>
</div>

<script>
function edit() {
    let text = $("#text").val()
    $.post("./api/edit_bottom.php", {
        text
    }, (res) => {
        console.log('res', res);
        location.reload()
    })
}
</script>