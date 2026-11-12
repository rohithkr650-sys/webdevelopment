<?php
$names=array(
"s1"=>"adhi",
"s2"=>"fadi",
"s3"=>"theerthi",
"s4"=>"kavyi");
echo"<center>";
echo"<h2>Original student list</h2>";
echo"<pre>";
print_r($names);
echo"</pre>";
asort($names);
echo"<h2>Ascending order</h2><br>";
echo"<pre>";
print_r($names);
echo"</pre>";
arsort($names);
echo"<h2>Descending order</h2><br>";
echo"<pre>";
print_r($names);
echo"</pre>";
echo"</center>";
?>


