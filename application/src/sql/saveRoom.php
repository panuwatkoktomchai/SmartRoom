<?php
    include '../../../config/database/connect.php';
    $id = date("Ymdhis");
    if ($_REQUEST['name'] && $_REQUEST['level'] && $_REQUEST['building']) {
        $sqlInsert = "INSERT INTO room VALUES ('".$id."','".$_REQUEST['name']."','".$_REQUEST['level']."','".$_REQUEST['building']."')";
        if ($conn->query($sqlInsert) === TRUE) {
           header('location:http://localhost/scan_project/html5/?id=setting/settingRoom');
        } else {
            echo "Error: " . $sqlInsert . "<br>" . $conn->error;
        }
    }else {
        ?><script>window.history.back('?txt=error');</script><?php 
    }  
?>