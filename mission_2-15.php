<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>mission_2-15</title>
</head>
<body>
<form method="post" action=mission_2-15.php>
  名前<br />
  <input type="text" name="name" size="30" value="" /><br />
  コメント<br />
  <textarea name="textbox" cols="30" rows="5"></textarea><br />
  <br />
  <input type="submit" value="登録する" />
</form>
</body>
</html>

<?php

$name=$_POST ['name'];

$textbox=$_POST ['textbox'];

//mysql:dbname=データベース;host=ホスト//パスワード

$mysql='mysql:dbname=データベース;host=ホスト';
$username='ユーザー名';
$pass='パスワード';
try{
    $pdo = new PDO($mysql,$username,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//接続できなければ終了する
if($pdo == null){
	print('接続に失敗しました<br>');}
   else{
	print('接続に成功しました<br>');}

//PDOでINSERT文を使ってMySQLにデータを挿入

$sql ="INSERT INTO log(no,name,comment)VALUES('4','$name','$textbox')";

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