<?php

echo $_SERVER['DOCUMENT_ROOT'];
echo '<br>'.$_SERVER['QUERY_STRING'];
echo '<br>'.$_SERVER['REQUEST_TIME'];
echo '<br>'.$_SERVER['PHP_SELF'].'<br>';

$file_pointer=$_SERVER['PHP_SELF'];
$array = explode("/", $file_pointer);

echo $array[count($array)-1];
?>