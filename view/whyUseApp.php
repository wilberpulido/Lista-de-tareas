<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../images/iconTask.icon"/>
    <script defer type="text/javascript" src="../funciones.js"></script>
    <title>Why use this application</title>
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
            <div class="whyUseAppGrid">
                <h2> Why use this application? </h2>
                <div>
                    <h4> Organizing your tasks is the best way to increase your personal productivity</h4>
                </div>
                <picture>
                    <img src="../images/organizing.jpg" alt="Organizing">
                </picture>
                <picture>
                    <img src="../images/deadline.png" alt="deadline">
                </picture>
                <div>
                    <h4> It is a very simple application to add tasks that have a scheduled date</h4>
                </div>
                <div>
                   <h4> It allows you to make changes to your tasks quickly and easily</h4>
                </div>
                <picture>
                    <img src="../images/adapt.jpg" alt="deadline">
                </picture>
            </div>
        </main>
</div>
    
</body>
</html>