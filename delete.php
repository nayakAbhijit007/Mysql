<?php

    include 'connection.php';

    $ID = $_GET['IDth'];
    $deletequery= "delete from jobregistration where ID = $ID";

    $query = mysqli_query($con, $deletequery);

    header('location: display.php');

?>