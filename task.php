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
                <p>Assign Task to Employee</p>
                <br>

                <form action="">
                    <div class="form-group">
                        <label for="">Select Employee's Id</label>
                        <select name="carlist" form="carform">
  <option value="volvo">1234</option>
  <option value="saab">3456</option>
  <option value="opel">987</option>
  <option value="audi">3456</option>
</select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Task" name="username" required />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit
			</button>

                    </div>
                </form>
            </div>
        </div>
        <!-- ./Main Body -->

        <!-- Footer -->

        <?php include "footer.php"?>
        <!-- ./Footer -->
    </body>

    </html>
