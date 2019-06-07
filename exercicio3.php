
<?php
print "Digite a 1º nota: ";
$prinota = (float) fgets (STDIN);

print "Digite a 2º nota: ";
$segnota = (float) fgets (STDIN);

media ($prinota, $segnota);

function media ( $prinota, $segnota ) {

    $media = (($prinota + $segnota) / 2);

    if ($media >= 6) {
    
        print "Você foi aprovado com média $media , parabéns!!";
    
    } else {
    
        print "Você foi reprovado";
    
    }
}