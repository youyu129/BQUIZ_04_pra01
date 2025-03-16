<?php
include_once "db.php";

$_POST['p']=serialize($_POST['p']);
$Admin->save($_POST);

to("../admin.php?do=admin")
?>