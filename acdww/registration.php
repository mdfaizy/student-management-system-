<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->


<style>
    body {
    padding: 50px;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 50px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    background-color: rgb(126, 97, 154);
    border-radius: 10px;
}

.name {
    color: white;
    font-size: 20px;
    font-weight: 500;
}

.password {
    color: white;
    font-size: 20px;
    font-weight: 500;
}

.no-more {
    color: black;
    font-size: 17px;
    font-weight: 400;
}

.no-more p a {
    text-decoration: none;
    list-style-type: none;
    font-size: 15px;
    color: azure;
}

.form-group {
    margin-bottom: 30px;
}

.reg {
    color: white;
    font-size: 20px;
    font-weight: 300;
}

.alt {
    text-decoration: none;
    list-style-type: none;
    font-size: 15px;
    color: blue;
}
</style>


</head>
<body>
    <div class="container">
    <?php
if (isset($_POST["submit"])) {
    $fullName = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["repeat_password"];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if (empty($fullName) || empty($email) || empty($password) || empty($passwordRepeat)) {
        array_push($errors, "All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }
    if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }
    if ($password !== $passwordRepeat) {
        array_push($errors, "Password does not match");
    }

    if (count($errors) === 0) {
        // Database connection
        require_once "database.php";

        // Check if the email already exists
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_stmt_init($conn);
       // var_dump($stmt);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) > 0) {
                array_push($errors, "Email already exists");
            }
        } else {
            die("Database query preparation failed");
        }

        // If no errors, insert the user data into the database
        if (count($errors) === 0) {
            $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            } else {
                die("Database insertion failed");
            }
        } else {
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        }

        // Close database connection
        mysqli_close($conn);
    }
}
?>

        
        <form action="registration.php" method="post">
            <div class="form-group">
            <label for="enter-name" class="name">Enter Your Name</label>
             <input type="text" class="form-control" name="fullname" placeholder="Full name">
            </div>
            <div class="form-group">
            <label for="enter-name" class="name">Enter Your Email</label>

                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
            <label for="enter-name" class="name">Enter Your password</label>

                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
            <label for="enter-name" class="name">Enter Your Conform Password</label>

                <input type="text" class="form-control" name="repeat_password" placeholder="Repeat Password">
            </div>

            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
         </form>
        <div>
        <div class="reg"><p>Already Registered <a href="login.php">Login Here</a></p></div>
        <!-- <div class="reg"><p>Already Registered <a href="home.php">Home</a></p></div> -->
      </div>
    </div>
</body>
</html>