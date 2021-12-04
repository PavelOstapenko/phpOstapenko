<!DOCTYPE html>
<html>
<head>
	<title>Остапенко</title>
</head>
<body>
	<form id="frm" method="POST" action="">
        <p>Введите число n (больше нуля):</p>
        <input type="text" name="n">
        <p>Введите число x:</p>
        <input type="text" name="x">
        <input type="submit" value="OK" onclick="func()">
    </form>
    	<?php
		$n=$_POST["n"];
		$x=$_POST["x"];
				function factorial($n) {
  				return $n ? $n * factorial($n - 1) : 1;
				}
		for ($i=1; $i<=$n; $i++){
			$p = $p + ((((-1)**$i)*($x**(2*$i)))/factorial($i));
		}
		$p=1+$p;
		echo $p;
		?>
</body>
</html>