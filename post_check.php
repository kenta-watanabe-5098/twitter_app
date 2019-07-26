<?php
session_start();
$textarea = $_POST['textarea'];
$file = $_FILES['file'];

if(is_uploaded_file($file['tmp_name'])) {
    $extension = substr($file['name'], -3);

    if($extension == 'jpg' || $extension == 'png') {
        $filedir = '/';
        $filename = $filefir . basename($file['name']);

        move_uploaded_file($file['tmp_name'], $filename);
        header('Location: index.php');
        exit();
    } else {
        $_SESSION['textarea'] = $_POST['textarea'];
        header('Location: post.php');
        exit();
    }   
} else {
    $_SESSION['file_error'] = '1';
    header('Location: post.php');
    exit();
}
?>