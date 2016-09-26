<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$cumul_age = 0;
$moyenne = 0;
$nb_pers = 0;

foreach ($students as $keys => $value) {

    $cumul_age += $value;
    $nb_pers += 1;

    echo "$keys => $value <br>";
    /*   echo "cumul_age => $cumul_age <br>";
       echo "nb_pers => $nb_pers <br>"; */
}

$moyenne = $cumul_age / $nb_pers;

echo "moyenne => $moyenne <br>";

?>

