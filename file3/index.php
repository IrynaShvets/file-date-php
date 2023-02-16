<!-- Додаток та забирання дат
Для вирішення завдань цього блоку вам знадобляться 
такі функції: date_create, date_modify, date_format.
  У змінній $date лежить дата у форматі '2025-12-31'. 
  Додайте до цієї дати 2 дні, 1 місяць та 3 дні, 1 рік. 
  Заберіть від цієї дати 3 дні.

  Завдання
  Дізнайтеся, скільки днів залишилося до Нового Року. 
  Скрипт має працювати у будь-якому році.

   Дізнайтеся, який день тижня був 100 днів тому.
  -->

<?php

$date = date_create('2025-12-31');
date_modify($date, '+2 day');
date_modify($date, '+1 month');
date_modify($date, '+3 day +1year');
date_modify($date, '-3 day');
echo date_format($date, 'Y-m-d') . '<br>';


$difference = mktime(0, 0, 0, 12, 31, date('Y')) - time();
if ($difference < 0) { 
    $difference = 0; 
}
echo floor($difference/60/60/24)." days remaining" . '<br>';



function getDayOfWeek($dateT)
{
 $f = date($dateT, strtotime('-100 day'));    
 $date = explode('.', $f); 
   
  return date('l', mktime(0, 0, 0, $date[1], $date[0], $date[2]));
}
echo (getDayOfWeek('31.12.2025'));


?>

