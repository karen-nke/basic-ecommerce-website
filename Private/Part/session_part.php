<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../../Public/index.php");
}


if (isset($_SESSION['last_acted_on']) && (time() - $_SESSION['last_acted_on'] > 10 * 60)) { //if user are inactive for 30minutes
    session_unset();
    session_destroy(); // destroy session data in storage
    header('Location: ../../Public/index.php');
} else {
    session_regenerate_id(true);
    $_SESSION['last_acted_on'] = time();
}

?>
