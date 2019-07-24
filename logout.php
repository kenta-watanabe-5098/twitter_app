<?php
session_start();
require('session.php');


if (!empty( $_COOKIE['auto_login'] )) {
    delete_auto_login( $_COOKIE['auto_login'] );
    
    
}

header('Location: index.php');
exit();
?>