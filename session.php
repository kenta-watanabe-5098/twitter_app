<?php
/*--------------------------------------------------
オートログイン　セットアップ
--------------------------------------------------*/
function setup_auto_login( $email )
    {
        $cookieName = 'auto_login';
        $auto_login_key = sha1( uniqid() . mt_rand( 1,999999999 ) . '_auto_login' );
        $cookieExpire = time() + 3600 * 24 * 7; // 7日間
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        
        $dsn = 'mysql:dbname=db_twitter;host=localhost;charset=utf8';
        $root = 'root';
        $pwd = 'root';
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $sql = "INSERT INTO auto_login ( email , auto_login_key )VALUES (?, ?)";

        $db_cookie = new PDO($dsn, $root, $pwd, $options);
        $stmt_cookie = $db_cookie->prepare($sql);
        $stmt_cookie->execute(array($email, $auto_login_key));
        
        setcookie( $cookieName, $auto_login_key, $cookieExpire, $cookiePath, $cookieDomain );
    
    }

/*--------------------------------------------------
オートログイン　デリート
--------------------------------------------------*/
function delete_auto_login( $auto_login_key = '' )
    {
        $dsn = 'mysql:dbname=db_twitter;host=localhost;charset=utf8';
        $root = 'root';
        $pwd = 'root';
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $sql = "DELETE FROM auto_login WHERE auto_login_key=?";

        $db_delete = new PDO($dsn, $root, $pwd, $options);
        $stmt_delete = $db_delete->prepare($sql);
        $stmt_delete->execute(array($auto_login_key));
        
        $cookieName = 'auto_login';
        $cookieExpire = time() - 1800;
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        
        setcookie( $cookieName, $auto_login_key, $cookieExpire, $cookiePath, $cookieDomain );
    }

/*--------------------------------------------------
ログイン　ID/PW　記憶
--------------------------------------------------*/
function memory_login()

?>