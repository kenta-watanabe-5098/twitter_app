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
                    <li class="breadcrumb-item active" aria-current="page">home</a></li>
                    <li class="breadcrumb-item"><a href="../twitter_app/login.php">sign in</a></li>
                    <li class="breadcrumb-item"><a href="../twitter_app/post.php">post</a></li>
                    <li class="breadcrumb-item"><a href="../twitter_app/registration.php">sign up</a></li>
                    <li class="breadcrumb-item"><a href="../twitter_app/logout.php">sign out</a></li>
                </ol>
            </nav>
        </header>


        <h2>投稿一覧</h2>

        <div class="text-right">
            <button type="button" class="btn btn-primary rounded-pill btn-lg"><a href="post.php" id="postBtn">投稿する</a></button>
        </div>

        
        <div class="card-group">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <a href="view.php" data-toggle="tooltip" title="投稿詳細を開く">
                            <img src="../twitter_app/images/test1.jpg" class="card-img-top" alt="images/test1.jpg">
                        </a>
                                <div class="card-body px-2 py-3">
                                    <p class="card-text">【コメント】テストコメント</p>
                                    <a class="btn btn-primary" href="../twitter_app/comment.php" role="button">Reply</a>
                                    <a class="btn btn-primary" href="#" role="button">Like</a>
                                    <a class="btn btn-primary" href="#" role="button">Delete</a>
                                </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <a href="view.php" data-toggle="tooltip" title="投稿詳細を開く">
                            <img src="../twitter_app/images/test1.jpg" class="card-img-top" alt="images/test1.jpg">
                        </a>
                                <div class="card-body px-2 py-3">
                                    <p class="card-text">【コメント】テストコメント</p>
                                    <a class="btn btn-primary" href="../twitter_app/comment.php" role="button">Reply</a>
                                    <a class="btn btn-primary" href="#" role="button">Like</a>
                                    <a class="btn btn-primary" href="#" role="button">Delete</a>
                                </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <a href="view.php" data-toggle="tooltip" title="投稿詳細を開く">
                            <img src="../twitter_app/images/test1.jpg" class="card-img-top" alt="images/test1.jpg">
                        </a>
                                <div class="card-body px-2 py-3">
                                    <p class="card-text">【コメント】テストコメント</p>
                                    <a class="btn btn-primary" href="../twitter_app/comment.php" role="button">Reply</a>
                                    <a class="btn btn-primary" href="#" role="button">Like</a>
                                    <a class="btn btn-primary" href="#" role="button">Delete</a>
                                </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <a href="view.php" data-toggle="tooltip" title="投稿詳細を開く">
                            <img src="../twitter_app/images/test1.jpg" class="card-img-top" alt="images/test1.jpg">
                        </a>
                                <div class="card-body px-2 py-3">
                                    <p class="card-text">【コメント】テストコメント</p>
                                    <a class="btn btn-primary" href="../twitter_app/comment.php" role="button">Reply</a>
                                    <a class="btn btn-primary" href="#" role="button">Like</a>
                                    <a class="btn btn-primary" href="#" role="button">Delete</a>
                                </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>
</html>