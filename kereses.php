<?php
$tomb = array(8, 2, 5, 3, 7);
$indexMax=count($tomb)-1;
$elemszam = count($tomb);
print($indexMax);
print_r($tomb);
$keresettelem =5;
$i =0;
while($i<($elemszam) && ($tomb[$i]!= $keresettelem))
{
    $i++;
}
if($i<$elemszam)
{
    print("elem megtalálva /n");
    print("indexe:/n". $i );
}
else
{
    print("nem található meg a:". $keresettelem. "szám");
}