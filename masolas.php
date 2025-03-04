<?php
$tombbe =array("c", "i" , "g", "á", "n", "y");
$tombki=array("","","","","","","");

$betu = "A";
$indexmax = count($tombbe)-1;

for($i=0;$i<=$indexmax; $i++)
{
    $tomki[$i]= $tombbe[$i].$betu;
    $tombki[$i]=$tombki[$i].$tombki[$i];

}
print_r($tombbe);
echo"<br>";
print_r($tombki);
echo"<br>";