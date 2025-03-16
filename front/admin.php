<h2>管理者登入</h2>

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
<?php
// echo serialize([1,2,3,4,5]);
// a:5:{i:0;i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;i:5;}
?>
<script>
function login() {
    let user = {
        acc: $("#acc").val(),
        pw: $("#pw").val()
    }
    let chk = $("#chk").val()
    let ans = $("#ans").val()
    if (chk != ans) {
        alert("對不起，您輸入的驗證碼有誤請您重新輸入")
        $("#chk").val("")
    } else {
        $.get("./api/chk_pw_admin.php", user, (res) => {
            if (parseInt(res) == 1) {
                location.href = "admin.php";
            } else {
                alert("帳號或密碼錯誤")
            }
        })
    }
}
</script>