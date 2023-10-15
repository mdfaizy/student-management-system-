<?php
require 'database.php';

if (isset($_POST["submit"])) {
  $student_name = $_POST["student_name"];
  $institution = $_POST["institution"];
  $regisration_No = $_POST["regisration_No"];
  $department = $_POST["department"];
  $stream = $_POST["stream"];
  $session = $_POST["session"];



  $query = "INSERT INTO master VALUES('','$student_name','$institution','$regisration_No','$department','$stream','$session')";
  mysqli_query($conn, $query);
  echo
    "
    <script>alert('Data Inserted Successfully')</script>";



}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="master.css">
</head>

<body>

  <div class="">
    <div class="box">
      <!-- <form method="post" action="process.php" id="file"> -->
      <form class="" action="" method="post" autocomplete="off">

        <div class="master">
          <span class="title"> Master's Courses</span>
        </div>
        <div class="form_container">
          <div class="form_control">
            <label for="student_name"> Student Name </label>
            <input required id="student_name" name="student_name" placeholder="Enter Student Name..." />
          </div>
          <div class="form_control">
            <label for="first_name"> Institution: </label>
            <input id="Institution" name="institution" required placeholder="Enter Institution Name..." />
          </div>
          <div class="form_control">
            <label for="first_name"> Regisration No </label>
            <input id=" Regisration_No" name=" regisration_No" required placeholder="Enter  Regisration No..." />
          </div>
          <div class="form_control">
            <label for="first_name"> Department </label>
            <input id="Institution" name="department" placeholder="Enter Institution Name..." />
          </div>
          <div class="form_control">
            <label for="stream"> Stream </label>
            <input id="stream" name="stream" placeholder="Enter Stream..." />
          </div>
          <div class="form_control">
            <label for="session"> Session </label>
            <input id="session" name="session" placeholder="Enter Session..." />
          </div>
        </div>
        <div class="button_container">
          <button type="submit" id="sumbit" name="submit">Submit</button>

        </div>
      </form>
    </div>



  </div>

</body>

</html>