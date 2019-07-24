<?php
$post =array('1', '2', 'テスト', 'テスト2');
// var_dump($post);
// exit();

$php_json = json_encode($post);
echo($php_json);
// $php_json = [];
// for($i=0; $i<count($post); $i++) {
//     for($j=0; $j<5; $j++) {
//          $php_json[] = $post[$i][$j];
//     }
// }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue"></script>
    <title>メッセージ一覧</title>
</head>
<body>
    <header>
        <h1>掲示板</h1>
    </header>

    <hr>
    <div id="blog-post-demo">
      <blog-post
        v-for="post in posts"
        v-bind:key="post.id"
        v-bind:post="post"
      ></blog-post>
    </div>

    <!-- <form action="" method="post">
    <input type="text" name="text">
    <input type="text" name="text2">
    <input type="submit" value="送信">
    </form> -->

    <!-- <div id="blog-posts-events-demo">
      <div :style="{ fontSize: postFontSize + 'em' }">
        <post-list
          v-for="post in posts"
          v-bind:key="post.id"
          v-bind:post="post"
        ></post-list>
      </div>
    </div> -->
    <script>
    var list = <?php echo $php_json; ?>;
    </script>
    <script src="../../s_src/twitter_app/common.js">
    </script>
</body>
</html>