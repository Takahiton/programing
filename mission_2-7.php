<?php
//データベースへの接続

//mysql:dbname=データベース;host=ホスト//パスワード

$mysql='mysql:dbname=データベース;host=ホスト';
$username='ユーザー名';
$pass='パスワード';

try{
    $pdo = new PDO($mysql,$username,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    print('接続に成功しました');
}catch(PDOException $e){
   print('Error:'.$e->getMessage());
   die();
}

$pdo=null;

?>
