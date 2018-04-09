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
                <p>View Employees' Data</p>

                <!-- Data View In Table-->
                <table class="table table-bordered table-striped table-hover table-responsive" id="tableData">
                    <thead>
                        <tr class="success">
                            <th>Image</th>
                            <th>Id</th>
                            <th>Full Name</th>
                            <th>Designation</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Blood Group</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $query2 = $DBcon->query("SELECT * FROM employeeData");
            while($data=$query2->fetch_array()){
           echo "
                <tr>
                    <td>"."</p><img class=\"employeeImg\" src=\"view.php?id=".$data['id'] . " \"><br/><a href=\"view.php?id=".$data['id'] ."\" target=\"_blank\">Click to view large Image</a><hr/>"."</td>
                    <td>".$data['employeeId']."</td>
                    <td>".$data['username']."</td>
                    <td>".$data['designation']."</td>
                    <td>".$data['email']."</td>
                    <td>".$data['phone']."</td>
                    <td>".$data['address']."</td>
                    <td>".$data['bloodGroup']."</td>
                </tr>
            </tbody>
            </table>
        "
           ;
             
            
            }
           
        ?>
            </div>
            <!-- ./Main Body -->

            </div>
        </div>
    </body>

    </html>