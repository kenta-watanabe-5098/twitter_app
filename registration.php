<?php
require('dbconnect.php');
$error = [];

if(isset($_POST['username']) && $_POST['username'] == '' && mb_strlen($_POST['username']) < 3) {
    $error['username'] = 1;
}
if(isset($_POST['password']) && $_POST['password'] == '' && mb_strlen($_POST['password']) < 7) {
    $error['password'] = 1;
}
if(isset($_POST['email']) && $_POST['email'] == '') {
    $error['email'] = 1;
} 


if(!empty($_POST) && $error == []) {
    $name = htmlspecialchars($_POST['username'], ENT_QUOTES);
    $pass = htmlspecialchars($_POST['password'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $pass = hash('sha256', $pass);

    $stmt = $db->prepare('SELECT email FROM members WHERE email=?');
    $stmt->execute([$email]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);


    if($data) {
        $error['email'] = 2;
    } else {
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
                    <li class="breadcrumb-item"><a href="../twitter_app/login.php">sign in</a></li>
                    <li class="breadcrumb-item"><a href="../twitter_app/post.php">post</a></li>
                    <li class="breadcrumb-item active" aria-current="page">sign up</a></li>
                    <li class="breadcrumb-item"><a href="../twitter_app/logout.php">sign out</a></li>
                </ol>
            </nav>
        </header>

        <h2>新規登録</h2>

        <form id="twitter" action="" method="post" class="needs-validation" novalidate>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Eメール</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Eメール" required value="<?php if(isset($_POST['email'])) { print($_POST['email']);} ?>" onblur="emailCheck();">
                        <?php if(isset($error['email']) && $error['email'] === 1): ?>
                            <div class="error">
                                正しく入力ください
                            </div>
                        <?php endif; ?>
                        <div class='error'>
                            <?php if(isset($error['email']) && $error['email'] === 2) { print('すでに登録済みのメールアドレスです'); } ?>
                        </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="password">パスワード</label>
                        <input type="password" class="form-control"  id="password" name="password" placeholder="パスワード" required value="<?php if(isset($_POST['password'])) { print($_POST['password']);} ?>" onblur="passwordCheck();">
                            <div class="caption">
                                ※パスワードは8文字以上で登録ください
                            </div>
                        <?php if(isset($error['password']) && $error['password'] > 0): ?>
                            <div class="error">
                                正しく入力ください
                            </div>
                        <?php endif; ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="username">ユーザー名</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="inputGroupPrepend" required value="<?php if(isset($_POST['username'])) { print($_POST['username']);} ?>" onblur="nameCheck();">
                            <div class="caption">
                                ※ユーザー名は4文字以上で登録ください
                            </div>
                        <?php if(isset($error['username']) && $error['username'] > 0): ?>
                            <div class="error">
                                ユーザー名を入力してください
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