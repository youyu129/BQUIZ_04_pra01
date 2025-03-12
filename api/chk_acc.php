<?php
include_once "db.php";

$chk=$Mem->count(['acc'=>$_GET['acc']]);
if($chk){
    echo 1;
}else{
    echo 0;
}
?>