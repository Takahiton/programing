<form method=post action="<?php print($_SERVER['PHP_SELF']) ?>">

<input type="text" name="name" value""/>
<input type="text" name="textbox" value""/>
<input type="submit" value="送信"/>

</form>

<?php

$fp = fopen("kadai6.txt", "a");

fwrite($fp,$_POST ['name']."\n") ;
fwrite($fp,$_POST ['textbox']."\n");

fclose($fp);

?>