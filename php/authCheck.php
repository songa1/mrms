

<?php

$_COOKIE['auth'] ? $auth = $_COOKIE['auth'] : null;

$role = $_COOKIE['user_role'];

if(!$auth){
    echo "<script>window.location.href = '../index.php';</script>";
}

?>
