<?php
include('connect.php');

// Prepare an insert statement
$sql = "INSERT INTO `products` (pname,price,quantity,description,category_id,comments) VALUES (?, ?, ?,?,?,?)";


if($stmt = $mysqli->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("siisis", $pr_name, $pr_price, $pr_quan,$pr_des,$pr_cate,$pr_com);
    

    /* Set the parameters values and execute
    the statement to insert a row */
    $pr_name = $_POST['p_name'];
    $pr_price = $_POST['p_price'];
    $pr_quan = $_POST['p_quan'];
    $pr_des = $_POST['p_des'];
    $pr_cate = $_POST['p_cate'];
    $pr_com = $_POST['p_com'];
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
