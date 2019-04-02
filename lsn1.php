<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "Lesson 1 <br>
    Вам нужно разработать программу, которая считала бы сумму цифр
    числа введенного пользователем. Например: есть число 123, то 
    программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
    По желанию можете сделать проверку на корректность введения 
    данных пользователем.<br><br>";
    
    $text = $_POST['text'];
    echo "Text: ", $text,"<br/>";

    $arr = str_split($text);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    echo "<br>";
    echo array_sum($arr);

    echo "<br>Lesson2<br>";
    print_r (array_count_values($arr));
}


?>