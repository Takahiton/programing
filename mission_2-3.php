<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>mission_2-3</title>
</head>
<body>
<form method="post" action=mission_2-3.php>
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

$file_text=file_get_contents("kadai2-2.txt");

$array=explode("\n",$file_text);

$total=count($array);

$spa="<>";

$str = $total.$spa.$name.$spa.$textbox.$spa.date('Y年m月d日H時i分')."\n";

if($name && $textbox)
{$fp = fopen("kadai2-2.txt", "a");
          fwrite($fp,$str);
          fclose($fp);
          print"書き込み完了しました。";
}

$test="kadai2-2.txt";

$hyouji=file($test);

foreach($hyouji as $val)

{
$data=explode("<>",$val);

echo'<p>';

foreach($data as $coment){print_r($coment);}

echo'</p>';}

?>
