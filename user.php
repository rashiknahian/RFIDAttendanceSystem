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

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Employee's Id" name="username" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Full Name" name="username" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Designation" name="username" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" name="username" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone No" name="username" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Blood Group" name="username" required />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit
			</button>

                </div>
            </div>
        </div>
        <!-- ./Main Body -->

        <!-- Footer -->

        <?php include "footer.php"?>
        <!-- ./Footer -->
    </body>

    </html>
