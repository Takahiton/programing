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

$sql = 'SELECT no, name, comment FROM log';//クエリ

$result = $pdo->query($sql);//実行・結果取得

//出力

foreach($result as $row){

print($row['no']);
print($row['name']);
print($row['comment']);

}
;}catch(PDOException $e){
   print('Error:'.$e->getMessage());
   die();
}

$pdo=null;
?>
