<?php
    include "functions.php";
    $days="";
    if (isset($_GET['numDays']))
    {
        $days = calculateFutureDate($_GET['numDays']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    
    if($days)
    {
        echo("<h1> $days </h1>");
    } else {
        todaysDate();
    }
    //changes
    //calculateFutureDate();  //can call because it was included
    include "form.php";
?>

</body>
</html>