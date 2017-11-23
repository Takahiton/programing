<?php
//データベースへの接続

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

//DELETE文を実行

	$sql="delete from log where no = 1";
	$result=$pdo->query($sql);
	if(!$result){
	echo"SQL実行時エラー";
	exit;
	}else{
	echo"削除に成功しました。";}

;}catch(PDOException $e){
   print('Error:'.$e->getMessage());
   die();
}

?>