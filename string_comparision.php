<?php

$str1 = $_POST['str1'];
$str2 = $_POST['str2'];
for($i = 0; $i < strlen($str1); )
{
    if(($pos = strpos($str2, $str1[$i])) !== false)
    {
        $str1 = substr($str1, 0, $i) . substr($str1, $i + 1);
        $str2 = substr($str2, 0, $pos) . substr($str2, $pos + 1);
        continue;
    }
    $i++;
}

echo 'OUTPUT 1 : '.$str1."\n";
echo 'OUTPUT 2 : '.$str2;
echo 'OUTPUT 3 : '.$str2;
echo 'OUTPUT 3 : '.$str2;
?>