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
        
        // $dsn = 'mysql:dbname=db_twitter;host=localhost;charset=utf8';
        // $root = 'root';
        // $pwd = '';
        // $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $sql = "INSERT INTO auto_login ( email , auto_login_key )VALUES (?, ?)";

        // $db= new PDO($dsn, $root, $pwd, $options);
        $stmt = $db->prepare($sql);
        $stmt->execute(array($email, $auto_login_key));
        
        setcookie( $cookieName, $auto_login_key, $cookieExpire, $cookiePath, $cookieDomain );
        $db = null;
    }

/*--------------------------------------------------
オートログイン　デリート
--------------------------------------------------*/
function delete_auto_login()
    {
        $cookieName = 'auto_login';
        $cookieExpire = time() - 1800;
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        
        setcookie( $cookieName, $auto_login_key, $cookieExpire, $cookiePath, $cookieDomain );
    }

/*--------------------------------------------------
ログイン　ID/PW　記憶
--------------------------------------------------*/
?>