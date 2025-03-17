<h2 class="ct">會員註冊</h2>
<!-- <form action="./api/reg.php" method="post"> -->
<table style="width:60%;margin:auto;">
    <tr>
        <td class="ct tt">姓名</td>
        <td class="pp">
            <input type="text" name="name" id="name">
        </td>
    </tr>
    <tr>
        <td class="ct tt">帳號</td>
        <td class="pp">
            <input type="text" name="acc" id="acc">
            <button onclick="chkacc()">檢測帳號</button>
        </td>
    </tr>
    <tr>
        <td class="ct tt">密碼</td>
        <td class="pp">
            <input type="password" name="pw" id="pw">
        </td>
    </tr>
    <tr>
        <td class="ct tt">電話</td>
        <td class="pp">
            <input type="text" name="tel" id="tel">
        </td>
    </tr>
    <tr>
        <td class="ct tt">住址</td>
        <td class="pp">
            <input type="text" name="addr" id="addr">
        </td>
    </tr>
    <tr>
        <td class="ct tt">電子信箱</td>
        <td class="pp">
            <input type="text" name="email" id="email">
        </td>
    </tr>
</table>
<div class="ct">
    <button onclick="reg()">註冊</button>
    <button>重置</button>
    <!-- <input type="submit" value="註冊"> -->
    <!-- <input type="reset" value="重置"> -->
</div>
<!-- </form> -->

<script>
function chkacc() {
    console.log("chk acc ok");
    if ($("#acc").val() == 'admin') {
        alert("不可使用admin")
        location.reload()
    }
    let acc = $("#acc").val()
    $.get("./api/chk_acc.php", {
        acc
    }, (res) => {

        if (parseInt(res) >= 1) {
            alert("帳號重複")
        } else {
            alert("帳號可使用")
        }
    })
}

function reg() {
    console.log('reg ok');
    let user = {
        name: $("#name").val(),
        acc: $("#acc").val(),
        pw: $("#pw").val(),
        tel: $("#tel").val(),
        addr: $("#addr").val(),
        email: $("#email").val()
    }
    if (user.acc == 'admin') {
        alert("不可使用admin")
    } else {
        $.get("./api/chk_acc.php", {
            acc: user.acc
        }, (res) => {
            if (parseInt(res) >= 1) {
                alert("帳號重複")
            } else {
                $.post("./api/reg.php", user, (res) => {
                    // console.log('res', res)
                    alert("註冊成功，歡迎加入")
                    location.href = 'index.php'
                })
            }
        })
    }
}
</script>