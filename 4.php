<?php

function calcularAumento ($salario) {
    $aumento = 0.08;
    $salario = $salario + ($salario * $aumento);
    print $salario;
}

calcularAumento (1000.00);