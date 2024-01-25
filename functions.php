<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $cars  = array ("BMW","toyta","Ferari");
    echo count($cars);
    
    function setHeight($minheight = 50){
        echo"The height is - ".$minheight."";
    }
    
    setHeight(345);
    setHeight(52);
    setHeight(434)
    
    
    
    ?>
</body>
</html>