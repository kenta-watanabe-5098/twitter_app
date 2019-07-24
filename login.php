<?php
session_start();
require('session.php');


$email = null;
$password = null;

if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
if(isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
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

        <form action="login_check.php" method="post" class="needs-validation">
            <div class="form-group">
                <label for="email">Eメールアドレス</label>
                <input type="email" class="form-control is-invalid" id="email" name="email" placeholder="Eメールアドレス">
                <small class="text-muted">記入例：kenta.watanabe@tokyo.supersoftware.co.jp</small>
                <div class="invalid-feedback">
                    正しく入力ください
                </div>
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" class="form-control is-invalid" id="password" name="password" placeholder="パスワード">
                <div class="invalid-feedback">
                    正しく入力ください
                </div>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
                <label class="form-check-label" for="exampleCheck1">記憶する</label>
            </div>
            <button type="submit" class="btn btn-primary">送信する</button>
        </form>
    </div>
</body>
</html>