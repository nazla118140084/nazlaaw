<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .ganjil{
            background-color : #ccc;
            text-align : center;
        }

        .genap{
            background-color : #346;
            color : white;
            text-align : center; 
        }
    </style>
</head>

    <h2>Pemrograman Web</h2>
    <?php
    $a = "95";
    $b = false;

    if((intval($a) > 80) && ($b !=true)){
        echo "<div class = ganjil>HTML</div>";
    }

    if(($b !=true)){
        echo "<div class = genap>CSS</div>";
    }

    if(($b == true)){
        echo "<div class = ganjil>Java</div>";
    }

    else {
        echo "<div class = ganjil>PHP</div>";
    }
    
    ?>

    <!-- Jawaban :
    1. .ganjil
    2. text-align
    3. genap
    4. color
    5. text-align
    6. intval($a)
    7. $b
    8. true
    9. $b
    10. $b
    
      -->