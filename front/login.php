<h2>第一次購物</h2>
<a href="?do=reg"><img src="./icon/0413.jpg" alt=""></a>

<h2>會員登入</h2>


<!-- <form action="./api/login.php" method="post"> -->
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
        <td class="pp">
            <?php
                $a=rand(10,99);
                $b=rand(10,99);
                $ans=$a+$b;
                echo $a . "+" . $b . "=";
                ?>
            <input type="hidden" name="ans" id="ans" value="<?=$ans;?>">
            <input type="number" name="chk" id="chk">
        </td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="確認" onclick="login()">
</div>
<!-- </form> -->

<script>
function login() {
    let user = {
        acc: $("#acc").val(),
        pw: $("#pw").val()
    }
    let chk = $("#chk").val()
    let ans = $("#ans").val()
    if (chk != ans) {
        alert("驗證碼錯誤")
    } else {
        $.get("./api/chk_pw.php", user, (res) => {
            if (parseInt(res) == 1) {
                location.href = "index.php";
            } else {
                alert("帳號或密碼錯誤")
            }
        })
    }
}
</script>