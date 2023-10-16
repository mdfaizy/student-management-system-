<?php
// session_start();
// if (!isset($_SESSION["user"])) {
//    header("Location: login.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container flex">
       <!-- <a href="./home-page/home.php">Home -->

      <section class="header">
        <nav class="nav">
            <div class="ab">
                INFORMATION
                <!-- <img src="./assets/logo.png" alt="logo"> -->
            </div>
            <div class=" nav-links" id="links"> 
            <li class="fa-solid fa-xmark" onclick="hideMenu()"></li> 
                
                <ul>
                    <li>Home</li>
                    <!-- <li><a href="../new-admission/new_student.php">New Admission</a></li>
                    <li><a href="../exit-student/exit.php">Exit Record</a></li> -->
                    <!-- <li><a href="./login.php">Login</a></li> -->
                    <li><a href="./login.php">Login</a></li>
                    <li><a href="./registration.php">Registration</a></li>
                    <!-- <li> <a  href="logout.php" class="btn btn-warning">Logout</a></li> -->

                </ul>
            </div>
            <li class="fa-solid fa-bars" onclick="showMenu()"></li>
            <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
        </nav>
       </section>
    </div>

    <script>

const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");

        hamburger.addEventListener("click", mobileMenu);

        function mobileMenu() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }


        window.addEventListener("scroll", function () {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })


    </script>
</body>
</html>