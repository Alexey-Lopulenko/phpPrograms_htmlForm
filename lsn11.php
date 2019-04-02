<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
echo "Lesson11<br>
Определить название года за китайским календарем

Составить программу, которая бы по заданному числу выводила его название по китайском календаре. 
Заданное число не может быть меньше 1924. ";
$number = $_POST['number'];

$number0 = ($number - 1924) / 12; 
$res = $number0 * 100;
$res2 = $res % 100;

echo '<br>', $number;
echo '<br>Год - ';
switch ($res2) {
    case '0':
        echo ' крысы.';
        break;
    case '8':
        echo ' быка.';
        break;
    case '16':
        echo ' тигра.';
        break;
    case '25':
        echo ' кролика.';
        break;
    case '33':
        echo ' дракона.';
        break;
    case '41':
        echo ' змеи.';
        break;
    case '50':
        echo ' лошади.';
        break;
    case '58':
        echo ' козы.';
        break;
    case '66':
        echo ' обезьяны.';
        break;
    case '75':
        echo ' петуха';
        break;
    case '83':
        echo ' собаки.';
        break;
    case '91':
        echo ' свиньи.';
        break;
    default:
        echo 'Zalupa';
        break;
}

}
?>