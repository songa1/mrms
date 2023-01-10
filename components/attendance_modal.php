<?php

include '../php/authCheck.php';

$sql = "SELECT * FROM mr_users";
$results = $conn->query($sql);
if($results->num_rows > 0){
?>

<div class="modal" id="attendance-modal">
    <div class="modal-blur"></div>
    <form method="POST" class="modal-contents">
        <div class="modal-header">
            <h2>Record Attendance</h2>
        </div>
        <div class="modal-body">
            <div>
                <select placeholder="Choose a user" class="input" name="user_id">
                <?php 
                while($row = $results->fetch_assoc()) {
                    ?>
                        <option value="<?php echo $row['user_id']; ?>"><?php echo $row['user_name']." - ".$row['user_email']; ?></option>
                    <?php
                }
                ?>
                </select>
            </div>
        </div>
        <hr>
        <div class="modal-footer">
            <button class="btn danger" id="close-att-modal">Close</button>
            <input type="submit" class="btn" value="Record" name="record_attendance">
        </div>
    </form>
</div>

<?php
}

if(isset($_POST['record_attendance'])){
    $user_id = $_POST['user_id'];
    $today = date('Y-m-d H:i:s');

    $price_sql = "SELECT * FROM mr_price WHERE price_id=1";
    $price_one = mysqli_query($conn, $price_sql);
    $price = mysqli_fetch_array($price_one, MYSQLI_ASSOC);
    $price_amount = $price['price_amount'];

    $sql = "INSERT INTO mr_att (`user_id`, `att_price`, `att_created_at`) VALUES ('$user_id', '$price_amount', '$today')";


    if($conn->query($sql) === TRUE){
        echo "<script>alert('Attendance recorded!');</script>";
        echo "<script>document.querySelector('.modal').style.display = 'none';</script>";
        echo "<script>window.location.href = 'attendance.php'</script>";
    }else {
        echo $conn->error();
        echo "<script>alert('There has been error! ');</script>";
    }
}

?>