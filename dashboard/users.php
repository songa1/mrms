<?php include '../php/config.php'; 
include '../php/authCheck.php';

if($role == 5 || $role == 2){
    echo "<script>alert('Not allowed to access this page!');</script>";
    echo "<script>window.location.href = './attendance.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users - MINECOFIN RMS</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/modal.css">
</head>
<body>
    <div class="container">
        <div class="dash-header">
            <div class="dash-logo">
                <h2>MINECOFIN RMS</h2>
            </div>
            <div class="dash-right-nav">
                <div class="add-box">
                    <img id="show-add-menu" src="../assets/images/add sign.png" alt="Add New sign" >
                    <div class="add-menu">
                        <a href="#" id="show-attendance-modal">Attendance</a>
                        <a href="#" id="show-user-modal">User</a>
                        <a href="#" id="show-role-modal">Role</a>
                    </div>
                </div>
                <div class="profile-box">
                    <img id="show-profile-menu" src="<?php echo $_COOKIE['image']; ?>" alt="Profile picture">
                    <div class="profile-menu">
                        <a href="#">Profile</a>
                        <a href="../php/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="dash-contents">
            <div class="dash-sidebar">
                <div class="sidebar-contents">
                    <a href="./reports.php">Reports</a>
                    <?php if($role != 3) { ?><a href="./attendance.php">Attendance</a><?php } ?>
                    <?php if($role != 3) { ?><a href="./users.php" class="active">Users</a><?php } ?>
                    <?php if($role != 3) { ?><a href="./roles.php">Roles</a><?php }?>
                    <a href="./settings.php">Settings</a>
                </div>
            </div>
            <div class="dash-main">
                <div class="dash-title">
                    <h2>Users</h2>
                    <div>
                        <input class="input" type="text" placeholder="Search users">
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Names</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                        include '../php/users.php';
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- Add attendance modal -->

    <?php
        include '../components/attendance_modal.php';
    ?>

    <!-- Add new user modal -->

    <?php
        include '../components/user_modal.php';
    ?>

    <!-- Add new role modal -->

    <?php
        include '../components/role_modal.php';
    ?>


    <script src="../js/dash.js"></script>
    <script src="../js/modal.js"></script>
</body>
</html>