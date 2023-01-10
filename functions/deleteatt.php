
<?php
    include '../php/config.php';
    $id = $_GET['id'];

    $g = "DELETE FROM mr_att WHERE att_id='$id'";

    $del = $conn->query($g);

    if($del === TRUE) {
        echo "<script>alert('Attendance has been deleted!')</script>";
        echo "<script>window.location.href = '../dashboard/attendance.php';</script>";
    }

?>