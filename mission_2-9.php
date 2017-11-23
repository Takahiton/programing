<?php
//データベースへの接続

//mysql:dbname=データベース;host=ホスト//パスワード

$mysql='mysql:dbname=データベース;host=ホスト';
$username='ユーザー名';
$pass='パスワード';
//DBへ接続
try{
   $pdo = new PDO($mysql,$username,$pass);
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//接続できなければ終了する 
if($pdo == null){
	print('接続に失敗しました<br>');}
   else{
	print('接続に成功しました<br>');}

//tableを表示する
$sql = 'SHOW TABLES FROM co_311_it_3919_com';

$result = $pdo->query($sql);

foreach($result as $row){

print_r($row);

echo '<br>';}

}catch(PDOException $e){
   print('Error:'.$e->getMessage());
   die();
}

$pdo=null;
?>