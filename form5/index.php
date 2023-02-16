<!-- На strtotime
Для вирішення завдань цього блоку вам знадобляться такі функції: strtotime.
  Дана дата у форматі '2025-12-31'. За допомогою 
  функції strtotime та date перетворіть її на формат '31-12-2025'.

  Зробіть форму, яка запитує дату-час у форматі '2025-12-31T12:13:59'. 
  За допомогою функції strtotime та функції date перетворіть її 
  на формат '12:13:59 31.12.2025'.
  -->

<?php
session_start();

$date = '2025-12-31';
print(date('d-m-Y', strtotime($date))) . '</br>';

if (isset($_POST['date'])) {
    print(date('h:i:s d.m.Y', strtotime($_POST['date'])));
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
            <input type="text" name="date" placeholder="Format 2025-12-31T12:13:59">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>