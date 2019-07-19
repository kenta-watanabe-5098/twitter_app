<?php
try {
    $dsn = 'mysql:dbname=*;host=localhost;charset=utf8';
    $root = 'root';
    $pwd = 'root';
    $db = new PDO($dsn, $root, $pwd);

} catch(PDOException $e) {
    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage()); 
}
?>