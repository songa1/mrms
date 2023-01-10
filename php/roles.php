
<?php

$sql = "SELECT * FROM mr_roles";

$results = $conn->query($sql);
if($results->num_rows > 0){
    while($row = $results->fetch_assoc()) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['role_id'] ?></td>
                <td><?php echo $row['role_name'] ?></td>
                <td><?php echo $row['role_desc'] ?></td>
                <td>
                    <button class="btn success">Edit</button>
                    <a href="../functions/deleteroles.php?id=<?php echo $row['role_id']; ?>" class="btn danger" >Delete</a>
                </td>
            </tr>                       
        </tbody>
        <?php
    }
}

?>