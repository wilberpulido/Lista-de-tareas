<div id="menu-short">
    <button class="btn btn-menu"> Menu</button>
    <div class="other-submenu">
        <button class="btn"> <a href="view/login.html"> Login </a> </button> 
        <button class="btn"> <a href="view/registration.html"> Register </a></button>
    </div>
    <ul class="navegbar">
        <li >
            <button>
                <a href="<?php echo $whyUseUrl ?>">
                    Why this application?
                </a>
            </button>
        </li>
        <li>
            <button>
                <a href="<?php echo $aboutMeUrl ?>">
                    About me
                </a>
            </button>
        </li>
        <li>
            <button>
            <a href="<?php echo $contactUrl ?>">
                Contact
            </a>
            </button>
        </li>
    </ul>
</div>
<div id="menu-large">
    <ul class="navegbar-desktop">
        <div>

            <li >
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