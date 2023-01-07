<!doctype html>
<html lang="en">
  <head>
  <title>Update DB</title>
  <?php
    include 'links.php'
  ?>

  
  </head>
  <body>
    <h1> Web Developer Job Vacancy </h1>

<div class="container">
  <form action="" method="POST">
    <div class="row">
        
        <?php

            include 'connection.php';
            
            $IDs = $_GET['ID'];
            $showquery = "select * from jobregistration where ID = {$IDs}";

            $showdata = mysqli_query($con, $showquery);

            $arrdata = mysqli_fetch_array($showdata);

            if(isset($_POST['submit'])){

                $idupdate=$_GET['ID'];

                $name = $_POST['user'];
                $degree = $_POST['deg'];
                $mobile = $_POST['mob'];
                $email = $_POST['email'];
                $refer = $_POST['refer'];
                $jobpost = $_POST['jpost'];

                $insertquery = " insert into jobregistration(name, degree, mobile, email, refer, jobpost ) values('$name', '$degree', '$mobile', '$email', '$refer', '$jobpost')";

                $query = " update jobregistration set ID=$idupdate, name='$name', degree='$degree', mobile='$mobile', email='$email', refer='$refer', jobpost='$jobpost' where ID = $idupdate "; 

                $res = mysqli_query($con, $query);

                if($res){
                ?>
                <script>
                    alert("data updated Successfully");
                </script>
                <?php

                }else {
                ?>
                <script>
                    alert("data not updated Successfully");
                </script>
                <?php
                }
            }

        ?>
      <div class="col-25">
        <label for="name">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="user" value = "<?php echo $arrdata['name']?>" placeholder="Your name..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="name">Degree</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="deg" value="<?php echo $arrdata['degree']?>" placeholder="Enter your degree">
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="name">Mobile</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="mob" value="<?php echo $arrdata['mobile']?>" placeholder="Enter your Mobile. No">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="name">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="email" value = "<?php echo $arrdata['email']?>" placeholder="Enter your Email Id">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="name">Refer</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="refer"  value = "<?php echo $arrdata['refer']?>" placeholder="Enter your Reference ">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="name">Job post</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="jpost"  value = "<?php echo $arrdata['jobpost']?>" placeholder="Enter your job post ">
      </div>
    </div>
    
    
    <div class="row">
      <input type="submit" name = "submit" value="Update">
    </div>

    
    <div class="row">
      <button style="background-color:crimson; "><a href="display.php">Check Form</a></button>
    </div>
  </form>

</div>


    
  </body>
</html>
