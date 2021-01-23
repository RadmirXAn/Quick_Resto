<?php

//Создаем массив
$arr = [];

//Заполняем массив числами
for($i=0;$i<10;$i++){
    $arr[]=$i;
}

//Поиск индекса элемента в массиве
function searchNumberIndex(int $num, array $arr, int $startIndex, int $endIndex):int{
    $index = $startIndex + ($endIndex - $startIndex)/2;
    if($num == $arr[$index]){
        return $index;
    }else if($startIndex==$endIndex){
        //Означает что значени не найдено
        return -1;
    }else{
        if($num < $arr[$index]){
            $endIndex = $index;
        }else{
            $startIndex = $index;
        }
        //Функция вызвает себя. Называеться рекурсия.
        $index = searchNumberIndex($num, $arr, $startIndex, $endIndex);
    }
    return $index;
}

//Выводим индекс элемента
echo searchNumberIndex( 1, $arr, 0, count($arr) );

?>