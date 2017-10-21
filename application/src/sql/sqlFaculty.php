<?php
     $sqlFaculty = "SELECT faculty_id, faculty_name FROM faculty_finger";
     $result = $conn->query($sqlFaculty);
     if ($result->num_rows >0) {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            echo "<option value='".$row['faculty_id']."'>";
            echo $row['faculty_name'];
            echo '</option>';
        }
    } else {
        echo "<option disabled selected> error </option>";
    }
    $conn->close();
?>