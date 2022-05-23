<?php
    require 'db.php';
    $seq = $_POST["seq"];
    $ret = delete_keyword($seq);
    echo $ret;
?>