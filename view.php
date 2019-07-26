<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>

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
                    <?php if(isset($_SESSION['id'])): ?>
                        <li class="breadcrumb-item"><a href="../twitter_app/post.php">post</a></li>
                    <?php endif; ?>
                    <li class="breadcrumb-item"><a href="../twitter_app/registration.php">sign up</a></li>
                    <li class="breadcrumb-item"><a href="../twitter_app/logout.php">sign out</a></li>
                </ol>
            </nav>
        </header>

        <h2>投稿一覧</h2>

        <div class="text-right">
            <button type="button" class="btn btn-primary rounded-pill btn-lg"><a href="post.php" id="postBtn">投稿する</a></button>
        </div>

        <div class="card" style="width: auto;">
            <img class="card-img-top" src="../twitter_app/images/test1.jpg"　alt="images/test1.jpg">
                <div class="card-body">
                    <p class="card-text">カードのタイトルに基づいて、カードのコンテンツの大部分を占める簡単なサンプルテキスト。</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">コメント</li>
                    <li class="list-group-item">コメント</li>
                    <li class="list-group-item">コメント</li>
                </ul>
                <div class="card-body">
                    <a class="btn btn-primary" href="#" role="button">Reply</a>
                    <a class="btn btn-primary" href="#" role="button">Like</a>
                    <a class="btn btn-primary" href="#" role="button">Delete</a>
                </div>
        </div>

    </div>
</body>
</html>