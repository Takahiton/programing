<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>mission_2-6</title>
</head>
<body>
<form method="post" action=mission_2-6.php
  pass word<br />
  <input type="name" name="pass" value="" /><br />
  <input type="submit" value="ログイン" />
</form>
</body>
</html>

<?php

$pass = 115319;

$form_pass=$_POST['pass'];

if($pass==$form_pass){print"ログイン成功！";}

else{print"ログイン失敗…";exit;}

?>

削除フォーム
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>mission_2-4</title>
</head>
<body>
<form method="post" action=mission_2-4.php>
  削除する番号<br />
  <input type="number" name="number" size="1" value="" /><br />
  <input type="submit" value="削除する" />
</form>
</body>
</html>

<?php
$num=$_POST['number'];
$file_text=file_get_contents("kadai2-2.txt");

$array=explode("\n",$file_text);

$total=count($array);

if($num){$data=file("kadai2-2.txt");

$fp=fopen("kadai2-2.txt","w");}

print_r($file_text);

foreach($data as $line)
{
	$temp=explode("<>",$line);
	list($number,,,)=$temp;
	if($number <> $num)
	{
	fwrite($fp,$line);
	print"削除完了しました。";}
}
fclose($fp)
?>
編集フォーム
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>mission_2-5</title>
</head>
<body>
<form method="post" action="<?php echo($_SERVER['PHP_SELF']) ?>">
  編集する番号<br />
  <input type="number" name="number" size="1" value="" /><br />
  名前<br />
　<input type="name" name="name" size="10" value="" /><br />
  コメント<br />
　<input type="comment" name="comment" size="30" value=""/><br />
　<input type="submit" value="編集する" />
</form>
</body>
</html>

<?php
$num=$_POST['number'];
$file_text=file_get_contents("kadai2-2.txt");
$comment=$_POST['comment'];
$name=$_POST['name'];

$array=explode("\n",$file_text);
$total=count($array);

if($num){$data=file("kadai2-2.txt");

$fp=fopen("kadai2-2.txt","w");}

print_r($file_text);

$spa="<>";

$str = $num.$spa.$name.$spa.$comment.$spa.date('Y年m月d日H時i分')."\n";

foreach($data as $line)
{
	$temp=explode("<>",$line);
	list($number,,,)=$temp;
	
	if($number <> $num)
	{
	fwrite($fp,$line);
	print"編集しませんでした。";
	}

	if($number == $num)
	{
	fwrite($fp,$str);
	print"編集完了しました。";
	}
}
fclose($fp)
?>
