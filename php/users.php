
<?php

$sql = "SELECT * FROM mr_users";

$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['user_id']; ?></td>
                <td><?php echo $row['user_name']; ?></td>
                <td><?php echo $row['user_email']; ?></td>
                <td><?php echo $row['user_dept']; ?></td>
                <td>
                    <button class="btn">Password Reset</button>
                    <button class="btn success">Edit</button>
                    <button class="btn danger">Delete</button>
                </td>
            </tr>
        </tbody>
        <?php
    }
}

?>