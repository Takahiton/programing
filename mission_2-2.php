<form method="post" action="<?php print($_SERVER['PHP_SELF']) ?>">

<input type="text" name="name" value""/>
<input type="text" name="textbox" value""/>
<input type="submit" value="送信"/>

</form>

<?php
$name=$_POST ['name'];
$textbox=$_POST ['textbox'];

$file_text=file_get_contents("kadai2-2.txt");

$array=explode("\n",$file_text);
$spa="<>";
$total=count($array);

$str = $total.$spa.$name.$spa.$textbox.$spa.date('H時i分')."\n";

if($name && $textbox)
{$fp = fopen("kadai2-2.txt", "a");
          fwrite($fp,$str);
          fclose($fp);
          print"書き込み完了しました。";
}

?>