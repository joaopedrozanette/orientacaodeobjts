<?php

$num = 1;
$z = 0;
$primo =  array();
  

function teste_primo($num, $z){
  if($num > 2){
    for($i = 2; $i < $num; $i++){
        if($num % $i == 0){
            return false;
          }
      }
  }
        return true;

    }

  do{
    $num = readline("Informe numero: ");
  if($num > 1){
    $z = teste_primo($num, $z);
        if($z == true){
            array_push($primo, $num);
        }
    }
  }while($num != 0);

    echo "Os primos: ";
    foreach($primo as $v){
      echo $v . ", ";
    }
