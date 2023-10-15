<?php
include 'database.php';

if (isset($_POST['submit'])) {
    // Retrieve data from the form
    $student_name = $_POST['student_name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $wbjee_rank = $_POST['wbjee_rank'];
    $jelet_rank = $_POST['jelet_rank'];
    $Stream = $_POST['Stream'];
    $Application_no = $_POST['Application_no'];
    $phone = $_POST['phone'];
    $Domicile = $_POST['Domicile'];
    $State = $_POST['State'];
    $pincode = $_POST['pincode'];
    $address = $_POST['address'];
    // Accessing Higher Secondary (HS) values
    $schoole_name_hs = $_POST['schoole_name_hs'];
    $roll_no_hs = $_POST['roll_no_hs'];
    $Regisration_No_hs = $_POST['Regisration_No_hs'];
    $board_name_hs = $_POST['board_name_hs'];
    $Year_of_Passing_hs = $_POST['Year_of_Passing_hs'];
    $Percentage_hs = $_POST['Percentage_hs'];
    
    // Accessing Secondary School (SS) values
    $schoole_name_ss = $_POST['schoole_name_ss'];
    $roll_no_ss = $_POST['roll_no_ss'];
    $Regisration_No_ss = $_POST['Regisration_No_ss'];
    $board_name_ss = $_POST['board_name_ss'];
    $Year_of_Passing_ss = $_POST['Year_of_Passing_ss'];
    $Percentage_ss = $_POST['Percentage_ss'];

    // Handle file uploads
    $upload1 = $_FILES['upload1']['name'];
    $upload2 = $_FILES['upload2']['name'];
    $upload3 = $_FILES['upload3']['name'];
    $upload4 = $_FILES['upload4']['name'];
    $upload5 = $_FILES['upload5']['name'];
    $upload6 = $_FILES['upload6']['name'];
    $upload7 = $_FILES['upload7']['name'];
    $upload8 = $_FILES['upload8']['name'];
    $upload9 = $_FILES['upload9']['name'];
    $upload10 = $_FILES['upload10']['name'];
    // Define the target directory for file uploads
    $targetDir = "uploads/";

    // Move uploaded files to the target directory
    move_uploaded_file($_FILES['upload1']['tmp_name'], $targetDir . $upload1);
    move_uploaded_file($_FILES['upload2']['tmp_name'], $targetDir . $upload2);
    move_uploaded_file($_FILES['upload3']['tmp_name'], $targetDir . $upload3);
    move_uploaded_file($_FILES['upload4']['tmp_name'], $targetDir . $upload4);
    move_uploaded_file($_FILES['upload5']['tmp_name'], $targetDir . $upload5);
    move_uploaded_file($_FILES['upload6']['tmp_name'], $targetDir . $upload6);
    move_uploaded_file($_FILES['upload7']['tmp_name'], $targetDir . $upload7);
    move_uploaded_file($_FILES['upload8']['tmp_name'], $targetDir . $upload8);
    move_uploaded_file($_FILES['upload9']['tmp_name'], $targetDir . $upload9);
    move_uploaded_file($_FILES['upload10']['tmp_name'], $targetDir . $upload10);

    // Insert data into the MySQL database
    $sql = "INSERT INTO new_admision (student_name, father_name, mother_name, date_of_birth, email, wbjee_rank, 
    jelet_rank, stream, application_no, phone_no, domicile, state, 
    pincode_no, address, h_schoole_name, h_roll_no, h_registration_no, h_board_name, 
    h_year_of_passing, h_percentage, s_schoole_name, s_roll_no, s_registration_no, s_board_name, 
    s_year_of_passing, s_percentage, upload1, upload2, upload3, upload4, 
    upload5, upload6, upload7, upload8, upload9, upload10) 
    VALUES 
    (?, ?, ?, ?, ?, ?, 
    ?, ?, ?, ?, ?, ?, 
    ?, ?, ?, ?, ?, ?, 
    ?, ?, ?, ?, ?, ?, 
    ?, ?, ?, ?, ?, ?,
    ?, ?, ?, ?, ?,?)";
    // Create a prepared statement
    //var_dump($conn);
    $stmt = mysqli_stmt_init($conn);
    // Check if the prepared statement is valid
    if (mysqli_stmt_prepare($stmt, $sql)) {
        // Bind the parameters to the prepared statement with correct data type placeholders
        mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssssssssssssssss", $student_name, $father_name, $mother_name, $date, $email, $wbjee_rank, 
        $jelet_rank, $Stream, $Application_no, $phone, $Domicile, $State, 
        $pincode, $address, $schoole_name_hs, $roll_no_hs, $Regisration_No_hs, $board_name_hs,
        $Year_of_Passing_hs, $Percentage_hs, $schoole_name_ss, $roll_no_ss, $Regisration_No_ss, $board_name_ss, 
        $Year_of_Passing_ss, $Percentage_ss, $upload1, $upload2, $upload3, $upload4, 
        $upload5, $upload6, $upload7, $upload8, $upload9, $upload10);
    
        // Execute the prepared statement
        mysqli_stmt_execute($stmt);
    
        // Close the prepared statement
        mysqli_stmt_close($stmt);
    
        // Redirect to a success page or display a success message
        echo
        "
        <script>alert('Data Inserted Successfully')</script>";
        exit();
    } else {
        // Handle errors if the prepared statement is not valid
        echo "Error: " . mysqli_error($conn);
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>
