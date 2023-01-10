
<?php

include '../php/authCheck.php';



?>

<div class="modal" id="role-modal">
    <div class="modal-blur"></div>
    <form class="modal-contents" method="POST">
        <div class="modal-header">
            <h2>Add New Role</h2>
        </div>
        <div class="modal-body">
            <div>
                <input type="text" name="role_name" placeholder="Role Name" class="input">
                <textarea name="role_desc" id="role_desc" rows="5" class="input" placeholder="Role description"></textarea>
            </div>
        </div>
        <hr>
        <div class="modal-footer">
            <button class="btn danger" id="close-role-modal">Close</button>
            <input type="submit" name="add_role" id="add_role" class="btn" value="Add">
        </div>
    </form>
</div>

<?php

if(isset($_POST['add_role'])){
    if($role == 5 || $role == 2){
        echo "<script>alert('Not allowed to access this page!');</script>";
        echo "<script>window.location.href = './attendance.php'</script>";
    }else{
        $role_name =  $_POST['role_name'];
        $role_desc =  $_POST['role_desc'];
        $today = date('Y-m-d H:i:s');

        $sql = "INSERT INTO mr_roles (`role_name`, `role_desc`, `role_created_at`) VALUES ('$role_name', '$role_desc', '$today')";

        if($conn->query($sql) === TRUE){  
            echo "<script>alert('Role added!')</script>"; 
            echo "<script>document.querySelector('.modal').style.display = 'none';</script>";
            echo "<script>window.location.href = 'roles.php'</script>";
        } else {
            echo "<script>alert('There has been error!');</script>";
            echo $conn->error;
        }
    }
}

$conn->close();

?>