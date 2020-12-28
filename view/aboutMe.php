<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../images/iconTask.icon"/>
    <title>About Me</title>
</head>
<body>
    <div class="container">
    <header>
            <?php
            $whyUseUrl = "./whyUseApp.php";
            $loginUrl = "./login.html";
            $aboutMeUrl = "./aboutMe.php";
            $registerUrl = "./registration.html";
            $contactUrl = "./contact.php";
                include("landingPage/header.php");
            ?>
    </header>
    <main>
        <section class="aboutMe">
            <h1 class="text-center"> About me </h1>
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
            <div class="icon iconHTML">

            </div>
            <div class="icon iconCSS">
                
            </div>
            <div class="icon iconBOOTS">
                
            </div>
            <div class="icon iconPHP">
                
            </div>
            <div class="icon iconMYSQL">
                
            </div>
        </section>
    </main>
    </div>
</body>
</html>