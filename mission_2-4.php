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