<?php
session_start();

if(isset($_SESSION['file_error']) == '1') {
    $message = '正常に画像がアップロードされませんでした';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>post</title>

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
                    <li class="breadcrumb-item active" aria-current="page">post</a></li>
                    <li class="breadcrumb-item"><a href="../twitter_app/registration.php">sign up</a></li>
                    <li class="breadcrumb-item"><a href="../twitter_app/logout.php">sign out</a></li>
                </ol>
            </nav>
        </header>

        <h2>投稿フォーム</h2>
        
        <div class="form-group">
            <form action="post_check.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="textarea">投稿内容の入力</label>
                    <textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="こちらに入力ください"><?php if(isset($_SESSION['text_error'])) print $_POST['textarea']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="file">画像投稿</label>
                    <input type="file" id="file" name="file">
                    <?php if(isset($_SESSION['file_error'])): ?>
                        <div class="error">
                            <?php print($message); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">投稿</button>
                </div>
            </form>
        </div>

        
    </div>
</body>
</html>