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

//UPDATE文を実行
	$sql="UPDATE log SET name ='taka',comment = 'よろしくお願いします。' where no = '1'";
	$result=$pdo->query($sql);
	if(!$result){
	echo"SQL実行時エラー";
	exit;
	}
	
	$mysql='SELECT no, name, comment FROM log';
	
	$res=$pdo->query($mysql);

foreach($res as $row){

print($row[0]);
print($row[1]);
print($row[2]);

echo'<br>';}

;}catch(PDOException $e){
   print('Error:'.$e->getMessage());
   die();
}

$pdo=null;

?>