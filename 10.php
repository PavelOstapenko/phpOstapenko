<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Остапенко</title>
</head>
<body>
        <form id="frm" method="POST" action="">
        <p>Введите элементы массива через запятую:</p>
        <input type="text" name="n" value="1, 22, 3, 16, 14">
        <input type="submit" value="OK">
        </form>
            <?php
        //функция для создания массива пользователем(работает)
        $n=$_POST["n"];
        $myArray = explode(", ", $n);

        //Нахождения максимального элемента массива(работает)
        echo max($myArray);
        echo"\n";
        //Задание 2. Сумма элементов массива, расположенных после максимального элемента(работает)
        $maxEl = max($myArray);
        $summa = 0;
        for($i=key($maxEl); $i<count($myArray); $i++){
            $summa+=$myArray[$i];     
        }
        echo "<br />";
        echo ($summa-=max($myArray));

        //Задание 1. Количество элементов массива в диапазоне(работает)
        $a=1;
        $b=3;
        $kolichestvoEl=0;
        for($i=0; $i<=count($myArray); $i++){
            if ($myArray[$i]>=$a && $myArray[$i]<=$b) {
                $kolichestvoEl+=1;
            }
        }
		echo "<br />";
		echo $kolichestvoEl;

        //Сортировка по убыванию(работает)
        rsort($myArray);
        echo "<br />";
        while (list($key, $val) = each($myArray)) {
   		echo "$key = $val<br>\n";
	}
    ?>
</body>
</html>