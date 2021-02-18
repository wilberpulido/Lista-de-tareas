<!DOCTYPE html>
<html lang="en">
<?php 
    include("partials/head.html");
?>
<body>
    <div class="contenedor">
    <div class="formBoxRegister">
        <button type="button" class="btn-return-home">
            <a class="btn" href="../">Return home page</a>
        </button>
        <form action="../controller/registration.php" method="POST">
            <div class="form-container-register">
                <div>
                    <h2>REGISTER</h2>
                </div>
                <div class="input-container-register">
                    <input name="firstName" type="text" required/>
                    <label>First name</label>
                </div>
                <div class="input-container-register">
                    <input name="lastName" type="text" required/>
                    <label>Last name</label>
                </div>
                <div class="input-container-register">
                    <input name="username" type="text" required=""/>
                    <label>Username</label>
                </div>
                <div class="input-container-register">
                    <input name="password" type="password" required/>
                    <label>Password</label>
                </div>
                <div class="input-container-register">
                    <input name="mail" type="email" required/>
                    <label>Mail</label>
                </div>
                <div class="link-login-register">
                    <a href="./login.php" class="link">
                        GO TO LOGIN
                    </a>
                </div>
                <div class="btn-submit">
                    <button type="submit">submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>