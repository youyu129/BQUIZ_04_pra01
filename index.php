<?php
include_once "./api/db.php";
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>┌精品電子商務網站」</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/js.js"></script>
    <script src="./js/jquery-3.4.1.min.js"></script>
</head>

<body>
    <!-- <iframe name="back" style="display:none;"></iframe> -->
    <div id="main">
        <div id="top">
            <a href="?">
                <img src="./icon/0416.jpg" style="width:500px">
            </a>
            <div style="padding:10px;display:inline-block;">
                <a href="index.php">回首頁</a> |
                <a href="?do=news">最新消息</a> |
                <a href="?do=look">購物流程</a> |
                <a href="?do=buycart">購物車</a> |
                <?php
                if(isset($_SESSION['login'])){
                    echo "<a href='./api/logout.php'>會員登出</a> |";
                }else{
                    echo "<a href='?do=login'>會員登入</a> |";
                }
                ?>
                <?php
                if(isset($_SESSION['admin'])){
                    echo "<a href='admin.php'>返回管理</a>";
                }else{
                    echo "<a href='?do=admin'>管理登入</a>";
                }
                ?>
            </div>
            <marquee>情人節特惠活動 &nbsp; 為了慶祝七夕情人節，將舉辦情人兩人到現場有七七折之特惠活動~</marquee>

        </div>
        <div id="left" class="ct">
            <div style="min-height:400px;" class="ww">
                <?php
                $bigs=$Type->all(['big_id'=>0]);
                foreach($bigs as $big){
                    echo "<div class='ww'>";
                    echo "<a href='?type=".$big['id']."'>";
                    echo $big['name'];
                    echo "(".$Item->count(['big'=>$big['id'],'sh'=>1]).")";
                    echo "</a>";
                    $mids=$Type->all(['big_id'=>$big['id']]);
                    echo "<div class='s'>";
                        foreach($mids as $mid){
                            echo "<a href='?type=".$mid['id']."' style='background:lightblue;'>";
                            echo $mid['name'];
                            echo "(".$Item->count(['mid'=>$mid['id'],'sh'=>1]).")";
                            echo "</a>";
                        }  
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>
            <span>
                <div>進站總人數</div>
                <div style="color:#f00; font-size:28px;">
                    00005 </div>
            </span>
        </div>
        <div id="right">
            <?php
                $do=$_GET['do']??'main';
                $file="./front/".$do.".php";
                if(file_exists($file)){
                        include $file;
                }else{
                        include "./front/main.php";
                }
                ?>
        </div>
        <div id="bottom" style="line-height:70px;background:url(./icon/bot.png); color:#FFF;" class="ct">
            <?=$Bottom->find(1)['text'];?></div>
    </div>

</body>

</html>