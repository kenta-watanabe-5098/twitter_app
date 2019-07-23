<?php
session_start();
require('dbconnect.php');

if(!empty($_COOKIE['email'])) {
    $email = $_COOKIE['email'];
}

if(!empty($_POST)) {
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $pass = htmlspecialchars($_POST['password'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $pass = hash('sha256', $pass);

    $stmt = $db->prepare('SELECT email FROM members WHERE email=?');
    $stmt->execute([$email]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if($data) {
        $error = [];
        $error['email'] = 1;
    } else {
        if($_POST['check'] == 'on') {
            setcookie('email', $_POST['email'], time() + 3600 * 24 * 7);
            setcookie('password', $_POST['password'], time() + 3600 * 24 * 7);
            setcookie('name', $_POST['name'], time() + 3600 * 24 * 7);
        }

        $stmt = $db->prepare('INSERT INTO members(name, password, email) VALUES(?, ?, ?)');
        $stmt->execute(array($name, $pass, $email));
    
        $db = null;

        header('Location: regist_done.php');
        exit();
    }

}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../twitter_app/common.css">
</head>
<body>
    <div class="container">
        <header>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../twitter_app/index.php">home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">sign in</li>
                    <li class="breadcrumb-item"><a href="../twitter_app/post.php">post</a></li>
                    <li class="breadcrumb-item"><a href="../twitter_app/registration.php">sign up</a></li>
                    <li class="breadcrumb-item"><a href="../twitter_app/logout.php">sign out</a></li>
                </ol>
            </nav>
        </header>

        <h2>ログイン</h2>

        <form action="" method="post" class="needs-validation">
            <div class="form-group">
                <label for="email">Eメールアドレス</label>
                <input type="email" class="form-control is-invalid" id="email" placeholder="Eメールアドレス">
                <small class="text-muted">記入例：kenta.watanabe@tokyo.supersoftware.co.jp</small>
                <div class="invalid-feedback">
                    正しく入力ください
                </div>
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" class="form-control is-invalid" id="password" placeholder="パスワード">
                <div class="invalid-feedback">
                    正しく入力ください
                </div>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">記憶する</label>
            </div>
            <button type="submit" class="btn btn-primary">送信する</button>
        </form>
    </div>
</body>
</html>