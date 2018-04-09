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
                <p>Attendance</p>
                <br>

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Employee's ID</th>
                            <th>Entry Time</th>
                            <th>Exit Time</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>014321</td>
                            <td>10:00</td>
                            <td>16:00</td>
                            <td>6 hrs</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- ./Main Body -->

     
    </body>

    </html>
