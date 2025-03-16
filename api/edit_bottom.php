<?php
include_once "db.php";
dd($_POST);
$bottom=$Bottom->find(1);
$bottom['text']=$_POST['text'];
$Bottom->save($bottom);