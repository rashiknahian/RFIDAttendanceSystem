<?php
//Database Connection Establish
include "dbconnect.php";

//Variables for Form Data
$employeeId = mysqli_real_escape_string($DBcon, $_REQUEST['employeeId']);
$task = mysqli_real_escape_string($DBcon, $_REQUEST['task']);
$dataTime = date("Y-m-d H:i:s");

 
// attempt insert query execution
$query = "INSERT INTO task (employeeId, task,created) VALUES ('$employeeId', '$task','$dataTime' )";
if(mysqli_query($DBcon, $query)){
    echo "<h1>Successfully data Recorded.</h1><br><a href=\"task.php\">  Back </a>";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($DBcon);
}
 
// close connection
mysqli_close($DBcon);
?>