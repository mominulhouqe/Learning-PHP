<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    // if condition
    // 15 is greater then 10
    if (9 > 10) {
        echo "15 is bigest Number </br>";
    } else {
        echo "10 is smallest number </br>";
    }
    // Set variable
    $number = 14;

    if ($number > 20) {
        echo "Number is biggest more than 20 </br>";
    } else {

        echo "Number is smallest more than 145 </br>";
    }
    // check is equal
    if ($number == 13) {
        echo "This number is equal </br>";
    } else {
        echo "This number is not equal </br>";
    }

    // sorthand if else condition
    $a = 4;

    $b = $a < 10 ? "'$a' is smallest than 10" : "10 is smallest then '$a' value";

    echo  $b






    ?>
</body>

</html>