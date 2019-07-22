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

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Eメール</label>
                    <input type="email" class="form-control is-invalid" id="email" placeholder="Eメール" required>
                    <div class="invalid-feedback">
                        正しく入力ください
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="password">パスワード</label>
                    <input type="password" class="form-control is-invalid"  id="password" placeholder="パスワード" required>
                    <div class="invalid-feedback">
                        正しく入力ください
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="username">ユーザー名</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                            </div>
                            <input type="text" class="form-control is-invalid" id="username" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                ユーザー名を入力してください
                            </div>
                        </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        保存する
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">登録</button>
        </form>
    </div>
</body>
</html>