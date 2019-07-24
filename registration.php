<?php
session_start();
$message1 = null;
$message2 = null;
$message3 = null;

$username = null;
$password = null;
$email = null;

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

if(isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
}

if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}

if(isset($_SESSION['username_error']) == '1') {
    $message2 = '正しく入力ください';
}
if(isset($_SESSION['email_error']) == '1') {
    $message1 = '正しく入力ください';
}
if(isset($_SESSION['email_error']) == '2') {
    $message1 = 'すでに登録済のメールアドレスです';
}
if(isset($_SESSION['password_error']) == '1') {
    $message3 = '正しく入力ください';
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
                    <li class="breadcrumb-item"><a href="../twitter_app/login.php">sign in</a></li>
                    <li class="breadcrumb-item"><a href="../twitter_app/post.php">post</a></li>
                    <li class="breadcrumb-item active" aria-current="page">sign up</a></li>
                    <li class="breadcrumb-item"><a href="../twitter_app/logout.php">sign out</a></li>
                </ol>
            </nav>
        </header>

        <h2>新規登録</h2>

        <form id="twitter" action="regist_check.php" method="post" class="needs-validation" novalidate>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Eメール</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Eメール" required value="<?php print($email); ?>" onchange="emailCheck();">
                        <?php if(isset($_SESSION['email'])): ?>
                            <div class="error">
                                <?php print($message1); ?>
                            </div>
                        <?php endif; ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="password">パスワード</label>
                        <input type="password" class="form-control"  id="password" name="password" placeholder="パスワード" required value="<?php print($password); ?>" onchange="passwordCheck();">
                            <div class="caption">
                                ※パスワードは8文字以上で登録ください
                            </div>
                        <?php if(isset($_SESSION['password'])): ?>
                            <div class="error">
                                <?php print($message3); ?>
                            </div>
                        <?php endif; ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="username">ユーザー名</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="inputGroupPrepend" required value="<?php print($username); ?>" onchange="nameCheck();">
                            <div class="caption">
                                ※ユーザー名は4文字以上で登録ください
                            </div>
                        <?php if(isset($_SESSION['username'])): ?>
                            <div class="error">
                                <?php print($message2); ?>
                            </div>
                        <?php endif; ?>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">登録</button>
        </form>
    </div>
    <script src="../twitter_app/validation.js"></script>
</body>
</html>