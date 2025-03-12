<h2 class="ct">會員註冊</h2>
<form action="./api/reg.php" method="post">
    <table style="width:60%;margin:auto;">
        <tr class="ct">
            <td class="tt">姓名</td>
            <td class="pp">
                <input type="text" name="name" id="name">
            </td>
        </tr>
        <tr class="ct">
            <td class="tt">帳號</td>
            <td class="pp">
                <input type="text" name="acc" id="acc">
                <button>檢測帳號</button>
            </td>
        </tr>
        <tr class="ct">
            <td class="tt">密碼</td>
            <td class="pp">
                <input type="password" name="pw" id="pw">
            </td>
        </tr>
        <tr class="ct">
            <td class="tt">電話</td>
            <td class="pp">
                <input type="text" name="tel" id="tel">
            </td>
        </tr>
        <tr class="ct">
            <td class="tt">住址</td>
            <td class="pp">
                <input type="text" name="addr" id="addr">
            </td>
        </tr>
        <tr class="ct">
            <td class="tt">電子信箱</td>
            <td class="pp">
                <input type="text" name="email" id="email">
            </td>
        </tr>
    </table>
    <div class="ct">
        <input type="submit" value="註冊">
        <input type="reset" value="重置">
    </div>
</form>