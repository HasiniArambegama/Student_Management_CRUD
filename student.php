<?php
    include 'connection.php';
    if(isset($_POST ['submit'])){
        $s_name = $_POST['s_name'];
        $s_uniid = $_POST['s_uniid'];
        $uni_faculty = $_POST['uni_faculty'];
        $s_nic = $_POST['s_nic'];
        $s_mobile = $_POST['s_mobile'];
        $s_email = $_POST['s_email'];
        $s_address = $_POST['s_address'];
        $s_password = $_POST['s_password'];
        
        $sql = "insert into `students`(s_name, s_uniid, uni_faculty, s_nic, s_mobile, s_email, s_address, s_password)
        values('$s_name', '$s_uniid', '$uni_faculty', '$s_nic', '$s_mobile', '$s_email', '$s_address', '$s_password')";
        $result = mysqli_query($con,$sql);
        if($result){
            //echo "Data inserted successfully";
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>Student Management</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
 <div class="form-group">
    <label>Student full name</label>
    <input type="text" class="form-control" name="s_name" placeholder="Enter your name" autocomplete="off">
 </div>

 <div class="form-group">
    <label>Student university ID</label>
    <input type="text" class="form-control" name="s_uniid" placeholder="Enter your university ID" autocomplete="off">
 </div>

 <div class="form-group">
    <label>Student faculty</label>
    <input type="text" class="form-control" name="uni_faculty" placeholder="Select your faculty" autocomplete="off">
 </div>

 <div class="form-group">
    <label>Student NIC</label>
    <input type="text" class="form-control" name="s_nic" placeholder="Enter your NIC number" autocomplete="off">
    
 </div>
 
 <div class="form-group">
    <label>Student mobile number</label>
    <input type="text" class="form-control" name="s_mobile" placeholder="Enter your mobile number" autocomplete="off">
 </div>

  <div class="form-group">
    <label>Student email address</label>
    <input type="email" class="form-control" name="s_email" aria-describedby="emailHelp" placeholder="Enter your email address" autocomplete="off">
  </div>

  <div class="form-group">
    <label>Student address</label>
    <input type="text" class="form-control" name="s_address" placeholder="Enter your address" autocomplete="off">
  </div>

  <div class="form-group">
    <label>Student password</label>
    <input type="password" class="form-control" name="s_password" placeholder="Enter your Password" autocomplete="off">
  </div>
  
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1" >Check out</label>
  </div>
  <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  
  </body>
</html>