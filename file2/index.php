<!-- Створіть папку TestDir
Дано масив ['test1','test2','test3'], створіть у папці Test папки,
назвами яких слугують рядки масиву 

Створіть у кожній вкладеній у TestDir папці, файл Hello.txt, 
у кожен із них запишіть рядок "Hello world", виведіть на екран вміст усіх файлів.

Напишіть функцію, яка приймає назву файлу або папки і перевіряє, чи є передане значення файлом 
або папкою (повернути рядок) -->

<?php

if (!file_exists('TestDir')) {
    mkdir('TestDir', 0700);
}
$arr = ['test1', 'test2', 'test3'];

if (!file_exists('TestDir' . '/' . $arr[0])) {
    mkdir('TestDir' . '/' . $arr[0], 0700);
}

if (!file_exists('TestDir' . '/' . $arr[1])) {
    mkdir('TestDir' . '/' . $arr[1], 0700);
}

if (!file_exists('TestDir' . '/' . $arr[2])) {
    mkdir('TestDir' . '/' . $arr[2], 0700);
}

$file = fopen('TestDir' . '/' . 'test1' . '/' . 'Hello.txt', 'w');
fwrite($file, "Hello world");
fclose($file);

$f = file_get_contents('TestDir' . '/' . 'test1' . '/' . 'Hello.txt');
echo $f;


$file1 = fopen('TestDir' . '/' . 'test2' . '/' . 'Hello.txt', 'w');
fwrite($file1, "Hello world");
fclose($file1);

$f1 = file_get_contents('TestDir' . '/' . 'test1' . '/' . 'Hello.txt');
echo $f1;


$file2 = fopen('TestDir' . '/' . 'test3' . '/' . 'Hello.txt', 'w');
fwrite($file2, "Hello world");
fclose($file2);

$f2 = file_get_contents('TestDir' . '/' . 'test1' . '/' . 'Hello.txt');
echo $f2;

function checkIn($text)
{
    if (!strpos($text, "." !== true)) {
        echo 'directory';
    } 
    echo 'file';
}

checkIn('TestDir');
checkIn('Hello.txt');



?>