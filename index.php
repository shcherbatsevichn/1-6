<?php 
error_reporting(-1);
//Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.

//$n = 1679;  



$numf = 0; // текущая цифра 
for($i = 1000; $i < 9999; $i++){
    $value = $i;
    $counter = 0;
    while($value != 0){
        
        $numf = round((($value / 10 )- (floor($value / 10)) )*10);  // вычисляем текущую цифру
        $value = floor($value / 10);  
        if($numf == 0 ){
            $counter++;
        } 
        if($numf == 2 ){
            $counter++;
        }  
        if($numf == 3 ){
            $counter++;
        }     
        if($numf == 7 ){
            $counter++;
        }  
    }   
    if($counter == 4){
        echo ($i."<br>");
    }
}
  
