<?php
include_once "includes/db.php";
$sql = "select * from users";
$result = $conn->query($sql);
?>
<table style ="border =1;">
    <tr>
        <th>ID</th>
        <th>User Name</th>
        <th>email</th>

    </tr>
    
    <?php  
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['user_id']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>";
    }
    ?>
   
</table>