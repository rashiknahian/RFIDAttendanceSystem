<?php
/*PHP Session Begins*/
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();


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
                <p>View Employees' Attendance</p>

                <!-- Data View In Table-->
                <table class="table table-bordered table-striped table-hover table-responsive" id="tableData">
                    <thead>
                        <tr class="success">
                            <th>Employee Id</th>
                            <th>Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Duration</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $query2 = $DBcon->query("SELECT * FROM attendance");
            while($data=$query2->fetch_array()){
                
           echo "
                <tr>
                    
                    <td>".$data['username']."</td>
                    <td>".$data['date']."</td>
                    <td>".$data['starttime']."</td>
                    <td>".$data['endtime']."</td>
                    
                  
                    
                    
                </tr>
                "; 
            }
            //While Loop Ends
            ?>
                    </tbody>
                </table>

            </div>
            <!-- ./Main Body -->

        </div>
    </body>

    </html>
