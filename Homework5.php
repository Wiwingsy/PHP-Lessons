<?php
$rate = [            //Для Экватор и Данила Мастер 2
    'Иван' => 150,
    'Петя' => 50,
    'Гриша' => 30,
    'Вася' => 80,
    'Олег' => 0,
    'Денис' => -20,
];
$users1 = [    //Для Выйди вон
    'Алла',
    'Катя',
    'Илья',
    'Максим',
    'Настя',
    'Дима'
];
$users2 = [    //Для Выйди вон
    'Света',
    'Лариса',
    'Максим',
    'Дима',
    'Кристина',
    'Алла',
];
$row_count = 6;   // Для Зебра
$row_number = 1;

$pages =[         //Для Меню
    'О нас' => 'about.html',
    'Главная' => 'main.html',
    'Контакты' => 'contacts.html',
    'Загрузки' => 'dounloads.html'
];
$page = 'Главная';    //Для Меню 2

$cart = [                       //Для Итог
    13 => ['name'=>'Кеды',
            'count'=>2,
            'price'=>123],
    28 => ['name'=>'Самолет',
            'count'=>1,
            'price'=>9999999]
    ];

$numFirstDay = 5;
$allDays = 31;
$days = [
    1 => 'ПН',
    2 => 'ВТ',
    3 => 'СР',
    4 => 'ЧТ',
    5 => 'ПТ',
    6 => 'СБ',
    7 => 'ВС'
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home work 5</title>
        <style>
            table{
                border-collapse: collapse;
            }
            th,td{
                padding: 5px 10px;
                border: 1px solid teal;
            }
            .active{
                background-color: #cd66cc;
                color: white;
            }
        </style>
    </head>
    <body>
        <h1>Экватор</h1> <!--Экватор-->
        <table>
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Рейтинг</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($rate as $name => $rat):
                    if($rat > 50):
                ?>
                <tr>
                    <td><?=$name?></td>
                    <td><?=$rat?></td>
                </tr>
                <?php
                endif;
                endforeach;
                ?>
            </tbody>
        </table>
        <h1>Данила Мастер 2</h1> <!--Данила Мастер 2-->
        <table>
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Рейтинг</th>
                    <th>Статус</th>
                </tr>
            </thead>
            <?php
            foreach($rate as $name => $rat):
                if($rat <= 30) {
                    $status = 'новичок';
                }
                if($rat >= 31 && $rat <=60 ) {
                    $status = 'мастер';
                }
                if($rat > 60 ) {
                    $status = 'грандмастер';
                }
                ?>
                <tr>
                    <td><?=$name?></td>
                    <td><?=$rat?></td>
                    <td><?=$status?></td>
                </tr>
                <?php
                endforeach;
                ?>
        </table>
        <h1>Выйди вон</h1> <!--Выйди вон не работает, не знаю как сделать-->
        <table>
            <thead>
                <tr>
                    <th>Пользователи 1</th>
                    <th>Пользователи 2</th>
                </tr>
            </thead>
            <?php
            // foreach($users2 as $user2) {
            //     if($users1[$user1]==$users2[$user2]){
            //         unset($users1[user1]);
            //     }
                
            // }
            for($i = 0, $j = 0; $i < count($users1),$j < count($users2); $i++, $j++):
                if($users1[$i]==$users2[$j]):
                unset($users1[$i]);
            ?>
            <tr>
                <td><?=$users1[$i]?></td>
                <td><?=$users2[$j]?></td>
            </tr>
            <?php
            endif;
            endfor;
            ?>
        </table>
        <h1>Зебра</h1>  <!--Зебра (первая ячейка не в таблице почему-то)-->
        <?php
        while($row_number <= $row_count):
            if(($row_number % 2) == 0):
        ?>
        <table>
            <tr>
                <td style ='background-color: #cd66cc;'>
                    <?php
                    echo "<div>{$row_number}</div>";
                    $row_number++;
                    ?>
                </td>
            </tr>
                    <?php
                    else:
                    ?>
            <tr>        
                <td>
                    <?php
                    echo "<div>{$row_number}</div>";
                    $row_number++;
                    ?>
                </td>
            </tr>
            <?php
        endif;
        endwhile;
        ?>
        </table>
        
        <h1>Меню</h1> <!--Меню-->
        <ul>
            <?php
            foreach($pages as $pageName => $pageLink):
            ?>
            <li><a href="<?=$pageLink?>"><?=$pageName?></a></li>
            <?php
            endforeach;
            ?>
        </ul>
        <h1>Меню 2</h1> <!--Меню 2-->
        <ul>
            <?php
            foreach($pages as $pageName => $pageLink):
            ?>
            <li><a 
                    class="<?= $pageName === $page ? 'active' : ''?>" 
                    href="<?=$pageLink?>"><?=$pageName?>
                </a>
            </li>
            <?php
            endforeach;
            ?>
        </ul>
        <h1>Итог</h1> <!--Итог-->
        <table>
            <thead>
                <th>Наименование</th>
                <th>Количество</th>
                <th>Цена за ед.</th>
                <th>Стоимость</th>
            </thead>
            <?php
            foreach($cart as $number => $data):
            ?>
            <tr>
                <td><?=$data['name']?></td>
                <td><?=$data['count']?></td>
                <td><?=$data['price']?></td>
                <td><?=($data['price']*$data['count'])?></td>
            </tr>           
            <?php
                                                                        //не знаю как вывести сумму стоимостей
            ?>
            <tr>
                <!-- <td><?="Стоимость корзины " . $sum?></td> переменная пока не задана -->
            </tr>
            <?php
            endforeach;
            ?>
        </table>
        <h1>Шах</h1> <!--Шах не сделано  - не успела просто(только заготовка)--> 
        <?php
        $a = 2;
        $b = 1;
    
        if (($a % 2 == 0) && ($b % 2 != 0)) {
            echo "white";
        }
        else {
            echo "black";
        }
        ?>
        <h1>Мат*</h1> <!--Мат* не сделано - не понимаю как, всё ниже(попытки) закомментила-->
        <!-- <table>
            <thead>
                <th>ПН</th>
                <th>ВТ</th>
                <th>СР</th>
                <th>ЧТ</th>
                <th>ПТ</th>
                <th>СБ</th>
                <th>ВС</th>
            </thead>
            <?php
            for($i=0;$i < $numFirstDay; $i++):
            ?>
            <tr>
                <td><?=$i?></td>
            </tr>
            <?php
            for ($i = 1; $i <= $allDays; $i++):
                if(($numFirstDay + $i) % 7 == 0):
            ?>
            <tr>
                <td style="background-color: red;"><?=$i?></td>
            </tr>
            <?php
            else:
                if(($numFirstDay + $i) % 7 == 1):
            ?>
            <tr>
                <td><?=$i?></td>
                <?=$i?>
            </tr>
            </tr>
            <?php
            endif;
            endif;
            endfor;
            endfor;
            ?>
        </table> -->
    </body>
</html>