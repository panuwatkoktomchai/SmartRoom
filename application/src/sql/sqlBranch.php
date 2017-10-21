<?php
 $sqlBranch = "SELECT branch_id, branch_name FROM branch_finger";
 $result = $conn->query($sqlBranch);
 if ($result->num_rows >0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        echo "<option value='".$row['branch_id']."'>";
        echo $row['branch_name'];
        echo '</option>';
    }
} else {
    echo "<option disabled selected> error </option>";
}
$conn->close();
?>