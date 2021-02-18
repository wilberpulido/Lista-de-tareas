<!DOCTYPE html>
<html lang="en">
<?php 
    include("partials/head.html");
?>
<body>
    <div class="contenedor">
        <header>
            <?php 
                $whyUseUrl = "./whyUseApp.php";
                $aboutMeUrl = "./aboutMe.php";
                $contactUrl = "./contact.php";
                $loginUrl = "./login.php";
                $registerUrl = "./registration.php";
                include("partials/header.php");
            ?>
        </header>
        <main id="mainWhyUseAppGrid">
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
        <?php
        include("partials/footer.html");
        ?>
</div>
    
</body>
</html>