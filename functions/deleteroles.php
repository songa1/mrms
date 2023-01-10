
<?php
    include '../php/config.php';
    $id = $_GET['id'];

    $g = "DELETE FROM mr_roles WHERE role_id='$id'";

    $del = $conn->query($g);

    if($del === TRUE) {
        echo "<script>alert('Role has been deleted!')</script>";
        echo "<script>window.location.href = '../dashboard/roles.php';</script>";
    }

?>