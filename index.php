<?php  

function fibonacci($number){  

    if ($number == 0){
    
        return 0;    
    
    }else if ($number == 1){
        
        return 1;

    }else{
        return (fibonacci($number-1) + fibonacci($number-2));

    }

}
  

$number = 21;
    
if($number > 20 || $number < 1){

    echo'Invalid'; 

}else{

    for ($counter = 0; $counter < $number; $counter++){  

        echo fibonacci($counter),' ';

    }

}
    
?>