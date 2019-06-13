<?php

function semana ($dia){

    if ($dia == 1){

        $diasemana = "DOM";

        print "\n $diasemana \n ";
    }

        if ($dia == 2){

        $diasemana = "SEG";

        print "\n $diasemana \n";
        }

            if ($dia == 3){

                $diasemana = "TER";
        
                print "\n $diasemana \n";
                }

                if ($dia == 4){

                    $diasemana = "QUA";
            
                    print "\n $diasemana \n";
                    }

                    if ($dia == 5){

                        $diasemana = "QUI";
                
                        print "\n $diasemana \n";
                        }

                        if ($dia == 6){

                            $diasemana = "SEX";
                    
                            print "\n $diasemana \n";
                            }

                            if ($dia == 7){

                                $diasemana = "SAB";
                        
                                print "\n $diasemana \n";
                                }

        if($dia >7){
            print "Número não identificado.";  
        }

return $diasemana;  

}

print "Digite um número de 1 a 7: \n ";
$dia = (int) fgets (STDIN);

$diasemana = semana ($dia);
