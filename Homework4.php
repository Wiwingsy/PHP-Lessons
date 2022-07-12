<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home work 4</title>
</head>
<body>
    <pre>
        <h2>Царь горы.</h2>
        <h3>Найти пользователя с наибольшей репутацией.Циклы не использовать.Как получить трех пользователей с наибольшей репутацией?</h3>
        <?php
        $rate = [
            'Вася' => 37,
            'Даша'=> 25,
            'Катя' => 78,
            'Настя' => 18,
            'Дима' => 93,
        ];

        $new_rate = arsort($rate);

        print_r($rate);

        echo "Пользователь с наибольшей репутацией ". key($rate);

    
        $top = array_slice($rate, 0, 3); 
        print_r($top);
        ?>
        <h2>День недели.</h2>
        <h3>Заменить в тексте все английские названия дней недели на русские. Использовать str_replace вместе с массивами.</h3>
        <?php
        $phrase = "Admission is conducted on the following days of the week: Tuesday, Wednesday, Thursday, Friday.";
        $en = ['Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        $ru = ['Вторник', 'Среда', 'Четверг', 'Пятница'];
        $newphrase = str_replace($en, $ru, $phrase);
        echo $newphrase;
        ?>

<h2>Лето.</h2>
<h3>Дано название месяца, определить время года.Для хранения данных использовать массив. </h3>
<?php
$seasons = [
    'январь' => 1,
    'февраль' => 2,
    'март' => 3,
    'апрель' => 4,
    'май' => 5,
    'июнь' => 6, // и т.д.
];

$month = 'апрель';

if (isset($seasons[$month])) {
    if ((($seasons[$month]) == 1) || (($seasons[$month])== 2) || (($seasons[$month])== 12)) {
        echo $month. " соответствует времени года зима.";
    }
    elseif ((($seasons[$month]) == 3) || (($seasons[$month]) == 4) || (($seasons[$month]) == 5)) {
        echo $month . " соответствует времени года весна.";
    }
    elseif ((($seasons[$month]) == 6) || (($seasons[$month]) == 7) || (($seasons[$month]) == 8)) {
        echo $month . " соответствует времени года лето.";
    }
    else {
        echo $month . " соответствует времени года осень.";
    }
}
else {
    echo  "Такого месяца не существует.";
}

?>

<h2>Корзина.</h2>
<h3>Получить стоимость товара в корзине по его id.</h3>
<?php
$cart = [ 
13 => ['name'=>'Кеды',
    'count'=>2,
    'price'=>123], 
28 => ['name'=>'Самолет',
    'count'=>1,
    'price'=>9999999]
];

?>
</pre>
    </body>
</html>


