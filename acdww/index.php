<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="index.css"> -->
     <style>
        
 .container {
    background-color: azure;
     /* width:100vw; */
 }
 
 .header {
     background-size: cover;
     position: relative;
    
 }
 
 .nav {
     display: flex;
     flex-wrap: wrap;
     justify-content: space-between;
     margin: 10px;
     align-items: center;
     
 }
 
 .ab img {
     text-decoration: none;
     width: 100px;
     height: 80px;
     border-radius: 10px;
 }
 
 .nav-links {}
 
 .nav-links ul {
     display: flex;
     font-size: 130px;
     margin-right: 40px;
     list-style: none;
     color: gray;
     
     
 }
 
 .nav-links li a {
     text-decoration: none;
     text-align: center;
     justify-content: center;
     
     font-size:20px;
     font-weight: 400;
 }
 
 .nav-links li {
     padding: 5px;
     font-size: 20px;
     cursor: pointer;
     margin: 4px;
 }
 
 .nav-links li::after {
     content: "";
     width: 0%;
     height: 2px;
     background: #f44336;
     display: block;
     transition: 0.5s ease-in;
 }
 
 .nav-links li:hover::after {
     width: 100%;
 }
 
 .nav .fa-solid {
     display: none;
 }


    </style>
   
</head>
<body>
    <div class="container flex">
       <!-- <a href="./home-page/home.php">Home -->
       <!-- <ul>
                    <li>Home</li>
                    <li><a href="../new-admission/new_student.php">New Admission</a></li>
                    <li><a href="../exit-student/exit.php">Exit Record</a></li>
                    
                </ul> -->

      <section class="header">
        <nav class="nav">
            <div class="ab">INFORMATION
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
        </nav>
       </section>

       <!-- </a> -->
       <!-- <div class="logout">
       <a  href="logout.php" class="btn btn-warning">Logout</a>

       </div> -->
    </div>
</body>
</html>