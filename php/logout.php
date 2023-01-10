<?php
include './config.php';

if($_COOKIE['auth']){
    unset($_COOKIE['auth']);
    echo "<script>window.location.href = '../index.php';</script>";
}

?>
