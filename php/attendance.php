
<?php

$sql = "SELECT * FROM mr_att";

$results = $conn->query($sql);
if($results->num_rows > 0){
    while($row = $results->fetch_assoc()) {
        $user_id = $row['user_id'];
        $user_sql = "SELECT * FROM mr_users WHERE user_id='$user_id'";
        $result = mysqli_query($conn, $user_sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    ?>
        <tbody>
            <tr>
                <td><?php echo $row['att_id'] ?></td>
                <td><?php echo $user['user_name'] ?></td>
                <td><?php echo $row['att_price'] ?></td>
                <td>
                    <button class="btn success">Edit</button>
                    <button class="btn danger">Delete</button>
                </td>
            </tr>                       
        </tbody>
        <?php
    }
}

?>