<?php
require "index-controller.php";

// COOKIES SETTINGS
function cookie_Monsta()
{
    var_dump($_GET);
    
    if (isset($_GET["darkMode"])) {
        setcookie("dark_cookie", "dark_cookie", time() + (3600 * 24 * 7));
    }

    if (isset($_GET["settings"])) {
        setcookie("display_mode", $_GET["settings"], time() + (3600 * 24 * 7));
    }

    if (isset($_GET["user_fav"])) {
        foreach ($_GET["user_fav"] as $selected) {
            setcookie("user_fav", $selected, time() + (3600 * 24 * 7));
        }
    }
}

if (count($_GET)>0) {
    cookie_Monsta();
}
