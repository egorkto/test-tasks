<?php 
$n = isset($_POST['n']) && is_numeric($_POST['n']) ? $_POST['n'] : 0;
$m = isset($_POST['m']) && is_numeric($_POST['m']) ? $_POST['m'] : 0;

$count = calculateSistersCount($n, $m);
header("Location: /?result=$count");

function calculateSistersCount(int $n, int $m) : int {
    return $n + 1;
}