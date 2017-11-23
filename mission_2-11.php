<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>mission_2-11</title>
<body>

</html>

<?php

//PDOでINSERT文を使ってMySQLにデータを挿入してみよう！

//mysql:dbname=データベース;host=ホスト//パスワード

$mysql='mysql:dbname=データベース;host=ホスト';
$username='ユーザー名';
$pass='パスワード';
//データベースへの接続

//mysql:dbname=データベース;host=ホスト//パスワード

$mysql='mysql:dbname=データベース;host=ホスト';
$username='ユーザー名';
$pass='パスワード';;
try{
    $pdo = new PDO($mysql,$username,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//接続できなければ終了する
if($pdo == null){
	print('接続に失敗しました<br>');}
   else{
	print('接続に成功しました<br>');}

$sql ="INSERT INTO log(no,name,comment)VALUES('1','nonaka','よろしくお願いします。')";

$result = $pdo->query($sql);

foreach($result as $row){

print_r($row);

echo'<br>';}

;}catch(PDOException $e){
   print('Error:'.$e->getMessage());
   die();
}
$pdo=null;

?>

</body>
</html>