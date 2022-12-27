
<?php

$sql = "SELECT * FROM mr_att";

$results = $conn->query($sql);
if($results->num_rows > 0){
    while($row = $results->fetch_assoc()) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['att_id'] ?></td>
                <td><?php echo $row['user_id'] ?></td>
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