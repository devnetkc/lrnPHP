<?php 

    if(empty($_POST['b_cc3cc6300ab9753ebb2e03df8_92b9c97470'])) {
        if (!empty($_POST['full_name'])) {
            /*
            $link = mysqli_connect($_ENV['MYSQL_SERVER'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE_VISITOR_LOG']);
            
            // Check connection
            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            
            // Escape user inputs for security
            $full_name = mysqli_real_escape_string($link, $_REQUEST['full_name']);
            
            $email = ( isset( $_REQUEST['email'] ) ) ? mysqli_real_escape_string($link, $_REQUEST['email']) : '';
            
            $phone = ( isset( $_REQUEST['phone'] ) ) ? mysqli_real_escape_string($link, $_REQUEST['phone']) : '';
            
            // Attempt insert query execution
            //  To keep things simple for the visitors, we are only going to have name as required and offer email and phone as optional.
            //  Name will also not be seperated; again, to just keep things simple for the guest.
            
            $sql = "INSERT INTO persons (full_name, email, phone) VALUES ('$full_name', '$email', '$phone')";;
            
            if(!mysqli_query($link, $sql)){
                $errorMsg = "ERROR: Was not able to execute $sql. " . mysqli_error($link) . ' end SQL error msg ~';
                error_log($errorMsg);
            }
            
            // Close connection
            mysqli_close($link);
*/
        } else {
            $errorMsg = 'ERROR: full_name not set. end error msg ~';
            error_log($errorMsg);
        }
    } else {
        $errorMsg = 'SECURITY: bot submission';
        error_log($errorMsg);
    }




    //send back txt in json format with status of sending subscriptions.

    $responseMessage = '';
    $jsonResponse = '{"status":"';

    if (isset($errorMsg)) {
        $responseStatus = 'fail';
        $responseMessage = $errorMsg;
    } else {
        $responseStatus = 'success';
        $responseMessage = 'We all gucci here';
    }

    $jsonResponse .= $responseStatus . '",';
    $jsonResponse .= '"statusMsg":"' . $responseMessage . '"';
    $jsonResponse .= '}';

    print_r ($jsonResponse);
?>