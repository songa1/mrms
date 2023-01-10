<?php 

include '../php/config.php'; 

include '../php/authCheck.php';

$price_sql = "SELECT * FROM mr_price WHERE price_id=1";
$price_one = mysqli_query($conn, $price_sql);
$price = mysqli_fetch_array($price_one, MYSQLI_ASSOC);
$price_amount = $price['price_amount'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - MINECOFIN RMS</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/reports.css">
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="../css/settings.css">
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
                    <a href="./attendance.php">Attendance</a>
                    <a href="./users.php" >Users</a>
                    <a href="./roles.php" >Roles</a>
                    <a href="./settings.php" class="active">Settings</a>
                </div>
            </div>
            <div class="dash-main">
                <div class="dash-title">
                    <h2>Settings</h2>
                    <!-- <div>
                        <input class="input" type="date" placeholder="Search reports">
                    </div> -->
                </div>
                <div class="report-cards">
                    <form method="POST" id="update_price">
                        <label for="price_data">Daily Meal Price/RWF</label>
                        <input type="number" name="price-data" class="input" id="price_data" value="<?php echo $price_amount ?>">
                        <input type="submit" value="Update" class="btn" name="update_price_btn">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add attendance modal -->

    <?php
    include '../components/attendance_modal.php';

    if(isset($_POST['update_price_btn'])){
        $price_data = $_POST['price-data'];

        $update_price_sql = "UPDATE mr_price SET price_amount='$price_data' WHERE price_id=1";

        if($conn->query($update_price_sql) === TRUE){
            echo "<script>alert('Price updated!');</script>";
            echo "<script>window.location.href = './settings.php'</script>";
        }else{
            echo "<script>alert('There was an error!');</script>";
            echo $conn->error;
        }
    }
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