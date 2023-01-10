
<?php

include '../php/authCheck.php';

$role_sql = "SELECT * FROM mr_roles";
$role_results = $conn->query($role_sql);


if(isset($_POST['add_user'])){
    if($role == 5 || $role == 2){
        echo "<script>alert('Not allowed to access this page!');</script>";
        echo "<script>window.location.href = './attendance.php'</script>";
    }else{
        $user_name =  $_POST['user_name'];
        $user_email =  $_POST['user_email'];
        $user_dept =  $_POST['user_dept'];
        $user_phone =  $_POST['user_phone'];
        $user_role = $_POST['user_role'];
        $user_photo = "../assets/images/placeholder.png";
        $today = date('Y-m-d H:i:s');

        $sql = "INSERT INTO mr_users (`user_name`, `user_email`, `user_dept`, `user_phone`, `user_role`,`user_photo`, `user_created_at`) VALUES ('$user_name', '$user_email','$user_dept','$user_phone','$user_role','$user_photo', '$today')";

        if($conn->query($sql) === TRUE){
            echo "<script>alert('User added!');</script>";
            echo "<script>document.querySelector('.modal').style.display = 'none';</script>";
            echo "<script>window.location.href = 'users.php'</script>";
        } else {
            echo $conn->error();
            echo "<script>alert('There has been error! ');</script>";
        }
    }
}


if($role_results->num_rows > 0){
?>

<div class="modal" id="user-modal">
    <div class="modal-blur"></div>
    <form method="POST" class="modal-contents">
        <div class="modal-header">
            <h2>Add New User</h2>
        </div>
        <div class="modal-body">
            <div>
                <input type="text" placeholder="User name" class="input" name="user_name">
                <input type="email" placeholder="User email" class="input" name="user_email">
                <input type="text" placeholder="User department" class="input" name="user_dept">
                <input type="tel" placeholder="User phone" class="input" name="user_phone">
                <select class="input" name="user_role">
                <?php 
                while($row = $role_results->fetch_assoc()) {
                    ?>
                        <option value="<?php echo $row['role_id']; ?>"><?php echo $row['role_name']; ?></option>
                    <?php
                }
                ?>
                </select>
                <!-- <input type="file" placeholder="User photo" class="input" name="user_photo"> -->
            </div>
        </div>
        <hr>
        <div class="modal-footer">
            <button class="btn danger" id="close-user-modal">Close</button>
            <input type="submit" name="add_user" id="add_user" class="btn" value="Add">
        </div>
    </form>
</div>

<?php
}
?>