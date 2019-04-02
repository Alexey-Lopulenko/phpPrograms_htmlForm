<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
echo "Lesson8<br>
Проверить високосный ли год
Вам нужно разработать программу, которая проверяла бы введенное пользователем число (год).
Число может быть в диапазоне от 1 до 9999.
<br><br> ";
$number = $_POST['number'];

$arrEnd = (int)$number % 10;
if($arrEnd == 4||$arrEnd==8||$arrEnd==2||$arrEnd==0 ||$arrEnd==6){
    echo "Leap year .";
}
else echo "Not leap year.";

}
?>