<!-- Порівняння дат
  Зробіть форму, яка запитує дві дати у форматі '2025-12-31'. 
  Першу дату запишіть у змінну $date1, а другу в $date2. 
  Порівняйте, яка із введених дат більше. Виведіть її на екран.
  -->

<?php
session_start();

if (isset($_POST['date1']) && isset($_POST['date2'])) {

    echo $_POST['date1'] . '<br>';
    echo $_POST['date2'] . '<br>';

    if ($_POST['date1'] < $_POST['date2']) {
        print('Перша дата менша, ніж друга');
    }

    if ($_POST['date1'] > $_POST['date2']) {
        print('Перша дата більша, ніж друга');
    }

    if ($_POST['date1'] === $_POST['date2']) {
        print('Дати рівні');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <form method="post">
            <input type="text" name="date1" placeholder="Format 2025-12-31">
            <input type="text" name="date2" placeholder="Format 2025-12-31">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>