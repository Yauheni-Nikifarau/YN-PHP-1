<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //ЗАДАНИЕ 1
    //Создайте переменные $a=10 и $b=2. Выведите на экран их сумму,
    // разность, произведение и частное (результат деления).
    echo '<h3>ЗАДАНИЕ 1</h3>';
    $a = 10;
    $b = 2;
    echo "<p> a = {$a}; b = {$b} </p>";
    echo '<p> a + b ='. $a + $b .'</p>';
    echo '<p> a - b ='. $a - $b .'</p>';
    echo '<p> a * b ='. $a * $b .'</p>';
    echo '<p> a / b ='. $a / $b .'</p>';
    echo '<hr />';

    //ЗАДАНИЕ 2
    // Даны три числа x = 2,y = 6 и z = 9. Найдите (x+1)4−2(z−2x^2+y^2)
    echo '<h3>ЗАДАНИЕ 2</h3>';
    $x = 2;
    $y = 6;
    $z = 9;
    echo "<p>x={$x}, y={$y}, z={$z}</p>";
    echo '<p>(x+1)4−2(z−2x^2+y^2) = '. ($x + 1) * 4 - 2 * ($z - 2 * ($x ** 2) + $y ** 2) .'</p>';
    echo '<hr />';

    //ЗАДАНИЕ 3
    // Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и
    // результат присвойте переменной $c. Затем создайте переменную $d,
    // присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите
    // в переменную $result. Выведите на экран значение переменной $result.
    echo '<h3>ЗАДАНИЕ 3</h3>';
    $a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    echo "<p> result = {$result}";
    echo '<hr />';

    //ЗАДАНИЕ 4
    // Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих
    // переменных и операции сложения строк выведите на экран фразу 'Привет,
    // Мир!'.
    echo '<h3>ЗАДАНИЕ 4</h3>';
    $text1 = 'Привет, ';
    $text2 = 'Мир!';
    echo '<p>' . $text1 . $text2 . '</p>';
    echo '<hr />';

    //ЗАДАНИЕ 5
    // Создайте переменную $name и присвойте ей ваше имя. Выведите на экран
    // фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.
    echo '<h3>ЗАДАНИЕ 5</h3>';
    $myName = 'Жекос';
    echo "<p>Привет, {$myName}!</p>";
    echo '<hr />';

    //ЗАДАНИЕ 6
    // Создайте переменную $num и присвойте ей значение '12345'. Найдите
    // сумму цифр этого числа.
    echo '<h3>ЗАДАНИЕ 6</h3>';
    $num = '12345';
    echo "<p>Cумма цифр числа 12345 равна ". $num[0] + $num[1] + $num[2] + $num[3] + $num[4] ."</p>";
    echo '<hr />';

    //ЗАДАНИЕ 7
    // Напишите скрипт, который считает количество секунд в часе, в сутках, в
    // месяце, в году и сколько прошло секунд с начала 2000 года.
    echo '<h3>ЗАДАНИЕ 7</h3>';
    $month = (int) date("m");
    $day = (int) date("j");
    $hours = (int) date("h");
    $year = (int) date("Y");
    $minute = (int) date("i");
    $second = (int) date("s");
    $leapYears = (int) (($year - 2000) / 4 + 1);
    $numOfSeconds = (($year * 86400 * 365) + $leapYears * 86400) + ($month - 1) * 86400 * 31 + ($day - 1) * 86400 + $hours * 3600 + $minute * 60 + $second;
    echo "<p>С начала 2000 года прошло {$numOfSeconds} секунд.</p>";
    echo '<hr />';

    //ЗАДАНИЕ 8
    // Создайте три переменные - час, минута, секунда. С их помощью выведите
    // текущее время в формате 'час:минута:секунда'.
    echo '<h3>ЗАДАНИЕ 8</h3>';
    echo "<p>{$hours}:{$minute}:{$second}</p>";
    echo '<hr />';

    //ЗАДАНИЕ 9
    // Переделайте приведенный код так, чтобы в нем использовались операции
    // +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться.
    // Код для переделки:
    // $var = 1;
    // $var = $var + 12;
    // $var = $var - 14;
    // $var = $var * 5;
    // $var = $var / 7;
    // $var = $var + 1;
    // $var = $var - 1;
    // echo $var;
    echo '<h3>ЗАДАНИЕ 9</h3>';
    $var = 1;
    $var += 12;
    $var -= 14;
    $var *= 5;
    $var /= 7;
    $var += 1;
    $var -= 1;
    echo '<p>' . $var . '</p>';
    echo '<hr />';

    //ЗАДАНИЕ 10
    // Создайте константу и присвойте ей значение - ваша фамилия, создайте
    // соответствующие переменные со сл. значениями: ваше имя, ваше отчество,
    // ваш возраст. Проверьте существует ли созданная константа, если да, то
    // выведите фразу "Меня зовут <ваша фамилия> (сокр. <ваше имя> и сокр.
    // ваше отчество). Мне <ваш возраст> лет". Каждая фраза должна начинаться с
    // новой строки. Например:
    // "Меня зовут Иванов (И. И.).
    // Мне 5 лет."
    echo '<h3>ЗАДАНИЕ 10</h3>';
    define("MYSURNAME", "Никифоров");
    $myName = "Евгений";
    $myPatronym = "Александрович";
    $myAge = 25;
    $myShortName = $myName[0] . $myName[1];
    $myShortPatronym = $myPatronym[0] . $myPatronym[1];

    if (defined("MYSURNAME")) {
        echo "<p>\"Меня зовут " . MYSURNAME . " ({$myShortName}. {$myShortPatronym}.).<br />
                Мне {$myAge} лет.\"</p>";
    }

    ?>
</body>
</html>
