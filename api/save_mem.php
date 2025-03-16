<?php
include_once "db.php";
// dd($_POST);
$Mem->save($_POST);

to("../admin.php?do=edit_mem&id=".$_POST['id']);
?>