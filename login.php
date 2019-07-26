<?php
session_start();
session_regenerate_id(true);

if(isset( $_COOKIE['auto_login'])) {
    require('dbconnect.php');
    $auto_login_key = $_COOKIE['auto_login'];

    $stmt = $db->prepare('SELECT email FROM auto_login WHERE auto_login_key=?');
    $stmt->execute(array($auto_login_key));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if($data) {
        $email = $data['email'];
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
                    <?php if(isset($_SESSION['id'])): ?>
                        <li class="breadcrumb-item"><a href="../twitter_app/post.php">post</a></li>
                    <?php endif; ?>
                    <li class="breadcrumb-item"><a href="../twitter_app/registration.php">sign up</a></li>
                    <li class="breadcrumb-item"><a href="../twitter_app/logout.php">sign out</a></li>
                </ol>
            </nav>
        </header>

        <h2>ログイン</h2>

        <form id="twitter" action="login_check.php" method="post" class="needs-validation">
            <div class="form-group">
                <label for="email">Eメールアドレス</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Eメールアドレス" value="<?php if(isset($_COOKIE['auto_login'])) { print($email); } ?>" onchange="emailCheck();">
                <small class="text-muted">記入例：kenta.watanabe@tokyo.supersoftware.co.jp</small>
                <div class="invalid-feedback">
                    正しく入力ください
                </div>
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="パスワード" onchange="passwordCheck();">
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
    <script src="../twitter_app/validation.js"></script>
</body>
</html>