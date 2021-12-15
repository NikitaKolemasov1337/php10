<!DOCTYPE html>
<html>
<head>
    <title>Лабораторная работа №10</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите элементы массива через запятую:</p>
        <input type="text" name="n" value="1, 2, 3">
        <input type="submit" value="OK">
    </form>
    <?php
        $n=$_POST["n"];
        $myArray = explode(", ", $n);

        $indMax=0;
        for($i=1; $i<count($myArray); $i++){
            if($myArray[$i]>$myArray[$indMax]){
                $indMax=$i;
            }
        }
    
        //Сумма элементов массива, располоенных между первым и вторым нулевыми элементами
        $first0El;
        $second0El;
        $sum0=0;
        for($i=0; $i<count($myArray); $i++){
            if($myArray[$i]==0){
                $first0El=$i;
                for($l=$i+1; $l<count($myArray); $l++){
                    if($myArray[$l]==0){
                    $second0El=$l;
                    break;
                    }
                }
                break;
            }
        }

        for($i=$first0El+1; $i<$second0El; $i++){
            $sum0+=$myArray[$i];
        }

        //Массив, где сначала располагаются все элементы модуль которых не превышает 1, а потом все остальные
        $men=[];
        $bol=[];
        for($l=0;$l<count($myArray);$l++){
            if($myArray[$l]<=1||$myArray[$l]==0||$myArray[$l]>=-1){
                $men[]=$myArray[$l];
            }
            else{
                $bol[]=$myArray[$l];
            }
        }
        array_merge($men, $bol);

        //упорядовачивание по возрастанию

        echo "Индекс максимального элемента: ".$indMax."; Сумма элементов массива, располоенных между первым и вторым нулевыми элементами: ".$sum0."; Массив, где сначала располагаются все элементы модуль которых не превышает 1, а потом все остальные: </br>";
        for($m=0; $m<count($myArray); $m++){
            echo $myArray[$m]."; ";
        }
    ?>
</body>
</html>