<?php
function latir( $nome, $peso ) {
     
    if ($peso > 20) {
      print "$nome late WOOF WOOF \n";
     } 
     else {
      print "$nome late au au au au \n";
    }
}

latir( "Bob", 20 );
latir( "Laika", 17 );
latir( "Lola", 22 );
latir( "Walter Geoffrey", 13 );