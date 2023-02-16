<!--  Зробіть форму з одним полем введення, яке користувач вводить рік. 
Знайдіть усі п'ятниці 13-те цього року. 
Результат виведіть у вигляді масиву дат.  -->

<?php
session_start();

if (isset($_POST['year'])) {

    
    function getFridays($year)
    {
        $fridays = array();
        $startDate = new DateTime("{$year}-01-01 Friday");
        $year++;
        $endDate = new DateTime("{$year}-01-01");
        $int = new DateInterval('P7D');
        foreach(new DatePeriod($startDate, $int, $endDate) as $d) {
            $fridays[] = $d->format('d.m.Y');
        }
    
        return $fridays;
    }
    
    $fridays = getFridays($_POST['year']);
    print_r($fridays);
    
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