<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include("partials/head.html");
?>
<body>
<div class="contenedor">
    <header>
        <?php 
            include("partials/header.php");
        ?>
    </header>
    <main>
        <div id="contactPage">
            <section>
                <h2>
                    Introduction
                </h2>
                <p>
                    This application has been developed by Wilber Pulido,
                    web developer with experience in different languages such as 
                    html, css, php, java, javascript with react.js and express.js and handling mySQL and mongoDB
                    databases.
                </p>
                <div id="contactInf">
                    <h2>Contact information</h2>
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
                <h2>
                    Contact form
                </h2>
                <form method="POST" action="../controller/sendMailContact.php">
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
                            echo "<div class = 'messageContact successMail'>";
                            echo "<h3 class = ''> message sent successfully. </h3>";
                            echo "</div>";
                            $_SESSION["message"] = null;

                        }else{
                            echo "<div class = 'messageContact failMail'>";
                            echo "<h3 class = ''> The message has not been sent, data is missing. </h3>";
                            echo "</div>";
                            $_SESSION["message"] = null;
                        }
                    }
                ?>
            </section>
        </div>
    </main>
    <?php
        include("partials/footer.html");
    ?>
</div>
</body>
</html>