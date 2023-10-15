<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job</title>
    <link rel="stylesheet" href="job.css">
</head>
<body>
    
<div class="">
<div class="box">
<form action="job.php" method="post">
        <div class="job">
            <span class="title"> Job</span>
          </div>
        <div class="form_container">
            <div class="form_control">

              <label for="student_name">Employee Name:</label>
              <input
              required
                id="employee_name"
                name="employee_name"
                placeholder="Enter Employee Name..."
              />
            </div>
            <div class="form_control">
              <label for="first_name"> Apply of company</label>
              <input
                id="Institution"
                name="institution"
                required
                placeholder="Enter No..."
              />
            </div>
            <div class="form_control">
              <label for="company_name">Company Name</label>
              <input
                id="company_name"
                name="company_name"
                required
                placeholder="Enter Company Name..."
              />
            </div>
                <div class="form_control">
                  <label for="first_name">Select Company</label>
                  <select name="select_company" class="form_control">
                    <option value="Off cumpose">Off cumpose</option>
                    <option value="On Cumpose">On Cumpose</option>
                  </select>

                  <!-- <input
                    id="Institution"
                    name="Institution"
                    required
                    placeholder="Enter Company Name..." -->
                  <!-- <select>
                    <label for="first_name">Higher Company </label>
                    <option value="option1">Off cumpose</option>
                    <option value="option2">On Cumpose</option>
                    <option value="option3">Option 3</option>
                    Add more options as needed
                  </select> --> 
                </div>
                <div class="form_control">
                    <label for="area">Area</label>
                    <input
                      id=" area"
                      name="area"
                      required
                      placeholder="Enter Area..."
                    />
                  </div>
                  <div class="form_control">
                    <label for="package"> LPA </label>
                    <input
                      id="package"
                      name="package"
                      required
                      placeholder="Enter LPA..."
                    />
                  </div>
                  <div class="form_control">
                    <label for="stream"> Department </label>
                    <input
                      id="stream"
                      name="stream"
                      required
                      placeholder="Enter Department..."
                    />
                  </div>
                  
                </div> 

               <div class="button_container">
                <button type="submit" name="submit">Submit</button>
              </div>
        </form>
        <?php
        require_once "database.php"; // Include your database connection
        if (isset($_POST["submit"])) {
            // Retrieve form data
            $employeeName = $_POST["employee_name"];
            $institution = $_POST["institution"];
            $companyName = $_POST["company_name"];
            $selectCompany = $_POST["select_company"];
            $area = $_POST["area"];
            $package = $_POST["package"];
            $department = $_POST["stream"];
          

            //Insert data into the 'job' table
            $sql = "INSERT INTO job (employee_name, institution, company_name, select_company, area, package, stream) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_bind_param($stmt, "sssssss", $employeeName, $institution, $companyName, $selectCompany, $area, $package, $department);
                
                if (mysqli_stmt_execute($stmt)) {
                    echo "<div class='alert alert-success'>Data inserted successfully.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error inserting data into the database: " . mysqli_error($conn) . "</div>";
                }

                mysqli_stmt_close($stmt);
            } else {
                echo "<div class='alert alert-danger'>Error preparing the SQL statement: " . mysqli_error($conn) . "</div>";
            }

            // Close the database connection
            mysqli_close($conn);
        }
        ?>
        
</div>


    
</div>

</body>
</html>


