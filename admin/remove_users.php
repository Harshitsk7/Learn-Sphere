<!DOCTYPE html>
<html>
<?php session_start();
include("admin_header.php")
 ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User control</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" type="text/css" href="../styles/insert_descriptive.css">
</head>

<style>
    .tag label {
        margin-left: 8px;
    }

    input.cb {
        width: 15px;
        height: 20px;
    }

      table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
</style>
<body>
<div class="container" >
  <h2>User/Creators</h2>
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name </th>
        <th scope="col">Email</th>
        <th scope="col">User Type</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
</body>
    <?php
      include_once "../config/configure.php";
      $query = "SELECT * FROM users";
      $result = mysqli_query($con, $query);
    
      while($user = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $user['user_id'] . "</td>";
        echo "<td>" . $user['first_name'] . "</td>";
        echo "<td>" . $user['email'] . "</td>";
        echo "<td>" . $user['user_type'] . "</td>";
        echo "<td><form method='post' action='delete.php'><input type='hidden' name='user_id' value='".$user['user_id']."'><input type='submit' name='delete_user' value='Delete' class='btn btn-danger'></form></td>";
        echo "</tr>";
      }
    
      // Close the database connection
      mysqli_close($con);
      ?>
    </table>
  </table>
<!-- <body>
<center><button type="submit" class="btn btn-primary btn-block" name="Show_urs">All Users</button></center>
</body> -->

