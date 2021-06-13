<?php

include 'Circle1.php';
include 'Cylinder1.php';
$circle=new Circle1(10,'red');
echo 'chu vi :'.$circle->circlePerimeter();
echo '<br>dien tich :'.$circle->circleArea();
echo '<br>mau :'.$circle->getColor();
$cylinder=new Cylinder1(10,'red',20);
echo '<br>';
echo '<br>dien tich xug quanh :'.$cylinder->surroundingArea();
echo '<br>dien tich toan phan :'.$cylinder->totalArea();
echo '<br>mau :'.$cylinder->getColor();