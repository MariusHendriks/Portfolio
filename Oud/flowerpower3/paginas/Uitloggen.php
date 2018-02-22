<?php

// session leegmaken
$_SESSION = array();

// ophalen session parameters
$params = session_get_cookie_params();

// verwijder sessie cookie
setcookie(session_name(),
        '', time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]);


// destroy de session helemaal
session_destroy();

// Header refresh naar de Homepage
header("location:index.php?pagina=Homepage");
?>
