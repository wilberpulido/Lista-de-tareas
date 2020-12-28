<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Contact</title>
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
        <h1 class="text-center"> Contact </h1>

        <section class="contact">
            <div>
                <form id="formContact" action="POST">
                    <div class="container-label-input">
                        <label for="nameContact">Name: </label>
                        <input type="text" name="nameContact" id="nameContact">
                        <label for="telephoneContact">Telephone: </label>
                        <input type="tel" name="telephoneContact" id="telephoneContact">
                    </div>
                    <div class="container-label-input">
                        <label for="emailContact">Email: </label>
                        <input type="email" name="emailContact" id="emailContact">
                    </div>
                    <div>
                        <label for="messageContact">MessageContact: </label>
                        <textarea name="messageContact" id="messageContact"></textarea>
                    </div>
                    <button class="btn btn-dark" type="submit">SEND MESSAGE</button>
                </form>
            </div>
            <div id="personalDate">
                <p>
                This application has been developed by Wilber Pulido,
                a web developer with experience in different languages such as 
                html, css, javascript, php and java, handling mySQL and mongoDB
                 databases and javascript frameworks such as react.js and express.js
                </p>
            </div>
        </section>
    </main>

    </div>
    
</body>
</html>