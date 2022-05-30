<?php
    require 'db.php';
    $seq = $_POST["seq"];
    $keyword = $_POST["keyword"];
    $ret = update_keyword($seq,$keyword);
    echo $ret;
?>