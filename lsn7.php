<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
echo "Lesson7<br>Разработайте программу, которая определяла количество прошедших часов
    по введенным пользователем градусах. Введенное число может быть от 0 до 360.<br><br>";
$number = $_POST['number'];
echo "<br>Degrees:", $number;

$res = $number/30;
echo "<br>Result:",$res,"<br>";
}
?>