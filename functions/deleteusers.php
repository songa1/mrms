
<?php
    include '../php/config.php';
    $id = $_GET['id'];

    $g = "DELETE FROM mr_users WHERE user_id='$id'";

    $del = $conn->query($g);

    if($del === TRUE) {
        echo "<script>alert('User has been deleted!')</script>";
        echo "<script>window.location.href = '../dashboard/users.php';</script>";
    }

?>