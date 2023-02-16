<!-- Зробіть поле введення, в яке користувач вводить рік (4 цифри), 
а скрипт визначає чи високосний рік.  -->

<?php
session_start();

if (isset($_POST['year'])) {

    if ($_POST['year'] % 400 === 0) {
        print($_POST['year'] . ' is a leap year');
    }  
    else if ($_POST['year'] % 100 === 0) {
        print($_POST['year'] . ' is not a leap year');
    }
    else if ($_POST['year'] % 4 === 0) {
        print($_POST['year'] . ' is a leap year');
    }
    else {
        print($_POST['year'] . ' is not a leap year');
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
            <input type="text" name="year" placeholder="Year">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>