<?php
$sql = "SELECT finger_id_students, finger_name, finger_tell, (SELECT branch_finger.branch_name FROM branch_finger WHERE branch_finger.branch_id = base_finger.finger_branch) AS branch, (SELECT faculty_finger.faculty_name FROM faculty_finger WHERE faculty_finger.faculty_id = base_finger.finger_faculty) AS faculty, finger_update_date, finger_score FROM base_finger";
$result = $conn->query($sql);
?>