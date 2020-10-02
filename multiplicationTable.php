<?php 
    
    $number = 7;
    $result = 0;

    echo 'multiplication table' .$number ;
    
    for ($i=1; $i <= 10 ; $i++) { 
        
        echo '<br>';
        
        print_r($i.' x '.$number .' = '.$result = $i * $number);
        
    }
    
?>