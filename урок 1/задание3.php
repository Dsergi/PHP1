<?php
$a = 5;
$b = '05';
var_dump($a == $b); // Почему true? Нестрогое сравнение. Проверяет только значения. При сравнении строка преобразуется в целое число 5 (int)
var_dump((int)'012345'); // Почему 12345? Строка '012345' преобразуется в целое число 12345 (int) При преобразовании строки в число значение определяется по начальным символам строки.
var_dump((float)123.0 === (int)123.0); // Почему false? Строгое сравнение. Проверяет значения и типы. Слева число с плавающе точкой float справа целое число int.
var_dump((int)0 === (int)'hello, world'); // Почему true? Слева целое число 0 (int) Справа строка 'hello, world' преобразуется в целое число 0 (int). При преобразовании строки в число значение определяется по начальным символам строки.
