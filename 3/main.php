<?php
function unique_marray($arr) { //Аналог array_unique() для многомерных массивов
    $temp = [];
    foreach ($arr as $subArr) {
        $temp[implode("," , $subArr)] = $subArr;
    }
    return array_values($temp);
}

function readimage() {     
    echo "Введите X и Y: ";
    fscanf(STDIN, "%d %d", $x, $y);
    echo "Введите имя файла: ";
    $filen = fgets(STDIN);
    $filen = trim($filen);
    if ($x > 32 || $y > 2000) {return "Неверный размер";}   //Выполнение условий задачи
    $file = fopen($filen, "r");
    $matrix = [];
    
    while ($line = fgets($file)) {
        $matrix[] = str_split(trim($line));
    }

    fclose($file);

    return [$matrix, $x, $y+1];
}
function findBounds($matrix, $x, $y) { 
    $min_x = $x;
    $max_x = 0;
    $min_y = $y;
    $max_y = 0;

    // Поиск минимальных и максимальных границ фигуры
    for ($i = 0; $i < $y; $i++) {
        for ($j = 0; $j < $x; $j++) {
            if (isset($matrix[$i][$j])) {
                if ($matrix[$i][$j]== 1) {
                    $min_x = min($min_x, $j);
                    $max_x = max($max_x, $j);
                    $min_y = min($min_y, $i);
                    $max_y = max($max_y, $i);
                }
            } else {
                return [$min_x, $max_x, $min_y, $max_y];
            }

        }
    }

    
}

function determineShape($matrix, $min_x, $max_x, $min_y, $max_y) {
    // Рассчитываем ширину и высоту границ
    $width = $max_x - $min_x + 1;
    $height = $max_y - $min_y + 1;
    if ($width < 30 & $height < 30) {
        return "Фигура не найдена";
    }
    $wchk = 0;  //widthCheck
    $hchk = 0;  //heightCheck
    for ($i = $min_x; $i < $max_x; $i++) {
        if ($matrix[$min_y][$i]==1) {
            $wchk+=1;}
        }
    for ($i = $min_y; $i < $max_y; $i++) {
        if ($matrix[$i][$min_x]==1) {
            $hchk+=1;}
        }

    $coor=[]; //coordinate
    for ($i = $min_y; $i <$max_y+1; $i++) {
        if ($matrix[$i][$min_x]==1){
            $coor[]=[$i,$min_x];
            break;
        }    
    }
    for ($i = $min_y; $i <$max_y+1; $i++) {
        if ($matrix[$i][$max_x]==1){
            $coor[]=[$i,$max_x];
            break;
        }    
    }
    for ($i = $min_x; $i <$max_x+1; $i++) {
        if ($matrix[$min_y][$i]==1){
            $coor[]=[$min_y,$i];
            break;
        }    
    }
    for ($i = $min_x; $i <$max_x+1; $i++) {
        if ($matrix[$max_y][$i]==1){
            $coor[]=[$max_y,$i];
            break;
        }    
    }


    //Используем векторы для поиска углов фигуры и вычисляем по формуле
    $coor = unique_marray($coor);
    $veccoor = [];
    $veccoor[0]=[$coor[1][1]-$coor[0][1],$coor[1][0]-$coor[0][0]];
    $veccoor[1]=[$coor[2][1]-$coor[0][1],$coor[2][0]-$coor[0][0]];
    $angle1=rad2deg(acos(num: ($veccoor[0][0]*$veccoor[1][0]+$veccoor[0][0]*$veccoor[0][1])/(sqrt($veccoor[0][0]**2+$coor[0][1]**2)*sqrt($coor[1][0]**2+$coor[1][1]**2))));
    $veccoor = [];
    $veccoor[0]=[$coor[0][1]-$coor[2][1],$coor[0][0]-$coor[2][0]];
    $veccoor[1]=[$coor[1][1]-$coor[2][1],$coor[1][0]-$coor[2][0]];
    $angle2=rad2deg(acos(num: ($veccoor[0][0]*$veccoor[1][0]+$veccoor[0][0]*$veccoor[0][1])/(sqrt($veccoor[0][0]**2+$coor[0][1]**2)*sqrt($coor[1][0]**2+$coor[1][1]**2))));
    $veccoor = [];
    $veccoor[0]=[$coor[0][1]-$coor[1][1],$coor[0][0]-$coor[1][0]];
    $veccoor[1]=[$coor[2][1]-$coor[1][1],$coor[2][0]-$coor[1][0]];
    $angle3=rad2deg(acos(num: ($veccoor[0][0]*$veccoor[1][0]+$veccoor[0][0]*$veccoor[0][1])/(sqrt($veccoor[0][0]**2+$coor[0][1]**2)*sqrt($coor[1][0]**2+$coor[1][1]**2))));
    //Методом исключения определяется заданная фигура
    if ($hchk+1==$height & $wchk+1 == $width ) { 
        return "square";
    } elseif (($width > $height * 1.3 || $height > $width * 1.3) & $angle1>10 & $angle2>10 & $angle3>10) {
        return "triangle";
    } else {
        return "circle";
    }
}

function main() {
    list($matrix, $x, $y) = readimage();
    list($min_x, $max_x, $min_y, $max_y) = findBounds($matrix, $x, $y);
    $shape = determineShape($matrix, $min_x, $max_x, $min_y, $max_y);
    echo $shape;
}

main();