<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/form.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../images/iconTask.icon"/>
    <script src="https://kit.fontawesome.com/ae8e09c608.js" crossorigin="anonymous"></script>
    <script defer type="text/javascript" src="../funciones.js"></script>
    <title>Contact</title>
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
        <div id="contactPage">
            <section>
                <h2 class="text-center">
                    Introduction
                </h2>
                <p class="text-justify">
                    This application has been developed by Wilber Pulido,
                    web developer with experience in different languages such as 
                    html, css, php, java, javascript with react.js and express.js and handling mySQL and mongoDB
                    databases.
                </p>
                <div id="contactInf">
                    <h2 class="text-center">Contact information</h2>
                    <div>
                        <a href="https://www.linkedin.com/in/wilber-pulido-b523116b/" target="_blank">
                            <i class="fab fa-linkedin fa-5x"></i>
                         </a>
                    </div>
                    <div>
                        <a href="https://wa.link/atmsgr" target="_blank">
                            <i class="fab fa-whatsapp fa-5x"></i>
                        </a>
                    </div>
                    <h2 class="text-center">Other websites</h2>
                    <div class="contactGit">
                        <a href="https://github.com/wilberpulido" target="_blank">
                            <i class="fab fa-github fa-5x"></i>
                        </a>
                    </div>
                </div>
            </section>
            <section>
                <h2 class="text-center">
                    Contact form
                </h2>
                <form method="POST" action="../services/contactMail.php">
                    <div  id="formContact">
                        <label for="nameContact">Name: </label>
                        <input type="text" name="nameContact" id="nameContact" required>

                        <label for="telephoneContact">Telephone: </label>
                        <input type="tel" name="telephoneContact" id="telephoneContact" required>

                        <label for="emailContact">Email: </label>
                        <input type="email" name="emailContact" id="emailContact" required>

                        <div>
                            <label for="messageContact">Message: </label>
                            <textarea name="messageContact" id="messageContact" required></textarea>
                        </div>
                        <div class="btn-submit">
                            <button class="btn" type="submit">SEND MESSAGE</button>
                        </div>
                    </div>
                </form>
                <?php 
                    if (isset($_SESSION["message"])) {
                        
                        if($_SESSION["message"]){
                            echo "<div class = 'd-flex justify-content-center'>";
                            echo "<h3 class = 'mt-4 btn btn-success'> message sent successfully. </h3>";
                            echo "</div>";

                            $_SESSION["message"] = null;

                        }else{
                            echo "<div class = 'd-flex justify-content-center'>";
                            echo "<h3 class = 'mt-4 btn btn-danger'> The message has not been sent, data is missing. </h3>";
                            echo "</div>";

                            $_SESSION["message"] = null;

                        }
                    }
                ?>
            </section>
        </div>
    </main>
</div>
</body>
</html>