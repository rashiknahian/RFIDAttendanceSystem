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
                <p>Enter Employees Data</p>
                <br>
                <form method="post" action="employeeDataSave.php" enctype='multipart/form-data'>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Employee's Id" name="employeeId" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Full Name" name="username" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Designation" name="designation" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" name="email" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone No" name="phone" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Address" name="address" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Blood Group" name="bloodGroup" required />
                    </div>
                    <div class="form-group">
                        <h3>Select image to upload:</h3>
                        <input class="form-control" type="file" name="image" />
                    </div>
                    <div class="form-group">
                       <div class="col-md-6">
                           <input type="submit" class="form-control" name="submit" value="Submit" />
                       </div>
                       <div class="col-md-6">
                           <input type="reset" class="form-control" value="Reset">
                       </div>
                        
                        

                    </div>
                </form>
            </div>
        </div>
        <!-- ./Main Body -->

        
    </body>

    </html>
