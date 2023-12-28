<?php
session_start();
 if (!isset($_SESSION['username'])) {
      header('location: ./assets/user/login.php');
 }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/csstyle/index.css">
    <title>Web Project</title>
</head>

<body>
    <div class="man">
        <?php
      include ('header.php');
      ?>
    </div>
    <div class="header">
        <!--Content before waves-->
        <div class="inner-header flex">
            <div class="content">
                <h1 id="time">12:00 AM</h1></br>
                <h2 id="day">Monday, January 01 </h2>
                <h3 id="greeting">Good Morning</h3>
                <h2>Wellcome-<?php echo $_SESSION['username'] ?></h2>
                <h3>What would you like to search today?</h3>
                <form action="https://www.google.com/search" method="get">
                    <input type="text" name="q" class="form-control custom-input">
                    <span class="input-group-btn">
                        <button class="custom" type="submit" hidden><i class="fa fa-search" hidden></i></button>
                    </span>
                </form>
            </div>
        </div>

        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
    </div>
    <!--Waves end-->
    <!--Content starts-->




    <div class="contener">
        <div class="col">
            <img src="./public/hero.jpg" alt="image">
        </div>
        <div class="col1">
            <div class="coll2">
                <h1 class="hero">Hello.. I Am Arun Nishad</h1>
                <h2>Web Devloper</h2>
                <p>Hello, I am passionate and skilled web developer with a
                    strong background in computer science. Proficient in HTML, CSS, and
                    JavaScript, I create visually stunning and responsive user interfaces. With
                    expertise in Next.js, I build efficient and dynamic web applications. Eager
                    to continue my journey in web development, I am committed to delivering
                    creative solutions and collaborative results to achieve excellence in this
                    ever-evolving industry.</p>
            </div>
        </div>
    </div>
    <!-- skill section start -->
    <div class="skills">
        <h1 class="heding">Web Devlopment Skills</h1>
        <div class="containe">
            <div id="left">
                <h2>Frontend Skills</h2>
                <ul class="skills-bar-container">
                    <label>HTML5</label>
                    <span class="percent"></span>
                    <li>
                        <span class="progressbar progressblue" id="progress-htmlcss"></span>
                    </li>
                    <label>CSS</label>
                    <span class="percent"></span>
                    <li>
                        <span class="progressbar progressblue" id="progress-jsjq"></span>
                    </li>
                    <label>JavaScript</label>
                    <span class="percent"></span>
                    <li>
                        <span class="progressbar progressblue" id="progress-php"></span>
                    </li>
                </ul>
            </div>
            <div id="right">
                <h2>Backend Skills</h2>
                <ul class="skills-bar-container">
                    <label>php</label>
                    <span class="percent"></span>
                    <li>
                        <span class="progressbar progressblue" id="progress-java"></span>
                    </li>
                    <label>NodeJs</label>
                    <span class="percent" id="angular-pourcent"></span>
                    <li>
                        <span class="progressbar progressblue" id="progress-csharp"></span>
                    </li>
                    <label>Mongodb/ MySQL</label>
                    <span class="percent" id="angular-pourcent"></span>
                    <li>
                        <span class="progressbar progressblue" id="progress-sql"></span>
                </ul>
            </div>
        </div>
    </div>
    <!--Content ends-->
    <!-- footer  -->
    <?php
     include ('footer.php');
?>
    <script src="./assets/javascript/index.js"></script>
</body>

</html>