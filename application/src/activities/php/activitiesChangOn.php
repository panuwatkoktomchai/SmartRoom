<?php
include '../../../../config/database/connect.php';
$sql = "UPDATE activities SET status_on = 1 WHERE id = ".$_REQUEST['id']."";
if ($conn->query($sql) === TRUE) {
    ?><script>window.location.href='http://localhost/scan_project/html5/?id=activities/openActivities&txt=true';</script><?php 
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>