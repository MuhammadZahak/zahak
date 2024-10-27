<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
$susses_array = [
        'Ali' => array('Math' =>10,'english' => 30,'urdu' => 50),
        'Ahmad' => array('Math' => 40,'english' => 60,'urdu' => 70),
        'Osman' => array('Math' => 80,'english' => 90,'urdu' => 100),
    ];

    foreach( $susses_array as $key){
        echo "Name :".$key."<br>";
        foreach($key as $subkey => $subvalue){
            echo $subkey." : ".$subvalue."<br>";
        }
        echo "<br>";
    }
    ?>