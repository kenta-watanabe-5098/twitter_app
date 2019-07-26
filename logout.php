<?php
session_start();
if(!empty($_SESSION['id'])) {
    setcookie('PHPSESSID', '', time() - 42000, '/');
    // setcookie('auto_login', '', time() - 42000, '/');
    $_SESSION = array();
}

header('Location: index.php');
exit();
?>