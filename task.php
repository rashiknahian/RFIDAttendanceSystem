<?php
/*PHP Session Begins*/
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();

$query2 = $DBcon->query("SELECT * FROM employeeData ORDER BY ID DESC ");

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
                <p>Assign Task to Employee</p>
                <br>
                <form action="taskAdd.php" method="post">
                    <div class="form-group">
                        <label for="">Select Employee's Id</label>
                        <select name="employeeId">
                        <?php
                        
                        while($data=$query2->fetch_array()){
                            echo "<option value='".$data['employeeId']."'>'".$data['employeeId']."'</option>";
                        }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Task" name="task" required />
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
