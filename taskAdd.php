<?php

$link = mysqli_connect("localhost", "root", "root", "RFIDAttendanceSystem");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$employeeId = mysqli_real_escape_string($link, $_REQUEST['employeeId']);
$task = mysqli_real_escape_string($link, $_REQUEST['task']);
$dataTime = date("Y-m-d H:i:s");

 
// attempt insert query execution
$sql = "INSERT INTO task (employeeId, task,created) VALUES ('$employeeId', '$task','$dataTime' )";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>