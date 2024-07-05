<?php
    /* Входной массив */
    $Array =
        [
            ['Иванов', 'Математика', 5],
            ['Иванов', 'Математика', 4],
            ['Иванов', 'Математика', 5],
            ['Петров', 'Математика', 5],
            ['Сидоров', 'Физика', 4],
            ['Иванов', 'Физика', 4],
            ['Петров', 'ОБЖ', 4],
        ];
    /* Дополнительные массивы для выделения предметов и студентов */
    $Student = Array();
    $Item = Array();
    /* Переменные для отслеживания цикла заполнения массивов предметов и студентов */
    $CurrentFirstKey="";
    $CurrentSecondKey="";
    $CurrentScale=0;
    $i=0;
    /* Подготовительная сортировка входного массива */
    array_multisort
    (
        $Array,
        SORT_ASC,
        SORT_REGULAR
    );
    /* Цикл для заполнения массивов предметы и студенты по данным из входного массива */
    foreach ($Array as list($FirstKey, $SecondKey, $ThirdKey))
    {
        // Заполнение массива предметы
        $Item[$i]=$SecondKey;
        $i++;
        // Заполнение массива студенты
        if($CurrentFirstKey == "")/* Если элемент первый*/{
            $CurrentFirstKey = $FirstKey;
            $CurrentSecondKey = $SecondKey;
            $Student += Array($FirstKey=>Array($SecondKey=>$ThirdKey));
        }
        else{
            if($CurrentFirstKey==$FirstKey)/* Если Фамилия студента не изменилась */{
                if($CurrentSecondKey==$SecondKey)/* Если название предмета не изменилось */{
                    $Student[$FirstKey][$SecondKey]+=$ThirdKey;
                }
                else /* Если изменилось название предмета */{
                    $Student[$FirstKey] += Array($SecondKey=>$ThirdKey);
                }
            }
            else/* Если фамилия студента поменялась */{
                $CurrentFirstKey = $FirstKey;
                $CurrentSecondKey = $SecondKey;
                $Student += Array($FirstKey=>Array($SecondKey=>$ThirdKey));
            }
        }
    }
    /* Удаление дубликатов предметов в массиве предметы */
    $Item = array_unique($Item);
    /* Создание таблицы и заполнение */
    echo "<table class='table'> <thead> <tr>";
    /* Создание заголовков таблицы */
    echo "<th style='text-align: center; color:#66bb6a;'>Фамилия</th>";
    foreach ($Item as $value)
    {
        echo "<th style='text-align: center; color:#66bb6a;'>".$value."</th>";
    }
    echo "</tr> </thead>";
    /* Создание строки таблицы */
    foreach ($Student as $StudentName => $StudentValue){
        $i=0;
        echo "<tr>";
        /* Заполнение ячейки Фамилия строки таблицы */
        echo "<td style='text-align: center;'>".$StudentName."</td>";
        /* Заполнение ячеек оценки студента по предметам в строке */
        foreach($Item as $ItemValue){
            $Similarity=false;
            foreach ($StudentValue as $StudentItem => $StudentScale){
                if($ItemValue == $StudentItem){
                    echo "<td style='text-align: center;'>".$StudentScale."</td>";
                    $Similarity=true;
                }
            }
            if(!$Similarity){
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>