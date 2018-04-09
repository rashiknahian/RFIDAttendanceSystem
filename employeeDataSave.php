<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
     
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

     
       //DB details
        $dbHost = 'localhost';
        $dbUsername = 'root';
        $dbPassword = 'root';
        $dbName = 'RFIDAttendanceSystem';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        //Variables for Form Data
        $employeeId = mysqli_real_escape_string($db, $_POST['employeeId']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $designation = mysqli_real_escape_string($db, $_POST['designation']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $bloodGroup = mysqli_real_escape_string($db, $_POST['bloodGroup']);
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert Form Data into database
        $insert = $db->query("INSERT into employeeData (employeeId,username,designation,email,phone,address,bloodGroup,image,created) VALUES ('$employeeId','$username','$designation','$email','$phone','$address','$bloodGroup','$imgContent', '$dataTime')");
        if($insert){
            echo "<h1>Successfully data Recorded.</h1><br><a href=\"user.php\">  Back </a>";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
