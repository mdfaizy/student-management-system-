<?php
  include "conn.php";

   if(isset($_POST['file_submit']))
   {
    $student_name=$_POST['student_name'];
    $father_name=$_POST['father_name'];
    $mother_name=$_POST['mother_name'];
    $date=$_POST['date'];
    $email=$_POST['email'];
    $stream=$_POST['stream'];
    $application_no=$_POST['application_no'];
    $session=$_POST['session'];
    $phone=$_POST['phone'];
    $state=$_POST['state'];
    $gate_score=$_POST['gate_score'];

    $doc_type = "Document";
    $fileName = $_FILES['myfile']['name'];
    $fileTmpName = $_FILES['myfile']['tmp_name'];
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('docs','docx','pdf','xlsx','jpg','png','jpeg');

    if(in_array($fileActualExt,$allowed))
    {

        $fileNameNew = $fileName;

        $state2=$_POST['10th'];
        $cgpa1=$_POST['cgpa1'];
        $cgpa2=$_POST['cgpa2'];
        $cgpa3=$_POST['cgpa3'];
        $cgpa4=$_POST['cgpa4'];
        $total_cgpa=$_POST['total_cgpa'];
       

        $fileDestination = 'upload/document/' . $fileNameNew;

        $insert = mysqli_query($conn, "INSERT INTO tbl_files VALUES('0','$student_name','$father_name','$mother_name','$date',' $email','$stream','$application_no','$session','$phone','$state','$gate_score','$fileName','$fileNameNew','$state2',' $cgpa1',' $cgpa2',' $cgpa3',' $cgpa4','$total_cgpa')");

        if($insert==TRUE){
            move_uploaded_file($fileTmpName,$fileDestination);

            echo "data is inserted";
        }else{
            echo "Error Data";
        }
    }
    else{
        echo "This is not a valid file!";
    }


    
 }
?>