<?php
$y = 1;
$z = 0;
$x = readline("Digite um número para saber se é primo: ");

if($x > 2){

    while($x > 2){

        primo($x, $y, $z);
        $x = readline("Digite um número parar saber se é primo: ");
        
                }
}
else{
    echo"programa finalizado";
}







function primo($x, $y, $z){
   
    for($y = 1;$y <= $x; $y++){

        if($x % $y == 0){
            $z++;
        }
    }
   
 if($z > 2){
    echo"$x não é primo\n";
        
 }
elseif($z == 2){
    echo"$x é primo\n";
        
     }
}
