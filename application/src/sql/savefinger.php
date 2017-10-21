<?php 
    include '../../../config/database/connect.php';
    if ($_REQUEST['id'] && $_REQUEST['student'] && $_REQUEST['hand'] && $_REQUEST['finger']) {
        $sqlInsert = "INSERT INTO finger VALUES ('".$_REQUEST['id']."','".$_REQUEST['student']."','".$_REQUEST['finger']."','".$_REQUEST['hand']."')";
        if ($conn->query($sqlInsert) === TRUE) {
           header('location:http://localhost/scan_project/html5/?id=finger/finger&finger='.$_REQUEST['student']);
        } else {
            echo "Error: " . $sqlInsert . "<br>" . $conn->error;
        }
    }else {
        ?><script>window.history.back('?txt=error');</script><?php 
    }  
?>