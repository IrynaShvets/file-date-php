<!-- Зробіть форму, яка запитує дату у форматі '31.12.2025'. 
За допомогою mktime та explode переведіть цю дату у формат timestamp. 
Дізнайтесь день тижня (словом) за введену дату.
  -->

<?php
session_start();

if (isset($_POST['date'])) {
    $date = explode('.', $_POST['date']);
    print(date('l', mktime(0, 0, 0, $date[1], $date[0], $date[2])));
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
            <input type="text" name="date" placeholder="Format 31.12.2025">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>