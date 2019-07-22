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
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">投稿内容の入力</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="こちらに入力ください"></textarea>
                </div>
                <div class="form-group">
                    <label for="File">画像投稿</label>
                    <input type="file" id="File">
                </div>
            </form>
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">投稿</button>
            </div>
        </div>

        
    </div>
</body>
</html>