<?php
echo "BOOLEAN <br/>";
echo "<hr>";

//Boolean 1
echo "Boolean 1. Дано целое число А. Проверить истинность высказывания: Число А является положительным <br/><br/>";

$a = 1769;
echo "Дано число :$a<br/>";
if ($a > 0) {
	echo "Число $a положительное";
} else {
	echo "Число $a отрицательное";
}
echo "<hr>";
