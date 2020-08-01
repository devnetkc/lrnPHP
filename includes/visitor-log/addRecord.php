<?php 



if(empty($_POST['b_cc3cc6300ab9753ebb2e03df8_92b9c97470'])) {
    $link = mysqli_connect($_ENV['MYSQL_SERVER'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE_VISITOR_LOG']);
    
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    // Escape user inputs for security
    $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
    $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
    $email = mysqli_real_escape_string($link, $_REQUEST['email']);
    
    // Attempt insert query execution
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    
    // Close connection
    mysqli_close($link);
}
?>