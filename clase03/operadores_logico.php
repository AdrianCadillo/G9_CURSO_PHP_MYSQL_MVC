<?php

$A = 12;
$B = 3;
$C = 5;
$D ="120";

/// operador loico and

echo (($A > $B) && ($A > $D));

//      V      AND    F
//         F

/// OPERADOR LOGICO OR

echo !(($D === $B) || ($A != $D));
   ///  F          or  V
   //       V