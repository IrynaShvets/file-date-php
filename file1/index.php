<!-- 1. Створіть файл 'test.txt' , запишіть у нього рядок 'Hello Palmo''.
2.Відобразіть вміст файлу на сторінці
3.Відобразіть розмір файлу на сторінці (У байтах, мегабайтах, гігабайтах)
4.Створіть файл 'test2.txt'
5.Видаліть 'test.2.txt' -->

<?php

    $file = fopen('test.txt', 'w');
    fwrite($file, 'Hello Palmo');
    fclose($file);

    $file2 = fopen('test.txt', 'r+');
    $text = fread($file2, 11);
    $size = filesize('test.txt');
    
    fclose($file2);
    echo $text . '<br>';
    echo $size . '<br>';
    echo $size / 1024 / 1024,4 . 'MB' . '<br>';
    echo $size / 1024 / 1024 / 1024,4 . 'GB' . '<br>';

    $fileTwo = fopen('test2.txt', 'w');
    unlink('test2.txt');


?>


