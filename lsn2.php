<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "Lesson 2 <br>Вам нужно разработать программу,
    которая считала бы количество вхождений какой-нибуть 
    выбранной вами цифры в выбранном вами числе.
    Например: цифра 5 в числе 442158755745 
    встречается 4 раза<br><br>";
    
    $text = $_POST['text'];
    $text2 = $_POST['text2'];
    echo "Text: ", $text,"<br/>";
    
    $arr = str_split($text);
    $arr2 = array_count_values($arr);

    echo "<br>The number {$text2} is repeated:", $arr2[$text2]," times.";  
}
?>