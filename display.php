<?php
    include 'connection.php';

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

    <div class="container">
    <button class="btn btn-primary my-5 "><a href="student.php" class="text-light" >Add Student</a>
        </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Uni_ID</th>
      <th scope="col">Faculty</th>
      <th scope="col">NIC</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>
  <tbody>

  <?php
    $sql = "Select * from `students`";
    $result = mysqli_query($con, $sql);
    if($result){

        while($row = mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $s_name = $row['s_name'];
            $s_uniid = $row['s_uniid'];
            $uni_faculty = $row['uni_faculty'];
            $s_nic = $row['s_nic'];
            $s_mobile = $row['s_mobile'];
            $s_email = $row['s_email'];
            $s_address = $row['s_address'];
            $s_password = $row['s_password'];
            echo '<tr>
            <th scope= $s_password"row">'.$id.'</th>
            <td>'.$s_name.'</td>
            <td>'.$s_uniid.'</td>
            <td>'.$uni_faculty.'</td>
            <td>'.$s_nic.'</td>
            <td>'.$s_mobile .'</td>
            <td>'.$s_email.'</td>
            <td>'.$s_address.'</td>
            <td>'.$s_password.'</td>
            <td>
              <button class="btn btn-warning" ><a href="edit.php? editid= '.$id.'" class="text-light">Edit</a></button> 
              <button class="btn btn-danger"><a href="delete.php? deleteid= '.$id.'" class="text-light">Remove</a></button>
            </td>
          </tr>';
        }
    }
  ?>
  
  </tbody>
</table>
    </div>

  </body>
</html>