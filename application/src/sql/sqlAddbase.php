<?php
    include '../../../config/database/connect.php';
    if ($_REQUEST['name'] && $_REQUEST['id_student'] && $_REQUEST['tell'] && $_REQUEST['branch'] && $_REQUEST['faculty']) {
        $sqlInsert = "INSERT INTO base_finger VALUES ('".$_REQUEST['id_student']."','".$_REQUEST['name']."','".$_REQUEST['tell']."','".$_REQUEST['branch']."','".$_REQUEST['faculty']."','".date("Y/m/d") ."','0')";
        if ($conn->query($sqlInsert) === TRUE) {
           header('location:http://localhost/scan_project/html5/?id=base/add_base');
        } else {
            echo "Error: " . $sqlInsert . "<br>" . $conn->error;
        }
    }else {
        ?><script>window.history.back();</script><?php 
    }  
?>