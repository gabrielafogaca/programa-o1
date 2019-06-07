<?php
function assar ($graus)
{
    if ($graus > 500) {
        $msg = "Eu não sou um reator nuclear!";
    } else {
        if ($graus < 100) {
            $msg = "Eu não sou refrigerador!";
        } else {
            $msg = "Esta temperatura está boa pra mim.";
        }
    }
    return $msg;
   }

$status = assar (350) ;
print ($status);