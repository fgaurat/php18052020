<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <pre>
<?php
    define('THE_VALUE', "une valeur");

    $a = 'Hello';
    $b = 'World';
    $i = 2;
    $hello1 = "Bonjour : ".$a."  ".$b;
    $hello = "Bonjour : $a  $b";
    $hello = 'Bonjour : $a  $b';
    
    echo THE_VALUE;

    $arr = ["val a","val b","val c"]; // $arr = array()
    $arr_assoc = [
        "key1" => "val a",
        "key2" => "val b",
        "key3" => "val c"];
?>    
</pre>
    <h1>
    <?=$hello?>
    </h1>
    <p>
        Bonjour
        Hello
        World
    </p>

    <ul>
    <?php foreach( $arr as $value):?>
        <li>
            <?= $value?>
        </li>
    <?php endforeach ?>
    </ul>
    
    <ul>
    <?php foreach( $arr_assoc as $key => $value):?>
        <li>
        <?= $key?> => <?= $value?>
        </li>
    <?php endforeach ?>
    </ul>
    

    <?= strtoupper($arr[0])  ?>
    <?= ucfirst($arr_assoc['key1'])  ?>
</body>
</html>

