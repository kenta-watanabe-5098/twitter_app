<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$error = array();

require('dbconnect.php');
$stmt = $db->prepare('SELECT email FROM members WHERE email=?');
$stmt->execute([$email]);
$data = $stmt->fetch(PDO::FETCH_ASSOC);

if($username == '' || mb_strlen($username) < 4) {
    $error = $error + array('username_error' => '1');
}
if($password == '' || mb_strlen($password )< 8) {
    $error = $error + array('password_error' => '1');
}
if($email == '') {
    $error = $error + array('email_error' => '1');
} 
if($data) {
    $error = $error + array('email_error' => '2');
}


if(empty($error)) {
    $username = htmlspecialchars($username, ENT_QUOTES);
    $pass = htmlspecialchars($password, ENT_QUOTES);
    $email = htmlspecialchars($email, ENT_QUOTES);
    $password = hash('sha256', $password);

    $stmt = $db->prepare('INSERT INTO members(name, password, email) VALUES(?, ?, ?)');
    $stmt->execute(array($username, $password, $email));

    $db = null;

    header('Location: regist_done.php');
    exit();

} else {
    $_SESSION['username_error'] = $error['username_error'];
    $_SESSION['password_error'] = $error['password_error'];
    $_SESSION['email_error'] = $error['email_error'];

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['email'] = $_POST['email'];
    header('Location: registration.php');
    exit();
}
?>