<?php
include 'database.php';
if($_POST['submit'])
// if(isset($_POST['submit']))
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

    // $chk="";
    // foreach ($education as $chk1)
    // {
    //     $chk.=$chk1.",";
    // }

    // $sql="INSERT INTO `master`(`id`, `student_name`, `institution`, `regisration_No`, `department`, `stream`, `session`) 
    // VALUES (NULL,'$student_name','$institution','$regisration_No','','$department','$stream','$session')";

    // $result = mysqli_query($conn,$ql);
    // if($result){
    //     header("Location: index.php?msg=New record creat successfully");
    // }
    // else{
    //     echo "Failed:" .mysqli_error($conn);
    // }

    // $sql="insert into master(student_name,password,institution,regisration_No,department,stream,session)
    // values('$student_name','$institution','$regisration_No','$department','$stream','$session')";
    // if(mysqli_query($con,$sql))
    // {
    //     echo"<script>alert('new record inserted')</script>";
    //     echo"<script>window.open('master.php','_self')</script>";
    // }
    // else{
    //     echo"error:".mysqli_error($con);
    // }
    // mysqli_close($con);

}
?>