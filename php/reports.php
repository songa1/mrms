

<?php

$today = date('Y-m-d');

$user_sql = "SELECT * FROM mr_users";
$attendance_sql = "SELECT * FROM mr_att WHERE att_created_at='$today'";
$price_sql = "SELECT * FROM mr_price WHERE price_id=1";

$result_user = $conn->query($user_sql);
$result_att = $conn->query($attendance_sql);
$price_one = mysqli_query($conn, $price_sql);
$price = mysqli_fetch_array($price_one, MYSQLI_ASSOC);
$price_amount = $price['price_amount'];

?>

<div class="report-card">
    <h1><?php echo $result_user->num_rows ?></h1>
    <h2>Total users</h2>
</div>
<div class="report-card">
    <h1><?php echo $result_att->num_rows*$price_amount; ?></h1>
    <h2>Money consumed/RWF</h2>
</div>
<div class="report-card">
    <h1><?php echo $result_att->num_rows ?></h1>
    <h2>Today's attendance</h2>
</div>

<?php


?>