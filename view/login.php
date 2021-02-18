<!DOCTYPE html>
<html lang="en">
<?php 
    include("partials/head.html");
?>
<body>
    <div class="contenedor">
    <div class="formBoxLogin">
        <button type="button" class="btn-return-home">
            <a class="btn" href="../">Return home page</a>
        </button>
        <form action="../controller/login.php" method="POST">
            <div class="form-container-login">
                <div>
                    <h2>LOGIN</h2>
                    <h3>welcome! login information</h3>
                </div>
                <div class="input-container">
                    <input name="username" type="text" required=""/>
                    <label>Mail/Username</label>		
                </div>
                <div class="input-container">		
                    <input name="password" type="password" required/>
                    <label>Password</label>
                </div>
                <div>
                    <a class="link" href="./registration.php">
                        Free registration! 
                    </a>
                </div>
                <div>
                    <button type="submit" class="btn-form">submit</button>
                </div>
            </div>
        </form>
    </div>

    </div>
</body>
</html>