<?php
    $dsn = 'mysql:dbname=db_twitter;host=localhost;charset=utf8';
    $root = 'root';
    $pwd = 'root';
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $db = new PDO($dsn, $root, $pwd, $options);

} catch(PDOException $e) {
    print('接続に失敗しました：' . $e->getMessage());
    exit();
}
?>