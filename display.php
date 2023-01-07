<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB display</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:green; color:white}
</style>
</head>
<body>

<h2>Displaying Applications for web developers </h2>


<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Degree</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Refer</th>
    <th>Job-post</th>
    <th>Operations</th>
  </tr>

  <?php

    include 'connection.php';
    $selectquery = " select * from jobregistration";

    $query = mysqli_query($con, $selectquery);

    $num = mysqli_num_rows($query);

    // echo $num;

    // $res = mysqli_fetch_array($query);

    while( $res = mysqli_fetch_array($query) ){

        ?>

        <tr>
            <td> <?php echo $res['ID']?></td>
            <td> <?php echo $res['name']?></td>
            <td> <?php echo $res['degree']?></td>
            <td> <?php echo $res['mobile']?></td>
            <td> <?php echo $res['email']?></td>
            <td> <?php echo $res['refer']?></td>
            <td> <?php echo $res['jobpost']?></td>
            <td> 
                <button><a href="update.php?ID=<?php echo $res['ID']?>">Update</a></button>
                <button><a href="delete.php?IDth=?<?php echo $res['ID']?>">Delete</a></button>
            </td>
            
        </tr>

        <?php
        
    }

?>
 
</table>

</body>
</html>