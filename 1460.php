<?php
// Próxima vez usar o ".sort" do PHP
$arrs = $arr;
$arrss = $arr;
$tamanho = count($target);
$tamanho--;
$help = 0;
$f = 0;
$stop = 0;

// Ordena os números
for ($i = 0; $i <= $tamanho; $i++){

    $help = $target[$i];
    $f = 0;

    for ($j = 0; $j <= $tamanho; $j++){

        while ($f != 1 && $stop != 1){
            if ($arrss[$j] == $help){
                $arrss[$j] = 0;
                $f = 1;
            }else{
                $stop = 1;
            }
        }

        
        if ($stop == 1){
            $stop = 0;
        }

        if ($arrs[$j] == $help){
            $arr[$i] = $help;
        }
    }
}

$help = 0;
for ($i = 0; $i <= $tamanho; $i++){
    $help = $help + $arrss[$i];
}
if ($help > 0){
    return false;
} 

// Verifica se os arrays são iguais
$help = 0;
for ($i = 0; $i <= $tamanho; $i++){
    if ($arr[$i] != $target[$i]){
        $help++;    
    }
}

if ($help > 0){
    return false;
}else{
    return true;
}

