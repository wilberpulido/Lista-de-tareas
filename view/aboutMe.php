<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../images/iconTask.icon"/>
    <script defer type="text/javascript" src="../funciones.js"></script>
    <title>About Me</title>
</head>
<body>
    <div class="container-fluid">
    <header>
        <div>
            <button class="btn btn-dark btn-menu"> Menu</button>
            <div class="other-submenu">
                <button class="btn btn-dark"> <a href="./login.html"> Login </a> </button> 
                <button class="btn btn-dark"> <a href="./registration.html"> Register </a></button>
            </div>
            <?php
            $whyUseUrl = "./whyUseApp.php";
            $aboutMeUrl = "./aboutMe.php";
            $contactUrl = "./contact.php";
                include("landingPage/header.php");
            ?>
        </div>
        </header>
    <main>
        <section class="aboutMe">
            <h1> About me </h1>
            <p>
                This web application has been developed as a final project for the full stack php course, 
                it is a simple tool to add pending tasks and organize your next weeks.
            </p>
            <p>
                The original purpose has been to make a CRUD (create, read, update and delete) 
                simple, allowing the use of technologies learned during the course,
                for this purpose have been used only html, css, bootstrap,
                php and for the database I used mySQL for the development of this website. 
            </p>
        </section>
        <section class="iconTech">
            <picture class="icon">
                <img src="../images/logoHTML.png" alt="logo HTML">
            </picture>
            <picture class="icon">
                <img src="../images/logoCSS.png" alt="logo CSS">
            </picture>
            <picture class="icon">
                <img src="../images/logoBootstrapStack.png" alt="logo Bootstrap">
            </picture>
            <picture class="icon">
                <img src="../images/logoPHP.png" alt="logo PHP">
            </picture>
            <picture class="icon">
                <img src="../images/logomySQL.jpg" alt="logo mySQL">
            </picture>
        </section>
    </main>
    </div>
</body>
</html>