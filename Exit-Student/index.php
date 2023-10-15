<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Registration Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;1,800&family=Heebo:wght@300&family=Libre+Franklin:ital,wght@0,500;1,200;1,600&family=Poppins:ital,wght@0,600;0,700;1,400;1,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="exit.css" />
    <script src="script.js"></script>
</head>

<body>
    <div class="container">
        <div class="box">
            <h1>
                Exit-Student
            </h1>


            <form class="container" action="process.php" method="POST" enctype="multipart/form-data">
                <div class="form_container">
                    <div class="form_control">
                        <label for="student_name"> Student Name </label>
                        <input required id="student_name" name="student_name" placeholder="Enter Student Name..." />
                    </div>
                    <div class="form_control">
                        <label for="father_name"> Father Name </label>
                        <input id="father_name" name="father_name" placeholder="Enter father Name..." />
                    </div>
                    <div class="form_control">
                        <label for="mother_name"> Mother Name </label>
                        <input required id="mother_name" name="mother_name" placeholder="Enter mother Name..." />
                    </div>
                    <div class="form_control">
                        <label for="email"> Date of Birth </label>
                        <input value="date" type="date" id="date" name="date" required />
                    </div>
                    <div class="form_control">
                        <label for="email"> Email </label>
                        <input type="email" id="email" name="email" placeholder="Enter Email..." required />
                    </div>
                    <div class="form_control">
                        <label for="Select_stream">Select Stream</label>
                        <input type="Select_stream" id="Stream" name="stream" required placeholder="Enter Select Stream..." />
                    </div>
                    <div class="form_control">
                        <label for="Application_no">Registration no..</label>
                        <input type="Application_no" id="Application_no" name="application_no" required placeholder="Enter Registration No..." />
                    </div>
                    <div class="form_control">
                        <label for="first_name"> Session </label>
                        <input id="session" name="session" required placeholder="Enter Session..." />
                    </div>
                    <div class="form_control">
                        <label for="email"> Phone No </label>
                        <input type="phone" id="phone" name="phone" required placeholder="Enter Phone No..." />
                    </div>
                    <div class="form_control">
                        <label for="State"> State </label>
                        <input id="State" name="state" required placeholder="Enter State Name..." />
                    </div>
                    <div class="form_control">
                        <label for="gate"> GATE Score Card</label>
                        <input id="gate" name="gate_score" required placeholder="Enter Score No..." />
                    </div>
                    <div class="form_control">
                        <label for="upload"> GATE Score Card </label>
                        <input type="file" id="upload" name="myfile" required/>
                    </div>
                    <div class="form_control">
                        <label for="State"> x </label>
                        <input id="State" name="state2" required placeholder="Enter State Name..." />
                    </div>
                    <div class="form_control">
                        <label for="Cgpa"> 1th Year CGPA </label>
                        <input id="cgpa" name="cgpa1" required placeholder="Enter 1th Year CGPA..." />
                    </div>
                    <div class="form_control">
                        <label for="Cgpa"> 2nd Year CGPA </label>
                        <input id="cgpa" name="cgpa2" required placeholder="Enter 2nd Year CGPA..." />
                    </div>
                    <div class="form_control">
                        <label for="Cgpa"> 3th Year CGPA </label>
                        <input id="cgpa" name="cgpa3" required placeholder="Enter 3th Year CGPA..." />
                    </div>
                    <div class="form_control">
                        <label for="Cgpa"> 4th Year CGPA </label>
                        <input id="c" name="cgp4" required placeholder="Enter 1th Year CGPA..." />
                    </div>
                    <div class="form_control">
                        <label for="Total-cgpa"> Total CGPA </label>
                        <input id="total-cgpa" name="total_cgpa" required placeholder="EnterTotal CGPA..." />
                    </div>
                    <div class="exit-s">
                        <p><input type="submit" class="w3-btn w3-teal" name="file_submit" value="SUBMIT"></p>
                        <!-- <span class="title"> Master's Courses</span> -->
                        <ul class="ul">
                            <li><a class="master" href="../Master's Courses/master.html">Master's</a></li>
                            <li><a class="job" href="../Job/job.html">Job </a></li>
                        </ul>
                    </div>
                   


                    <!-- </div>  -->

                    <!-- </div> -->
        </form>
 </div>
</body>

</html>