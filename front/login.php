<h2>第一次購物</h2>

<h2>會員登入</h2>

<a href="?do=reg"><img src="./icon/0413.jpg" alt=""></a>

<form action="./api/login.php" method="post">
    <table class="ct" style="width:60%;margin:20px auto;">

        <tr>
            <td class="tt">帳號</td>
            <td class="pp">
                <input type="text" name="acc" id="acc">
            </td>
        </tr>
        <tr>
            <td class="tt">密碼</td>
            <td class="pp">
                <input type="password" name="pw" id="pw">
            </td>
        </tr>
        <tr>
            <td class="tt">驗證碼</td>
            <td class="pp">35+47=
                <input type="number" name="chk" id="chk">
            </td>
        </tr>
    </table>
    <div class="ct">
        <input type="submit" value="確認">
    </div>
</form>