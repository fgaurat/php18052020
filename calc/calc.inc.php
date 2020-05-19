<?php
$a = 0;
$b = 0;
$op = "add";
$result = 0;

function calc($val_a = "0", $val_b = "0", $val_op = "+")
{
    $result = 0;
    switch ($val_op) {
        case "add":
            $result = $val_a + $val_b;
            break;
        case "mult":
            $result = $val_a * $val_b;
            break;
        case "div":
            $result = $val_a / $val_b;
            break;
        case "sub":
            $result = $val_a - $val_b;
            break;
    }
    return $result;
}

function mult2($v){
    return $v*2;
}

function sum($carry, $item){
    $carry+=$item;
    return $carry;
}


// Traitement Formulaire 1
if (isset($_POST['the_form']) && !empty($_POST['the_form']) && $_POST['the_form'] == 'form1') {

    if (isset($_POST['number_a']) && !empty($_POST['number_a'])) {
        $a =  $_POST['number_a'];
    }
    if (isset($_POST['number_b']) && !empty($_POST['number_b'])) {
        $b =  $_POST['number_b'];
    }
    if (isset($_POST['operator']) && !empty($_POST['operator'])) {
        $op =  $_POST['operator'];
    }
    if (isset($_POST['operator_check']) && !empty($_POST['operator_check'])) {
        $op =  $_POST['operator_check'];
    }
    $result = calc($a, $b, $op);
}
// Traitement Formulaire 2
else if (isset($_POST['the_form']) && !empty($_POST['the_form']) && $_POST['the_form'] == 'form2') {
    $values = "";
    if (isset($_POST['number_list']) && !empty($_POST['number_list'])) {
        $values =$_POST['number_list']; // 1,2,3,4,5 => [1,2,3,4]
        $arr = explode(',',$values);

        $result = array_reduce($arr,"sum");
    }    
}
