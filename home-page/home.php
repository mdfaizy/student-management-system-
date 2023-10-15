<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFORMATION</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="header">
        <nav class="nav">
            <div class="ab"><a href="">INFORMATION</a></div>
            <div class=" nav-links" id="links"> 
            <!-- <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>  -->
                
                <ul>
                    <li>Home</li>
                    <li><a href="../new-admission/new_student.php">New Admission</a></li>
                    <li><a href="../exit-student/exit.php">Exit Record</a></li>
                    <li><a href="../master's-courses/master.php">Master's</a></li>
                    <li><a href="../Job/job.php">Job</a></li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>
            </div>
            <!-- <i class="fa-solid fa-bars" onclick="showMenu()"></i> -->

            <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
        </nav>
    </section>
    
    <script> 
// var navbarLinks=document.getElementById("nav-links");
// function showMenu(){
//     navbarLinks.style.right='0'
// }
// function hideMenu(){
//     navbarLinks.style.right="-200px";
// } 

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

















