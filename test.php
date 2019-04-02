<?php
echo <<<END
<p>Для отображения большого<br> количества текста используют 
синтаксис heredoc</p>
END;
echo "Для обчного вывода текста используют оператор: echo 'text'";
//комментарий в одну строчку
/*комментарий для
нескольких строк*/
#снова коммент в одну строку
echo '<br>Переменные($nameVariable)<br>';
$banana = 29;//banan
$orange = 76;
$sum = $banana + $orange;
echo "Sum:", $sum;
define("pi", 3.14);

echo "<br>Мат. константа Пи равна - ", pi,"<br>";

$arr = array("php","css","html");
foreach($arr as $value)
{
    echo "Tutorial : $value<br>";
}

$arr2 = [165, "text", 878, "this", 85, "text"];
foreach ($arr2 as $value)
{
    echo "Mas: {$value}<br>";
}

$arr2[0] = "TEXT";
echo "<br>";
foreach ($arr2 as $value)
{
    echo "mas :{$value}<br>";
}
echo "<br>";
//echo "$arr2[2]";

for ($a = 0; $a < 6; $a++)
{
    echo $arr2[a];
}
echo "<br>";
$arr3 = ["Text1","Text2", "Text3"];
unset($arr3[1]);
foreach ($arr3 as $value)
{
    echo "lol: {$value}<br>";
}
print_r($arr2);
echo "<br>";
print_r($arr3);
?>
