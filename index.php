<!DOCTYPE html>
<?php
    session_start();
    if ($_SESSION["userlogin"] == "") {
        header("location:application/src/login/login.php");
    }
?>
<html>
<title>W3.CSS Template</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="shortcut icon" href="img/">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/family.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="js/jquery.min.js"></script>
<script src="bower_components/angular-datatables/dist/jquery.dataTables.min.js"></script>

<!-- AngularJS -->
<script src="js/angular.min.js"></script>
<script src="bower_components/angular-datatables/dist/angular-datatables.min.js"></script>
<link rel="stylesheet" href="bower_components/angular-datatables/dist/jquery.dataTables.min.css">

<!-- authentification firebase -->
<script src="https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.css" />

<!-- Firebase -->
<script src="js/firebase.js"></script>

<!-- AngularFire -->
<script src="js/angularfire.min.js"></script>

<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBgwtyKhqDr0bwbHYyski4zXV3v28W0aVw",
    authDomain: "smartroom-a6f97.firebaseapp.com",
    databaseURL: "https://smartroom-a6f97.firebaseio.com",
    projectId: "smartroom-a6f97",
    storageBucket: "smartroom-a6f97.appspot.com",
    messagingSenderId: "400523714436"
  };
  firebase.initializeApp(config);

</script>
<!-- firebase -->
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">
<?php include 'config/app/app.php'; ?>
<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> เมนู</button>
  <span ><a href="php/auth.php" class="w3-bar-item w3-right">LOGOUT</a></span>
</div>
<?php include 'application/src/menu/sidebar.php'; ?>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<?php
    if ($_REQUEST['id']!="") {
        
        echo '<div class="w3-main" style="margin-left:300px;margin-top:43px;">';
        echo '<div class="w3-container city">';
        
        include 'application/src/'.$_REQUEST['id'].'.php';
        
         echo' </div>';
         echo' </div>';
        
    }else {
        echo '<div class="w3-main" style="margin-left:300px;margin-top:43px;">';
        echo '<div class="w3-container city">';
        
        include 'application/src/dashboard/dashboard.php';
        
         echo' </div>';
         echo' </div>';
    }
?>


<!-- footer -->
<?php include 'application/src/footer/footer.php'; ?>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
