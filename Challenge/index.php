<?php 

require_once 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Book Library</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>	<!-- in the container div we have the whole content inside -->
    
               <?php


            // Set Content-Type header to application/json
            header("Content-Type:application/json");


            // Check if the id has a value
            if(!empty($_GET['id'])){

                    // Get the id value in the variable
                    $id=$_GET['id'];

                    // Require db_check.php file (check the id in the database and get the name and the price)
                    require_once("db_check.php");

                    // If the name and the price are empty - id doesn't exist - car not found
                    if(empty($title) && empty($author)){
                                    response(200, "author not found", NULL, NULL);
                    }
                    // If the name and the price aren't empty - id exists - car found
                    else{
                                    response(200, "book found" , $title, $author);
                    }
            }

            // If the id is not set - request is not valid
            else {
                                    response(400, "Invalid request", NULL, NULL);
                    }


            // Function for delivering a JSON response
            function response($status,$status_message,$book_title,$data){
                    
                    /*HTTP 1.1 provides a persistent connection 
                    that allows multiple requests to be batched 
                    or pipelined to an output buffer */
                    header("HTTP/1.1 $status $status_message");

                    // $response array
                    $response['status']=$status;
                    $response['status_message']=$status_message;
                    $response['title']=$book_title;
                    $response['author']=$data;

                    //Generating JSON from the $response array
                    $json_response=json_encode($response);

                    // Outputting JSON to the client
                    echo $json_response;
            }

            ?>
           

</body>

</html>