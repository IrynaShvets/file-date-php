<!-- Зробіть форму, яка запитує дату у форматі '2025-12-31'. 
За допомогою mktime та explode переведіть цю дату у формат timestamp. 
Дізнайтесь місяць (словом) за введену дату.
  -->

<?php
session_start();

if (isset($_POST['month'])) {
    $month = explode('-', $_POST['month']);
    print(date('F', mktime(0, 0, 0, $month[1], $month[2], $month[0])));
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
            <input type="text" name="month" placeholder="Format 2025-12-31">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>