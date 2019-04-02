<?php
echo "Lesson4<br>Ваше задание — создать массив, 
наполнить его случайными значениями (можно использовать функцию rand),
найти максимальное и минимальное значение массива и поменять их местами.<br><br>";


for($i = 0; $i < 20; $i++){
    $arr[$i] = rand(5,100); 
   
}
$size = count($arr);

$max = $arr[0];
$min = $arr[0];

for($i = 0;$i < $size; $i++){
    if($arr[$i] > $max){
    $max = $arr[$i];
    $svp_max = $i;
    }
}

for($i = 0;$i < $size; $i++){
    if($arr[$i]< $min){
    $min = $arr[$i];
    $svp_min = $i;
  }
}

echo "<br>Min :", $min, "<br>Max :", $max;

echo "<br>Mass 1: ";
foreach($arr as $value){
    echo $value,", ";
}

list($arr[$svp_max], $arr[$svp_min]) = array($arr[$svp_min] , $arr[$svp_max]);
echo "<br>Mass 2: ";
foreach($arr as $value){
    echo $value,", ";
}

?>