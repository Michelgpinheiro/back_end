<?php 
    $C=intval(fgets(STDIN));
    $A=intval(fgets(STDIN));
    $maxalunos=$C-1;
    $viagens=intval($A/$maxalunos);

    if($A %$maxalunos !=0){
        $viagens++;
    }

    echo $viagens
?>