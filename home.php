<?php
/*PHP Session Begins*/

session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
/* Database Connection Aborted*/
$DBcon->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php";?>
</head>

<body>
    <!-- Responsive Navigation -->
    <?php include "navigation.php";?>
    <!-- ./Responsive Navigation -->
    
    <!-- Main Body -->
    <div class="col-md-12">
    <div class="container main">
       
        <p>Welcome <strong><?php echo $userRow['username']; ?></strong><br>to RFID Attendance System</p>
    </div>
    <!-- ./Main Body -->
    
    <!-- Footer -->
    
    <?php include "footer.php"?>
    <!-- ./Footer -->
</div>
</body>

</html>
