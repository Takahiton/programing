<?php
///データベースへの接続

//mysql:dbname=データベース;host=ホスト//パスワード

$mysql='mysql:dbname=データベース;host=ホスト';
$username='ユーザー名';
$pass='パスワード';
$pdo = new PDO($mysql,$username,$pass);
//DBへ接続
try{
    $pdo = new PDO($mysql,$username,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    print('<br>');
//接続できなければ終了する    
if($pdo == null){
    	print('接続に失敗しました。<br>');
	exit;
    }else{
	print('接続に成功しました。<br>');
}
//tableを作成
$sql='CREATE TABLE co_311_it_3919_com.log
	(no      int(10),
 	name    varchar(80),
 	comment varchar(80),
        PRIMARY KEY (no));';
$result= $pdo->query($sql);
if(!$result)
	{echo
	'<p>テーブルが作成されませんでした。</p>';
	}else{
	'<p>テーブルを作成されました。</p>';
}
}catch(PDOException $e){
   print('Error:'.$e->getMessage());
   die();
};
$pdo=null;
?>