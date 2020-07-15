<?php

include 'include/Calc.php';

$numb1 = $_POST['numb1'];
$numb2 = $_POST['numb2'];
$cal = $_POST['cal'];

$calculator = new Calc($numb1, $numb2, $cal);
echo $calculator->calcMethod();