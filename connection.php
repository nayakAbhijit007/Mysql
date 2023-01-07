<?php

    $username = "root";
    $password = "";
    $server = "localhost";
    $database = "crudyoutube";

    $con = mysqli_connect($server, $username, $password);
    $db = mysqli_select_db($con, $database);
    

    if($con){
        echo "Connection Successful";       
    }
        
    else{
        // echo "NOt connected Yet";
        die("no connection" .mysqli_connect_error());
    }

?>