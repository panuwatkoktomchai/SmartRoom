<?php
    include '../../../../config/database/connect.php';
    $id = date("Ymdhis");
    if ($_REQUEST['aname'] && $_REQUEST['atime'] && $_REQUEST['atime']) {
        $sqlInsert = "INSERT INTO activities VALUES ('".$id."','".$_REQUEST['aname']."','".$_REQUEST['atime']."','".$_REQUEST['adate']."','".$_REQUEST['alocation']."',0)";
        if ($conn->query($sqlInsert) === TRUE) {
           header('location:http://localhost/scan_project/html5/?id=activities/addActivities');
        } else {
            echo "Error: " . $sqlInsert . "<br>" . $conn->error;
        }
    }else {
        ?><script>window.history.back('?txt=error');</script><?php 
    }  
?>