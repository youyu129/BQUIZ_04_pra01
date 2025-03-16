<?php
include_once "db.php";

$chk=$Mem->find(['acc'=>$_GET['acc']]);

if($chk['pw']==$_GET['pw']){
    echo 1;
    $_SESSION['login']=$chk['acc'];
}else{
    echo 0;
}
?>