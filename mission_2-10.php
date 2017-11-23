<?php
//show create tableを利用
///データベースへの接続

//mysql:dbname=データベース;host=ホスト//パスワード

$mysql='mysql:dbname=データベース;host=ホスト';
$username='ユーザー名';
$pass='パスワード';
try{
    $pdo = new PDO($mysql,$username,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
if($pdo == null){
	print('接続に失敗しました<br>');}
   else{
	print('接続に成功しました<br>');}
$sql = 'show create table co_311_it_3919_com.customerdb';

$result =$pdo->query($sql);

foreach($result as $row){

print($row[0]);
print($row[1]);
print($row[2]);
print($row[3]);

echo'<br>'."\n";}

;}catch(PDOException $e){
   print('Error:'.$e->getMessage());
   die();
}
?>