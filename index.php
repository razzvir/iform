<?php

$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $sql = "INSERT INTO `iform`.`form`(`name`, `phone`, `city`) VALUES ('$name', '$phone', '$city');";
    // echo $sql;
    

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        }
    

    // Close the database connection
    $con->close();
}

?>

