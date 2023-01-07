<!doctype html>
<html lang="en">
  <head>
  <title>DB conn.</title>
  <?php
    include 'links.php'
  ?>

  
  </head>
  <body>
    <h1> Web Developer Job Vacancy </h1>

<div class="container">
  <form action="" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="name">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="user" placeholder="Your name..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="name">Degree</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="deg" placeholder="Enter your degree">
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="name">Mobile</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="mob" placeholder="Enter your Mobile. No">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="name">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="email" placeholder="Enter your Email Id">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="name">Refer</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="refer" placeholder="Enter your Reference ">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="name">Job post</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="jpost" placeholder="Enter your job post ">
      </div>
    </div>
    
    
    <div class="row">
      <input type="submit" name = "submit" value="Submit">
    </div>

    
    <div class="row">
      <a href="display.php">Check Form</a>
    </div>
  </form>

</div>


    
  </body>
</html>

<?php

    include 'connection.php';

    if(isset($_POST['submit'])){
        $name = $_POST['user'];
        $degree = $_POST['deg'];
        $mobile = $_POST['mob'];
        $email = $_POST['email'];
        $refer = $_POST['refer'];
        $jobpost = $_POST['jpost'];

        $insertquery = " insert into jobregistration(name, degree, mobile, email, refer, jobpost ) values('$name', '$degree', '$mobile', '$email', '$refer', '$jobpost')";

        $res = mysqli_query($con, $insertquery);

        if($res){
          ?>
          <script>
            alert("data inserted Successfully");
          </script>
          <?php

        }else {
          ?>
          <script>
            alert("data not inserted Successfully");
          </script>
          <?php
        }
    }

?>