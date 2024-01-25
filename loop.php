<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    $i = 0;
    // while ($i <= 6) {
    //     echo $i;
    //     $i++;
    // }

    // while($i <br 6) {
    //     if($i == 3 ) break;
    //     echo $i;
    //     $i++;
    // }
// while ($i < 100) {
//     $i+=10;
//     echo $i."<br>";
// }

// For loop
// for($i =0; $i <10; $i++){
//     if($i == 3)continue;
//     echo"The number  = ".$i ."</br>";
// }
for($i =0; $i<=100; $i+=5){
    echo"The number is -> $i </br>";
}


// Foreach
$names = array("Mominul ","Rajibur","Fahim","Sahinur");

foreach($names as $name){
    echo $name ."</br>";
}


    ?>

</body>

</html>