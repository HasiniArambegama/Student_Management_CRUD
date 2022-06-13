<?php
    include 'connection.php';
    $id=$_GET['editid'];
    $sql="Select * from `students` where id=$id";
    $result= mysqli_query($con, $sql);
    $row=mysqli_fetch_assoc($result);
    $s_name = $row['s_name'];
    $s_uniid = $row['s_uniid'];
    $uni_faculty = $row['uni_faculty'];
    $s_nic = $row['s_nic'];
    $s_mobile = $row['s_mobile'];
    $s_email = $row['s_email'];
    $s_address = $row['s_address'];
    $s_password = $row['s_password'];

    if(isset($_POST ['submit'])){
        $s_name = $_POST['s_name'];
        $s_uniid = $_POST['s_uniid'];
        $uni_faculty = $_POST['uni_faculty'];
        $s_nic = $_POST['s_nic'];
        $s_mobile = $_POST['s_mobile'];
        $s_email = $_POST['s_email'];
        $s_address = $_POST['s_address'];
        $s_password = $_POST['s_password'];
        
        $sql = "update `students` set id=$id, s_name='$s_name', s_uniid='$s_uniid', uni_faculty='$uni_faculty', s_nic='$s_nic', s_mobile=$s_mobile, s_email='$s_email', s_address='$s_address', s_password='$s_password'
        where id=$id";
        $result = mysqli_query($con,$sql);
        if($result){
            //echo "Data updated successfully";
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
    <input type="text" class="form-control" name="s_name" placeholder="Enter your name" autocomplete="off" value=<?php echo $s_name; ?>>
 </div>

 <div class="form-group">
    <label>Student university ID</label>
    <input type="text" class="form-control" name="s_uniid" placeholder="Enter your university ID" autocomplete="off" readOnly value=<?php echo $s_uniid; ?>>
 </div>

 <div class="form-group">
    <label>Student faculty</label>
    <input type="text" class="form-control" name="uni_faculty" placeholder="Select your faculty" autocomplete="off" readOnly value=<?php echo $uni_faculty; ?>>
 </div>

 <div class="form-group">
    <label>Student NIC</label>
    <input type="text" class="form-control" name="s_nic" placeholder="Enter your NIC number" autocomplete="off" readOnly value=<?php echo $s_nic; ?>>
    
 </div>
 
 <div class="form-group">
    <label>Student mobile number</label>
    <input type="text" class="form-control" name="s_mobile" placeholder="Enter your mobile number" autocomplete="off" value=<?php echo $s_mobile; ?>>
 </div>

  <div class="form-group">
    <label>Student email address</label>
    <input type="email" class="form-control" name="s_email" aria-describedby="emailHelp" placeholder="Enter your email address" autocomplete="off" value=<?php echo $s_email; ?>>
  </div>

  <div class="form-group">
    <label>Student address</label>
    <input type="text" class="form-control" name="s_address" placeholder="Enter your address" autocomplete="off" value=<?php echo $s_address; ?>>
  </div>

  <div class="form-group">
    <label>Student password</label>
    <input type="password" class="form-control" name="s_password" placeholder="Enter your Password" autocomplete="off" value=<?php echo $s_password; ?>>
  </div>
  
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1" >Check out</label>
  </div>
  <button type="submit" name = "submit" class="btn btn-primary">Edit</button>
</form>
    </div>
  
  </body>
</html>