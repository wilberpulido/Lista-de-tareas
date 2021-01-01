<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../images/iconTask.icon"/>

    <title>Why use this application</title>
</head>
<body>
    <div class="container-fluid">
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
            <div class="whyUseAppGrid">
                <h2> Why use this application? </h2>
                <div>
                    <h4> Organizing your tasks is the best way to increase your personal productivity</h4>
                </div>
                <div class="organizingImage">
                    <!-- imagen -->
                </div>
                <div class="deadlineImage">
                    <!-- Imagen -->
                </div>
                <div>
                    <h4> It is a very simple application to add tasks that have a scheduled date</h4>
                </div>
                <div>
                   <h4> It allows you to make changes to your tasks quickly and easily</h4>
                </div>
                <div class="adaptImage">
                    <!-- Imagen -->
                </div>
            </div>
        </main>
</div>
    
</body>
</html>