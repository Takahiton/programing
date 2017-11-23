<form method=post action="<?php print($_SERVER['PHP_SELF']) ?>">

<input type="text" name="name" value""/>
<input type="text" name="mail" value""/>
<input type="text" name="comments" value""/>
<input type="submit" value="‘—M"/>


</form>

<?php 

$filename ='kadai5.txt';
//echo $filename;

$fp = fopen($filename, 'w');

fwrite($fp,$_POST['name']);

fwrite($fp,$_POST['mail']);

fwrite($fp,$_POST['<comments>']);

fclose($fp);

?>