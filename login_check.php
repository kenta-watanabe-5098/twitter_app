<?php
session_start();
require('dbconnect.php');
require('session.php');

if(empty($_POST)) {
    header('Location: login.php');
    exit();
}

if(!empty($_POST)) {
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $password = hash('sha256', $password);

    $stmt = $db->prepare('SELECT email, password FROM members WHERE email=? AND password=?');
    $stmt->execute(array($email, $password));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt = null;

    if($data) {
        if($_POST['check'] == 'on') {
            setup_auto_login($email);
        }

        header('Location: index.php');
        exit();
    } else {
        echo 'ログインに失敗しました';
    }
}

?>