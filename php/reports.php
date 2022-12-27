

<?php

$today = date('Y-m-d H:i:s');

$user_sql = "SELECT * FROM mr_users";
$attendance_sql = "SELECT * FROM mr_att";

$result_user = $conn->query($user_sql);
$result_att = $conn->query($attendance_sql);

?>

<div class="report-card">
    <h1><?php echo $result_user->num_rows ?></h1>
    <h2>Total users</h2>
</div>
<div class="report-card">
    <h1><?php echo $result_att->num_rows*1000 ?></h1>
    <h2>Money consumed/RWF</h2>
</div>
<div class="report-card">
    <h1><?php echo $result_att->num_rows ?></h1>
    <h2>Today's attendance</h2>
</div>

<?php


?>