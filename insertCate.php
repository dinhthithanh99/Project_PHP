<?php
include('connect.php');

// Prepare an insert statement
$sql = "INSERT INTO `categories` (name,code,description) VALUES (?, ?, ?)";

if($stmt = $mysqli->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("sss", $c_name, $c_code, $c_des);
    

    /* Set the parameters values and execute
    the statement to insert a row */
    $c_name = $_POST['ca_name'];
    $c_code = $_POST['ca_code'];
    $c_des = $_POST['ca_des'];
    $stmt->execute();
    
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
}

// Close statement
$stmt->close();

// Close connection
$mysqli->close();
?>
