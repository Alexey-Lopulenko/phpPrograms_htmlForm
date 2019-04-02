<?php
echo "Lesson6<br>Вашим заданием будет 
создание сокращенного варианта ФИО.
Например, вводим: Иванов Иван Петрович, 
а в результате должны получить: Иванов И. П.<br><br><br>";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $text = $_POST['text'];
    echo $text, "<br>";
   
    
    /*$arr = str_split($text);
    $arr2 =[];
    $size = count($arr);
    
    $a = 0;
    while($arr[$a] != " "){
        array_push($arr2, $arr[$a]);
        $a++;
    }
    for($i = 1;$i < $size; $i++){
        if(ctype_upper($arr[$i])){//если элемент в верхнем регистре
            array_push($arr2," ", $arr[$i],".");//добавить в конец массива 
        }
    }

    print_r($arr);
    echo "<br>";
   foreach($arr2 as $value){
       echo $value;
   }*/
   $arr = explode(' ',$text);
   echo $arr[0].' '.$arr[1][0].'.'.$arr[2][0].'.';
}
?>