<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
echo "Lesson11<br>

Вычислить квадраты чисел

Дано натуральное число n. Вычислить: 1<syp>1</sup> + 22 + .. + nn. 
Вывести на экран квадраты этих чисел, а также сумму квадратов этих чисел.<br><br>";

$number = $_POST['number'];
$res = 0;
$print = 0;
for($i = 1; $i <= $number;$i++){
    $res += ($i ** $i);
    $lol = $i**$i;
    echo $i.' в степени '.$i.' = '.$lol.'<br>';
}
echo '<br>',$res;

}
?>