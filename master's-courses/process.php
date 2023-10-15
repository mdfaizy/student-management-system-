<?php
include 'database.php';
if($_POST['submit'])
{
    $student_name=$_POST['student_name'];
    $institution=$_POST['institution'];
    $regisration_No=$_POST['regisration_No'];
    $department=$_POST['department'];
    $stream=$_POST['stream'];
    $session=$_POST['session'];


    $query = "INSERT INTO master values('$student_name','$institution','$regisration_No','$department','$stream','$session');
    $data = mysqli_query($conn,$query)";

    if($data)
    {
        echo "DataInserted into Database";
    }
    else{
        echo "Failed";
    }

}
?>