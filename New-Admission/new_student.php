<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> New Student Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;1,800&family=Heebo:wght@300&family=Libre+Franklin:ital,wght@0,500;1,200;1,600&family=Poppins:ital,wght@0,600;0,700;1,400;1,800&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link rel="stylesheet" href="style.css" /> -->
    <style>
@import url('https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;1,800&family=Heebo:wght@300&family=Libre+Franklin:ital,wght@0,500;1,200;1,600&family=Poppins:ital,wght@0,600;0,700;0,800;1,400;1,600;1,800&family=Roboto:ital,wght@0,400;0,900;1,500&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-image: url("new_background.jpg");
    font-family: 'Fira Sans', sans-serif;
    font-family: 'Heebo', sans-serif;
    font-family: 'Libre Franklin', sans-serif;
    font-family: 'Poppins', sans-serif;
    font-family: 'Roboto', sans-serif;
}


.container {
    margin: 0 auto;
    max-width: 800px;
    padding: 20px;
    background-color: white;
    margin-top: 50px;
    box-shadow: 4px 3px 5px rgba(1, 1, 1, 0.1);
    border-radius: 10px;
    background: rgb(2, 0, 36);
    background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(4, 215, 245, 1) 0%, rgba(163, 163, 190, 1) 38%);
}

.student-dev {
    color: #554c4c;
    padding-top: 10px
}



.box h1 {
    color: rgb(126, 121, 121);
    text-shadow: #ccc;
    text-align: center;
    justify-content: center;
}

.title_small {
    font-size: 20px;
}

.form_container {
    margin-top: 20px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.form_control {
    display: flex;
    flex-direction: column;
}

label {
    font-size: 16px;
    font-weight: 400;
    text-shadow: 2px 1px #ccc;
    margin-bottom: 5px;
    padding-left: 10px;
    color: rgb(55, 37, 37);
}

input,
select,
textarea {
    padding: 6px 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 15px;
}

input {
    border-radius: 20px;
}

textarea {
    border-radius: 20px;
    border: 1px solid #ccc;
    height: 35px;
}

input:focus {
    outline-color: red;
}

.form-step {
    display: none;
    transform-origin: top;
    animation: animate 0.5s;
}

.form-step-active {
    display: block;
}

#next1 {
    align-items: center;
    justify-content: center;
    display: flex;
}

.btn1 {
    display: block;
    text-align: center;
    text-decoration: none;
    list-style-type: none;
    cursor: pointer;
    transition: all 250ms ease-in-out;
    margin-top: 10px;
    color: rgb(13, 12, 12);
    font-size: 17px;
}

.btn1 {
    color: rgb(13, 12, 12);
    font-size: 17px;
}

.btn1:active {
    transform: scale(.98);
}

.btn1:hover {
    box-shadow: 0 0 0 2px #fff, 0 0 0 3px;
}

.btns-group {
    display: flex;
    gap: 10px;
    margin-top: 20px;
    align-items: center;
    justify-content: center;
}

.btns-group .left-arrow {
    font-size: 15px;
    color: #1b1a1a;
}

.right-arrow {
    font-size: 15px;
    padding-left: 5px;
    color: #100e0e;
}


/* .button_container {
    display: flex;
    justify-content: flex-end;
    margin-top: 20px;
} */


/* button {
    background-color: red;
    border: transparent solid 2px;
    padding: 5px 10px;
    color: white;
    border-radius: 8px;
    transition: 0.3s ease-in;
} */


/* button:hover {
    background-color: #ccc;
    border: 2px solid red;
    color: black;
    transition: 0.3s ease-out;
    cursor: pointer;
} */

.textarea_control {
    grid-column: 2 / span 2;
}

.textarea_control textarea {
    width: 100%;
}

.hsc {
    grid-column: 1 / span 3;
    font-size: 25px;
    color: #554c4c;
    padding-top: 10px;
    font-weight: 400;
}

.sumbit {
    /* margin-top: 20px; */
    grid-column: 1 / span 3;
    font-size: 25px;
    font-weight: 400;
    /* color: black; */
    color: #554c4c;
    padding-top: 10px
}

.button_container {
    /*  */
    display: block;
    text-align: center;
    text-decoration: none;
    list-style-type: none;
    cursor: pointer;
    margin-top: 7px;
    color: rgb(13, 12, 12);
}

.button_container #sumbit {
    color: rgb(13, 12, 12);
    font-size: 17px;
}

button {
    border: transparent solid 2px;
    padding: 5px 10px;
    color: black;
    border-radius: 8px;
    transition: 0.3s ease-in;
    padding: 10px 20px;
    transition: 0.3s ease-in;
}

button:hover {
    color: black;
    transition: 0.3s ease-out;
    cursor: pointer;
}

.sumbit:hover {
    color: black;
    transition: 0.3s ease-out;
    cursor: pointer;
    border-radius: 4px solid black;
}

@media screen and (max-width: 450px) {
    .form_container {
        margin: auto;
    }
    .form_control {
        grid-column: 1 / span 1;
    }
    .textarea_control {
        grid-column: 1 / span 1;
    }
}



    </style>
</head>

<body>
    <div class="container">
        <div class="box">
            <h1>
                Registration
            </h1>
            <form action="new_student.php" method="post" enctype="multipart/form-data">
   <div class="form-step form-step-active">
    <h2 class="student-dev">Student Details</h2>
       <div class="form_container">
                        <div class="form_control">
                            <label for="student_name"> Student Name </label>
                            <input value="" id="student_name" name="student_name" placeholder="Enter Student Name..." />
                        </div>
                        <div class="form_control">
                            <label for="father_name"> Father Name </label>
                            <input id="father_name" name="father_name" placeholder="Enter father Name..." />
                        </div>
                        <div class="form_control">
                            <label for="mother_name"> Mother Name </label>
                            <input id="mother_name" name="mother_name" placeholder="Enter mother Name..." />
                        </div>
                        <div class="form_control">
                            <label for="email"> Date of Birth </label>
                            <input value="date" type="date" id="date" name="date" />
                        </div>
                        <div class="form_control">
                            <label for="email"> Email </label>
                            <input type="email" id="email" name="email" placeholder="Enter Email..." />
                        </div>
                        <div class="form_control">
                            <label for="wbjee_rank"> Wbjee Rank</label>
                            <input type="number" id="rank" name="wbjee_rank" placeholder="Enter Wbjee Rank Score..." />
                        </div>
                        <div class="form_control">
                            <label for="jelet_rank"> Jelet Rank</label>
                            <input type="number" id="rank" name="jelet_rank" placeholder="Enter Jelet Rank Score..." />
                        </div>
                        <div class="form_control">
                            <label for="Select_stream">Select Stream</label>
                            <input type="Select_stream" id="Stream" name="Stream"
                                placeholder="Enter Select Stream..." />
                        </div>
                        <div class="form_control">
                            <label for="Application_no">Application No</label>
                            <input type="Application_no" id="Application_no" name="Application_no"
                                placeholder="Enter Application No..." />
                        </div>

                        <div class="form_control">
                            <label for="email"> Phone No </label>
                            <input type="phone" id="phone" name="phone" placeholder="Enter Phone No..." />
                        </div>
                        <div class="form_control">
                            <label for="Domicile"> Domicile </label>
                            <input id="Domicile" name="Domicile" placeholder="Enter Domicile..." />
                        </div>
                        <div class="form_control">
                            <label for="State"> State </label>
                            <input id="State" name="State" placeholder="Enter State Name..." />
                        </div>
                        <div class="form_control">
                            <label for="pincode"> Pincode </label>
                            <input type="number" id="pincode" name="pincode" placeholder="Enter Pincode No..." />
                        </div>
                        <div class="textarea_control">
                            <label for="address"> Address </label>
                            <textarea id="address" name="address" row="4" cols="50"
                                placeholder="Enter Address"></textarea>
                        </div>
        </div>
                    
                        <div class="center">
                            <button class="btn1 btn-next width ml-auto"  href="">Next</button>
                        </div>
        </div>
           <!--End Students Details -->
                    <!--Higher Secondary  -->
                    <div class="form-step">
                    <div class="form_container">
                        

                            <div class="hsc">
                                <span class="title">Higher Secondary</span>
                            </div>
                           
                            <div class="form_control">
                                <label for="schoole_name_hs">School Name</label>
                                <input id="schoole_name_hs" name="schoole_name_hs" placeholder="Enter School Name..." />
                            </div>
                            <div class="form_control">
                                <label for="roll_no_hs">Roll No</label>
                                <input id="roll_no_hs" name="roll_no_hs" placeholder="Enter Roll No..." />
                            </div>
                            <div class="form_control">
                                <label for="Regisration_No_hs">Registration No</label>
                                <input id="Regisration_No_hs" name="Regisration_No_hs"
                                    placeholder="Enter Registration No..." />
                            </div>
                            <div class="form_control">
                                <label for="board_name_hs">Board Name</label>
                                <input id="board_name_hs" name="board_name_hs" placeholder="Enter Board Name..." />
                            </div>
                            <div class="form_control">
                                <label for="Year_of_Passing_hs">Year of Passing</label>
                                <input id="Year_of_Passing_hs" name="Year_of_Passing_hs"
                                    placeholder="Enter Year of Passing..." />
                            </div>
                            <div class="form_control">
                                <label for="Percentage_hs">Percentage</label>
                                <input id="Percentage_hs" name="Percentage_hs" placeholder="Enter Percentage..." />
                            </div>
                        </div>
                        <div class="btns-group">
                            <button class="btn1 btn-pre" id="prev1" href="#">Previous</button>
                            <button class="btn1 btn-next" id="next2" href="#">Next</button>
                        </div>
                    </div>
                    <!-- ----------------end Higher Secondary------ -->
                    <!-- Secondary School-->
                    <div class="form-step">
                    <div class="form_container">
                        <div class="hsc">
                            <span class="title">Secondary School</span>
                        </div>
                        
                            <div class="form_control">
                                <label for="schoole_name_ss">School Name</label>
                                <input id="schoole_name_ss" name="schoole_name_ss" placeholder="Enter School Name..." />
                            </div>
                            <div class="form_control">
                                <label for="roll_no_ss">Roll No</label>
                                <input id="roll_no_ss" name="roll_no_ss" placeholder="Enter Roll No..." />
                            </div>
                            <div class="form_control">
                                <label for="Regisration_No_ss">Registration No</label>
                                <input id="Regisration_No_ss" name="Regisration_No_ss"
                                    placeholder="Enter Registration No..." />
                            </div>
                            <div class="form_control">
                                <label for="board_name_ss">Board Name</label>
                                <input id="board_name_ss" name="board_name_ss" placeholder="Enter Board Name..." />
                            </div>
                            <div class="form_control">
                                <label for="Year_of_Passing_ss">Year of Passing</label>
                                <input id="Year_of_Passing_ss" name="Year_of_Passing_ss"
                                    placeholder="Enter Year of Passing..." />
                            </div>

                            <div class="form_control">
                                <label for="Percentage_ss">Percentage</label>
                                <input id="Percentage_ss" name="Percentage_ss" placeholder="Enter Percentage..." />
                            </div>
                        </div>
                        <div class="btns-group">
                            <button class="btn1 btn-pre" id="prev2" href="#">Previous</button>
                            <button class="btn1 btn-next" id="next3" href="#">Next</button>
                        </div>
                    </div>
                    <!-- End Secondary School -->
                    <!-- Sumbit Document -->
                    <div class="form-step">

                        <div class="sumbit">
                            <span>Sumbit Document</span>
                        </div>
                        <div class="form_container">

                            <!-- File upload inputs for 12th and 10th marksheets -->
                            <div class="form_control">
                                <label for="upload">Upload Your 10th Marksheet</label>
                                <input type="file" id="upload1" name="upload1" />
                            </div>
                            <div class="form_control">
                                <label for="upload">Upload Your 12th Marksheet</label>
                                <input type="file" id="upload2" name="upload2" />
                            </div>
                            <div class="form_control">
                                <label for="upload"> Upload Your Residence Certificate </label>
                                <input type="file" id="upload3" name="upload3" />
                            </div>
                            <div class="form_control">
                                <label for="upload"> Upload Your Aadhaar Card </label>
                                <input type="file" id="upload4" name="upload4" />
                            </div>
                            <div class="form_control">
                                <label for="upload"> Upload Your Wbjee Jelet Admit Card </label>
                                <input type="file" id="upload5" name="upload5" />
                            </div>
                            <div class="form_control">
                                <label for="upload"> Upload Your Wbjee Admit Card </label>
                                <input type="file" id="upload6" name="upload6" />
                            </div>
                            <div class="form_control">
                                <label for="upload"> Upload Your Wbjee Rank </label>
                                <input type="file" id="upload7" name="upload7" />
                            </div>
                            <div class="form_control">
                                <label for="upload"> Upload Your Wbjee Jelet Rank </label>
                                <input type="file" id="upload8" name="upload8" />
                            </div>
                            <div class="form_control">
                                <label for="upload"> Upload Your Passport Photo Sizes </label>
                                <input type="file" id="upload9" name="upload9" />
                            </div>
                            <div class="form_control">
                                <label for="upload"> Upload Yourstudent Signature or Thumb </label>
                                <input type="file" id="upload10" name="upload10" />
                            </div>
                        </div>

                        <div class="btns-group">
                            <button class="btn1 btn-pre" id="prev3" href="#">Previous</button>
                            <div class="button_container">
                                <button type="submit" id="sumbit" name="submit" onclick="fun()">Sumbit</button>
                            </div> 
                        </div>
                        <!-- <div class="button_container">
                                <button type="submit" id="sumbit" name="submit" onclick="fun()">Sumbit</button>
                            </div> -->
                    </div>

            </form>

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
              $sql = "INSERT INTO new_admission (student_name, father_name, mother_name, date_of_birth, email, wbjee_rank, 
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
          
         


        </div>


    </div>


    <!-- <script src="script.js"></script>
 -->
 <script>

const prevBtns = document.querySelectorAll(".btn-pre");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum++;
        updateFormSteps();
        updateProgressbar();
    });
});

prevBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum--;
        updateFormSteps();
        updateProgressbar();
    });
});

function updateFormSteps() {
    formSteps.forEach((formStep) => {
        formStep.classList.contains("form-step-active") &&
            formStep.classList.remove("form-step-active");
    });

    formSteps[formStepsNum].classList.add("form-step-active");
}
 </script>

</body>

</html>