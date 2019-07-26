<?php
session_start();
   
if(!empty($_POST)) {
    require('dbconnect.php');
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $password = hash('sha256', $password);

    $stmt = $db->prepare('SELECT email, password FROM members WHERE email=? AND password=?');
    $stmt->execute(array($email, $password));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    $db = null;

    $_SESSION['id'] = $data['email'];

    if($data) {
        if(isset($_POST['check']) == 'on') {
            require('session.php');
            if(!empty($auto_login_ley)) {
                session_set_cookie_params(60 * 60 * 24 * 7);
                delete_auto_login($auto_login_key);
            }
            setup_auto_login($email);
        }

        header('Location: index.php');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}


?>