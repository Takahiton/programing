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
