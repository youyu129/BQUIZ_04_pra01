<?php
include_once "db.php";

$chk=$Admin->find(['acc'=>$_GET['acc']]);

if($chk['pw']==$_GET['pw']){
    echo 1;
    $_SESSION['admin']=$chk['acc'];
    $_SESSION['p']=$chk['p'];
}else{
    echo 0;
}
?>