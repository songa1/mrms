

<?php

$_COOKIE['auth'] ? $auth = $_COOKIE['auth'] : null;

if(!$auth){
    echo "<script>window.location.href = '../index.php';</script>";
}

?>
