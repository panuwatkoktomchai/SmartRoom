<?php
$sql = "SELECT id, name, time_start, date_start, location, status_on FROM activities WHERE status_on = '1'";
$result = $conn->query($sql);
?>