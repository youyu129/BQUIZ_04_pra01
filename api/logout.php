<?php
include_once "db.php";
if(isset($_SESSION['login'])){
    unset($_SESSION['login']);
}
if(isset($_SESSION['admin'])){
    unset($_SESSION['admin']);
    unset($_SESSION['p']);
}
to("../index.php");
?>