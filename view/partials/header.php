<?php
if (basename($_SERVER['PHP_SELF']) === "index.php") {
    $whyUseUrl ="view/whyUseApp.php" ;
    $aboutMeUrl = "view/aboutMe.php";
    $contactUrl = "view/contact.php";
    $loginUrl = "view/login.php";
    $registerUrl = "view/registration.php";
}else{
    $whyUseUrl ="./whyUseApp.php" ;
    $aboutMeUrl = "./aboutMe.php";
    $contactUrl = "./contact.php";
    $loginUrl = "./login.php";
    $registerUrl = "./registration.php";
}
?>
<div id="menu-short">
    <button class="btn btn-menu"> Menu</button>
    <div class="other-submenu">
        <button class="btn"> <a href="<?php echo $loginUrl ?>"> Login </a> </button> 
        <button class="btn"> <a href="<?php echo $registerUrl ?>"> Register </a></button>
    </div>
    <ul class="navegbar">
        <li>
            <a href="<?php echo $whyUseUrl ?>">
                    Why this application?
            </a>
        </li>
        <li>
            <a href="<?php echo $aboutMeUrl ?>">
                    About me
            </a>
        </li>
        <li>
            <a href="<?php echo $contactUrl ?>">
                Contact
            </a>
        </li>
    </ul>
</div>
<div id="menu-large">
    <ul class="navegbar-desktop">
        <div>
            <li >
                <a href=<?php echo $whyUseUrl ?>>
                    Why this application?
                </a>
            </li>
            <li>
                <a href="<?php echo $aboutMeUrl ?>">
                    About me
                </a>
            </li>
            <li>
                <a href="<?php echo $contactUrl ?>">
                    Contact
                </a>
            </li>
        </div>
        <div>
            <li>
                <a href="<?php echo $loginUrl ?>">
                    Login
                </a>
            </li>
            <li>
                <a href="<?php echo $registerUrl ?>">
                    Register
                </a>
            </li>
        </div>   
    </ul>
</div>
